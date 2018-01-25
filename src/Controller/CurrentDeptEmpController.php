<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CurrentDeptEmp Controller
 *
 * @property \App\Model\Table\CurrentDeptEmpTable $CurrentDeptEmp
 *
 * @method \App\Model\Entity\CurrentDeptEmp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CurrentDeptEmpController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $currentDeptEmp = $this->paginate($this->CurrentDeptEmp);

        $this->set(compact('currentDeptEmp'));
    }

    /**
     * View method
     *
     * @param string|null $id Current Dept Emp id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $currentDeptEmp = $this->CurrentDeptEmp->get($id, [
            'contain' => []
        ]);

        $this->set('currentDeptEmp', $currentDeptEmp);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $currentDeptEmp = $this->CurrentDeptEmp->newEntity();
        if ($this->request->is('post')) {
            $currentDeptEmp = $this->CurrentDeptEmp->patchEntity($currentDeptEmp, $this->request->getData());
            if ($this->CurrentDeptEmp->save($currentDeptEmp)) {
                $this->Flash->success(__('The current dept emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The current dept emp could not be saved. Please, try again.'));
        }
        $this->set(compact('currentDeptEmp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Current Dept Emp id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $currentDeptEmp = $this->CurrentDeptEmp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $currentDeptEmp = $this->CurrentDeptEmp->patchEntity($currentDeptEmp, $this->request->getData());
            if ($this->CurrentDeptEmp->save($currentDeptEmp)) {
                $this->Flash->success(__('The current dept emp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The current dept emp could not be saved. Please, try again.'));
        }
        $this->set(compact('currentDeptEmp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Current Dept Emp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $currentDeptEmp = $this->CurrentDeptEmp->get($id);
        if ($this->CurrentDeptEmp->delete($currentDeptEmp)) {
            $this->Flash->success(__('The current dept emp has been deleted.'));
        } else {
            $this->Flash->error(__('The current dept emp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
