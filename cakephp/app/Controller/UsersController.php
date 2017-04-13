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

	var $name = "Users";
   	var $helpers = array("Form","Paginator","Html");
   	var $component = array("Session"); //Sử dụng session để lưu biến khi đăng nhập



   	//Dùng để tìm kiếm user 

   	function view1() {
		$conditions = array();
		$data = array();

		if(!empty($this->passedArgs)){
			if (isset($this->passedArgs['User.description'])){ //Kiem tra du lieu co ton tai hay khong
				$description = $this->passedArgs['User.description'];
				$conditions[] = array('User.description LIKE' => "%description%",); //dieu kien SQl
				$data['User']['description'] = $description; //cho gia tri nhap vao mang
				
			}
			if (isset($this->passedArgs['User.address'])) {
				$address = $this->passedArgs['User.description'];
				$conditions[] = array('OR' => array('User.address LIKE' => "%address%"));
				$data['User']['address'] = $address;
			}
			$this->paginate = array('limit'=>2, 'order' =>array('id' => 'desc'), );
			$this->data = $data; //giu lai gia tri nhap vao sau khi submit
			$post = $this->paginate("User",$conditions);
			$this->set("posts",$post);
		}
	}

	function search() {
		$url['action'] = 'view1';

		foreach ($this->data as $key => $value) {
			foreach ($value as $key2 => $value2) {
				$url[$key.'.'.$key2] = $value2;
			}
		}
		$this->redirect($url, null, true); //chuyen huong sang action view
	}

   	// Dùng để dăng kí

   	public function register1() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('Bạn đã đăng ký thành công!'));
				return $this->redirect('/users/index');
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}
 	

 	//Dùng để login //

   function login(){


   	 // in ra lỗi
     $error="";

     if(isset($_POST['ok'])){

       $username = $_POST['username'];
       $password = $_POST['password'];

       //Kiểm tra xem nếu là admin thì chuyển đến trang quản trị
       if($this->User->checkLoginAdmin($username,$password)){

	        $this->Session->write("session",$username); //ghi session để lưu tên username
	        $this->redirect(array('controller'=>'admin','action'=>'users/index'));//đăng nhập thành công chuyển trang thông tin

	    //Kiểm tra xem nếu là user thường thì chuyển đến trang chủ người dùng
       }else if($this->User->checkLoginUser($username,$password)){

       		$this->Session->write("session",$username); //ghi session
	        $this->redirect('index');//đăng nhập thành công chuyển trang thông tin

	    // Nếu k đúng thì in ra lỗi
       }else{

        $error = "Tên đăng nhập hoặc mật khẩu không đúng";

       }
    }
    $this->set("error",$error);
   }
 	
 	// đăng xuất
    function logout(){
      $this->Session->delete('session'); //xóa session
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
