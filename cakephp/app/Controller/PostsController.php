<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PostsController extends AppController {




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
	$this->Post->recursive = 0;
	$this->set('posts', $this->Paginator->paginate());

	$Posts = $this->Post->find('all', array('conditions' => array('salaries_id' => 6), 'limit' => 1));
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
}

public function post_part_time() {
	$this->Post->recursive = 0;
	$this->set('posts', $this->Paginator->paginate());

	$Posts = $this->Post->find('all', array('conditions' => array('salaries_id' => 5), array('limit' => 1));
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
}

public function post_list()
{
	$this->Post->recursive = 0;
	$this->set('posts', $this->Paginator->paginate());
	$Posts = $this->Post->find('all');
        if (!empty($this->request->params['requested'])) {
            return $Posts;
        }
        $this->set('Posts', $Posts);
	}



public function post_successfull()
{
	$this->webroot;
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
		// $this->request->data = date('Y-m-d H:m:s', strtotime($this->request->data["Post"]["end_date"]));
		if ($this->Post->save($this->request->data)) {
			$this->Flash->success(__('The post has been saved.'));
			return $this->redirect(array('action' => 'post_successfull'));
		} else {
			$this->Flash->error(__('The post could not be saved. Please, try again.'));
		}
	}
	$salaries = $this->Post->Salaries->find('list');
	$timeParts = $this->Post->TimeParts->find('list');
	$countries = $this->Post->Countries->find('list');
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
	$salaries = $this->Post->Salary->find('list');
	$timeParts = $this->Post->TimePart->find('list');
	$countries = $this->Post->Country->find('list');
	$users = $this->Post->User->find('list');
	$categories = $this->Post->Category->find('list');
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
	$salaries = $this->Post->Salary->find('list');
	$timeParts = $this->Post->TimePart->find('list');
	$countries = $this->Post->Country->find('list');
	$users = $this->Post->User->find('list');
	$categories = $this->Post->Category->find('list');
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
}
