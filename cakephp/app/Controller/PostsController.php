<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {
	
	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
 
	
 
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
		$Posts = $this->Post->find('all', array('conditions' => array('time_parts_id' => 1), 'limit' => 1, 'order' => 'Post.created DESC'));
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
		
	}
	
	public function index1(){
		$Posts = $this->Post->find('all', array('limit' => 5 , 'order' => 'Post.created DESC'));
			if (!empty($this->request->params['requested'])) {
				return $Posts;
			}
			$this->set('Posts', $Posts);
	}
	
	public function post_part_time() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
		$Posts = $this->Post->find('all', array('conditions' => array('time_parts_id' => 2), 'limit' => 1, 'order' => 'Post.created DESC'));
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
		
	}

	public function post_list(){
		// we prepare our query, the cakephp way!
		$this->paginate = array(
			'conditions' => array('Post.id !=' => '6'),
			'limit' => 5,
			'order' => array('id' => 'desc')
		);
		 
		// we are using the 'User' model
		$posts = $this->paginate('Post');
		 
		// pass the value to our view.ctp
		$this->set('posts', $posts);
	
	}
	
	// Add function hiển thị thông tin tuyển dụng
	public function post_information(){
	$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	
		$Posts = $this->Post->find('all', array('limit' =>5, 'order' => 'Post.created DESC'));
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
	}
// End function hiển thị thông tin tuyển dụng

	public function post_sidebar(){
	$this->Post->recursive = 0;
	$this->set('posts', $this->Paginator->paginate());
	
	$Posts = $this->Post->find('all', array('limit' => 3, 'order' => 'Post.created DESC') );
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
	
	}
	
	
	public function expired_post()
	{
		$date1 = date("Y-m-d");
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
		$Posts = $this->Post->find('all', array('conditions' => array('Post.end_date <=' => $date1)));
		if($Posts){
			return $Posts;
			if (!empty($this->request->params['requested'])) {
            return $Posts;
			}
			$this->set('Posts', $Posts);
		}else {
			echo "Chưa có bài đăng hết hạn!";
		}
        
		
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			$date = explode('-',$this->request->data["Post"]["end_date"]);
			$originalDate = $date[2] . "-".$date[0]."-" . $date[1];
			$this->request->data["Post"]["end_date"] = date("Y-m-d", strtotime($originalDate));
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Bạn đã đăng bài thành công'));
				return $this->redirect(array('action' => 'post_list'));
			} else {
				$this->Flash->error(__('Bạn đăng bài không thành không. Xin hãy thử lại.'));
			}
		}
		$salaries = $this->Post->Salaries->find('all');
		$timeParts = $this->Post->TimeParts->find('all');
		$countries = $this->Post->Countries->find('all');
		$users = $this->Post->Users->find('list');
		$categories = $this->Post->Categories->find('list');
		$this->set(compact('salaries', 'timeParts', 'countries', 'users', 'categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$salaries = $this->Post->Salaries->find('all');
		$timeParts = $this->Post->TimeParts->find('all');
		$countries = $this->Post->Countries->find('all');
		$users = $this->Post->Users->find('list');
		$categories = $this->Post->Categories->find('list');
		$this->set(compact('salaries', 'timeParts', 'countries', 'users', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		}
		$salaries = $this->Post->Salaries->find('all');
		$timeParts = $this->Post->TimeParts->find('all');
		$countries = $this->Post->Countries->find('all');
		$users = $this->Post->Users->find('list');
		$categories = $this->Post->Categories->find('list');
		$this->set(compact('salaries', 'timeParts', 'countries', 'users', 'categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$salaries = $this->Post->Salaries->find('all');
		$timeParts = $this->Post->TimeParts->find('all');
		$countries = $this->Post->Countries->find('all');
		$users = $this->Post->Users->find('list');
		$categories = $this->Post->Categories->find('list');
		$this->set(compact('salaries', 'timeParts', 'countries', 'users', 'categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
		public function get_keyword(){
        if($this ->request->is('post')){
            $this->Product->set($this->request->data);
            $keyword = $this->request->data['User']['keyword'];
            $this->redirect(array('action'=>'search','keyword'=>$keyword));

        }
      }

       public function search() {
      	$this->set('layout','Giúp Việc');
      	if(isset($_GET['q']) && trim($_GET['q']) != ''){
      		$keyword = trim($_GET['q']);
      		//Search user
      		$posts = $this->Post->find('all', array(
      			'conditions' => array(
  					'OR' => array(
						array('title LIKE' => '%'.$keyword.'%'),
						array('content LIKE' => '%'.$keyword.'%'),
						array('name LIKE' => '%'.$keyword.'%'),
						array('salaries LIKE' => '%'.$keyword.'%'),
						array('type LIKE' => '%'.$keyword.'%'),
					),
  				),
  				'order'=>'Post.id DESC',
  				'limit'=>10,
			));
		

			//Search user
			$this->loadModel('User');
			$users = $this->User->find('all', array(
      			'conditions' => array(
  					'OR' => array(
						array('full_name LIKE' => '%'.$keyword.'%'),
						array('username LIKE' => '%'.$keyword.'%'),
						array('email LIKE' => '%'.$keyword.'%'),
						array('address LIKE' => '%'.$keyword.'%'),
						array('dob LIKE' => '%'.$keyword.'%'),
						array('phone LIKE' => '%'.$keyword.'%'),
						array('description LIKE' => '%'.$keyword.'%')
					),
  				),
  				'order'=>'User.id DESC',
  				'limit'=>10,
			));
			$this->set('posts', $posts);
      		$this->set('users', $users);
      	} else 
			{
      		$this->set('posts', array());
      		$this->set('users', array());
			}
    }
	
	public function admin_post_list(){
	$this->Post->recursive = 0;
	$this->set('posts', $this->Paginator->paginate());
	
	$Posts = $this->Post->find('all');
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
	
	}
	
	public function admin_expired_post_list() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	
		$Posts = $this->Post->find('all');
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
		
	}
}
