<?php
App::uses('AppController', 'Controller');
/**
 * Invitations Controller
 *
 * @property Invitation $Invitation
 * @property PaginatorComponent $Paginator
 */
class InvitationsController extends AppController {

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
		$this->Invitation->recursive = 0;
		$this->set('invitations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Invitation->exists($id)) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		$options = array('conditions' => array('Invitation.' . $this->Invitation->primaryKey => $id));
		$this->set('invitation', $this->Invitation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Invitation->create();
			if ($this->Invitation->save($this->request->data)) {
				$this->Flash->success(__('The invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The invitation could not be saved. Please, try again.'));
			}
		}
		$owners = $this->Invitation->Owner->find('list');
		$receivers = $this->Invitation->Receiver->find('list');
		$this->set(compact('owners', 'receivers'));
	}
	
	public function apply()
	{
		if ($this->request->is('post')) {
			if ($this->Invitation->save($this->request->data)) {
				$data = $this->request->data;
				$data['sender_id'] = 5;
				$data['status'] = 'PENDING';
				$this->Invitation->save($data);
			}
		}
		$this->redirect($this->referer());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Invitation->exists($id)) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Invitation->save($this->request->data)) {
				$this->Flash->success(__('The invitation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The invitation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Invitation.' . $this->Invitation->primaryKey => $id));
			$this->request->data = $this->Invitation->find('first', $options);
		}
		$owners = $this->Invitation->Owner->find('list');
		$receivers = $this->Invitation->Receiver->find('list');
		$this->set(compact('owners', 'receivers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Invitation->id = $id;
		if (!$this->Invitation->exists()) {
			throw new NotFoundException(__('Invalid invitation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Invitation->delete()) {
			$this->Flash->success(__('The invitation has been deleted.'));
		} else {
			$this->Flash->error(__('The invitation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
