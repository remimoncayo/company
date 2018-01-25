<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeptEmpLatestDate Controller
 *
 * @property \App\Model\Table\DeptEmpLatestDateTable $DeptEmpLatestDate
 *
 * @method \App\Model\Entity\DeptEmpLatestDate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeptEmpLatestDateController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $deptEmpLatestDate = $this->paginate($this->DeptEmpLatestDate);

        $this->set(compact('deptEmpLatestDate'));
    }

    /**
     * View method
     *
     * @param string|null $id Dept Emp Latest Date id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deptEmpLatestDate = $this->DeptEmpLatestDate->get($id, [
            'contain' => []
        ]);

        $this->set('deptEmpLatestDate', $deptEmpLatestDate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deptEmpLatestDate = $this->DeptEmpLatestDate->newEntity();
        if ($this->request->is('post')) {
            $deptEmpLatestDate = $this->DeptEmpLatestDate->patchEntity($deptEmpLatestDate, $this->request->getData());
            if ($this->DeptEmpLatestDate->save($deptEmpLatestDate)) {
                $this->Flash->success(__('The dept emp latest date has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dept emp latest date could not be saved. Please, try again.'));
        }
        $this->set(compact('deptEmpLatestDate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dept Emp Latest Date id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deptEmpLatestDate = $this->DeptEmpLatestDate->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deptEmpLatestDate = $this->DeptEmpLatestDate->patchEntity($deptEmpLatestDate, $this->request->getData());
            if ($this->DeptEmpLatestDate->save($deptEmpLatestDate)) {
                $this->Flash->success(__('The dept emp latest date has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dept emp latest date could not be saved. Please, try again.'));
        }
        $this->set(compact('deptEmpLatestDate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dept Emp Latest Date id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deptEmpLatestDate = $this->DeptEmpLatestDate->get($id);
        if ($this->DeptEmpLatestDate->delete($deptEmpLatestDate)) {
            $this->Flash->success(__('The dept emp latest date has been deleted.'));
        } else {
            $this->Flash->error(__('The dept emp latest date could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
