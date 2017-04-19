<?php
App::uses('AppController', 'Controller');
/**
 * TimeParts Controller
 *
 * @property TimePart $TimePart
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TimePartsController extends AppController {

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
		$timeParts = $this->TimePart->find('all');
        if (!empty($this->request->params['requested'])) {
            return $timeParts;
        }
        $this->set('timeParts', $timeParts);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TimePart->exists($id)) {
			throw new NotFoundException(__('Invalid time part'));
		}
		$options = array('conditions' => array('TimePart.' . $this->TimePart->primaryKey => $id));
		$this->set('timePart', $this->TimePart->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TimePart->create();
			if ($this->TimePart->save($this->request->data)) {
				$this->Flash->success(__('The time part has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The time part could not be saved. Please, try again.'));
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
		if (!$this->TimePart->exists($id)) {
			throw new NotFoundException(__('Invalid time part'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TimePart->save($this->request->data)) {
				$this->Flash->success(__('The time part has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The time part could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TimePart.' . $this->TimePart->primaryKey => $id));
			$this->request->data = $this->TimePart->find('first', $options);
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
		$this->TimePart->id = $id;
		if (!$this->TimePart->exists()) {
			throw new NotFoundException(__('Invalid time part'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TimePart->delete()) {
			$this->Flash->success(__('The time part has been deleted.'));
		} else {
			$this->Flash->error(__('The time part could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TimePart->recursive = 0;
		$this->set('timeParts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TimePart->exists($id)) {
			throw new NotFoundException(__('Invalid time part'));
		}
		$options = array('conditions' => array('TimePart.' . $this->TimePart->primaryKey => $id));
		$this->set('timePart', $this->TimePart->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TimePart->create();
			if ($this->TimePart->save($this->request->data)) {
				$this->Flash->success(__('The time part has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The time part could not be saved. Please, try again.'));
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
		if (!$this->TimePart->exists($id)) {
			throw new NotFoundException(__('Invalid time part'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TimePart->save($this->request->data)) {
				$this->Flash->success(__('The time part has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The time part could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TimePart.' . $this->TimePart->primaryKey => $id));
			$this->request->data = $this->TimePart->find('first', $options);
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
		$this->TimePart->id = $id;
		if (!$this->TimePart->exists()) {
			throw new NotFoundException(__('Invalid time part'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TimePart->delete()) {
			$this->Flash->success(__('The time part has been deleted.'));
		} else {
			$this->Flash->error(__('The time part could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
