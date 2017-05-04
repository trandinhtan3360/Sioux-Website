<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsersController extends AppController {
	
	public function user_profile(){
		echo $this->webroot.'users/user_view_profile/'.$user['User']['id'];
	}
	
	public function user_edit_profile($id = null) {
		if($this->Session->check("session")){//kiểm tra có session hay không
        $user_data = $this->Session->read('session');
        $this->set("user_data", $user_data);}
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Sửa đổi thông tin thành công.'));
				return $this->redirect(array('action' => 'user_view_profile/'.$user_data['id']));
			} else {
				$this->Flash->error(__('Sửa đổi thông tin thất bại.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}
	
	public function register() {
   if ($this->request->is('post')) {
       $this->User->create();
       $this->request->data['User']['password'] = $this->request->data['User']['password'];
       $this->request->data['User']['confirm_password'] = $this->request->data['User']['confirm_password'];
       if ($this->User->save($this->request->data)) {
           $this->Flash->success(__('Bạn đã đăng ký thành công.'));
           return $this->redirect('/login');
       } else {
           $this->Flash->error(__('Tài khoản bạn đăng ký chưa đúng, vui lòng thử lại.'));
       }
   }
}
/*----Funciton hiển thị tất cả những người osin------*/
	public function employees() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		$Users = $this->User->find('all',
			array(
				'conditions'=> 
				array(
					'role' => 2
					),
				'limit'=>12,

				));

        if (!empty($this->request->params['requested'])){
            return $Users;
        }
        $this->set('Users', $Users);
	}
/*----Close function hiển thị tất cả những người osin------*/


	var $name = "Users";
   var $helpers = array("Html");
   var $component = array("Session"); //Sử dụng session để lưu biến khi đăng nhập
   

 	//Dùng để login //
   function login(){


   	 // in ra lỗi
     $error="";

     if(isset($_POST['ok'])){

       $email = $_POST['username'];
       $password = $_POST['password'];

       //Kiểm tra xem nếu là admin thì chuyển đến trang quản trị
       if($this->User->checkLoginAdmin($email,$password)){

	        $this->Session->write("session1",$this->User->checkLoginAdmin($email,$password)); //ghi session để lưu tên username
	        return $this->redirect(array('controller'=>'admin','action'=>'users/index'));//đăng nhập thành công chuyển trang thông tin

	    //Kiểm tra xem nếu là user thường thì chuyển đến trang chủ người dùng
       }else if($this->User->checkLoginUser($email,$password)){
		   
       		$this->Session->write("session",$this->User->checkLoginUser($email,$password)); //ghi session
	        return $this->redirect(array('controller'=>'/'));//đăng nhập thành công chuyển trang thông tin

	    // Nếu k đúng thì in ra lỗi
       }else{

        $error = "Tên đăng nhập hoặc mật khẩu không đúng";

       }
    }
    $this->set("error",$error);
	}
	
	public function user_view_profile($id = null) {
		
		if($this->Session->check("session")){//kiểm tra có session hay không
        $user_data = $this->Session->read('session');
        $this->set("user_data", $user_data);
		
	  }
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
	
 	function infor(){
      if($this->Session->check("session")){//kiểm tra có session hay không
        $user_data = $this->Session->read('session');
        $this->set("user_data", $user_data);
		
	  }
	}
	function admin_infor(){
      if($this->Session->check("session1")){//kiểm tra có session hay không
        $admin_data = $this->Session->read('session');
        $this->set("admin_data", $admin_data);
		
	  }
	}
	
	public function user_view_post($id = null) {
		if($this->Session->check("session")){//kiểm tra có session hay không
	        $user_data = $this->Session->read('session');
			$this->set("user_data", $user_data);
			$this->loadModel('Post');
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->Post->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
		
		}else{
			echo 'Vui lòng đăng nhập để dùng chức năng này';
		}
	}
	
	
	public function publish_post() {
		if($this->Session->check("session")){//kiểm tra có session hay không
	        $user_data = $this->Session->read('session');
	        $this->set("user_data", $user_data);
			if ($this->request->is('post')) {
				$this->loadModel('Post');
				$this->Post->create('Post');
				$date = explode('-',$this->request->data["Post"]["end_date"]);
				$originalDate = $date[2] . "-".$date[0]."-" . $date[1];
				$this->request->data["Post"]["end_date"] = date("Y-m-d", strtotime($originalDate));
				
				
				if ($this->Post->save($this->request->data)) {
					$this->Flash->success(__('Bạn đã đăng bài thành công'));
					return $this->redirect(array('action' => 'user_post_list'));
				} else {
					$this->Flash->error(__('Bạn đăng bài không thành không. Xin hãy thử lại.'));
				}
			}
		}else{
			echo 'Vui lòng đăng nhập để dùng chức năng này';
		}
	}
	
	public function user_post_list(){
		if($this->Session->check("session")){//kiểm tra có session hay không
	        $user_data = $this->Session->read('session');
			$this->set("user_data", $user_data);
			$this->loadModel('Post');
			$this->Post->recursive = 0;
			$this->set('posts', $this->Paginator->paginate());

			
				$Posts = $this->Post->find('all', array('conditions' => array('Post.users_id' => $user_data['id'])));
				if (!empty($this->request->params['requested'])) {
					return $Posts;
				}
				$this->set('Posts', $Posts);
			}
			
		}
	
	
	
	public function user_edit_post($id = null)
		{
			if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is(array('post', 'put'))) {
				if ($this->User->save($this->request->data)) {
					$this->Flash->success(__('Cập nhật bài đăng thành công.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('Cập nhật bài đăng không thành công.'));
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		}
	
	
 	// đăng xuất
    function logout(){
      $this->Session->delete('session'); //xóa session
	   $this->Session->delete('session1'); //xóa session1
      $this->redirect("login"); //chuyển trang login
    }
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	
	
	public function detail_employees() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		$Users = $this->User->find('all',
			array(
				'conditions'=> 
				array(
					'role' => 2
					),
				'limit'=>12,

				));

        if (!empty($this->request->params['requested'])){
            return $Users;
        }
        $this->set('Users', $Users);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->data['User']['password'] = $this->request->data['User']['password'];
		$this->request->data['User']['confirm_password'] = $this->request->data['User']['confirm_password'];
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
