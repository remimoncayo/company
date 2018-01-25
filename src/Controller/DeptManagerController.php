<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeptManager Controller
 *
 * @property \App\Model\Table\DeptManagerTable $DeptManager
 *
 * @method \App\Model\Entity\DeptManager[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeptManagerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $deptManager = $this->paginate($this->DeptManager);

        $this->set(compact('deptManager'));
    }

    /**
     * View method
     *
     * @param string|null $id Dept Manager id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deptManager = $this->DeptManager->get($id, [
            'contain' => []
        ]);

        $this->set('deptManager', $deptManager);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deptManager = $this->DeptManager->newEntity();
        if ($this->request->is('post')) {
            $deptManager = $this->DeptManager->patchEntity($deptManager, $this->request->getData());
            if ($this->DeptManager->save($deptManager)) {
                $this->Flash->success(__('The dept manager has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dept manager could not be saved. Please, try again.'));
        }
        $this->set(compact('deptManager'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dept Manager id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deptManager = $this->DeptManager->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deptManager = $this->DeptManager->patchEntity($deptManager, $this->request->getData());
            if ($this->DeptManager->save($deptManager)) {
                $this->Flash->success(__('The dept manager has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dept manager could not be saved. Please, try again.'));
        }
        $this->set(compact('deptManager'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dept Manager id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deptManager = $this->DeptManager->get($id);
        if ($this->DeptManager->delete($deptManager)) {
            $this->Flash->success(__('The dept manager has been deleted.'));
        } else {
            $this->Flash->error(__('The dept manager could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
