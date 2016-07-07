<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PreparedJobs Controller
 *
 * @property \App\Model\Table\PreparedJobsTable $PreparedJobs
 */
class PreparedJobsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Regions']
        ];
        $preparedJobs = $this->paginate($this->PreparedJobs);

        $this->set(compact('preparedJobs'));
        $this->set('_serialize', ['preparedJobs']);
    }

    /**
     * View method
     *
     * @param string|null $id Prepared Job id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preparedJob = $this->PreparedJobs->get($id, [
            'contain' => ['Regions']
        ]);

        $this->set('preparedJob', $preparedJob);
        $this->set('_serialize', ['preparedJob']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preparedJob = $this->PreparedJobs->newEntity();
        if ($this->request->is('post')) {
            $preparedJob = $this->PreparedJobs->patchEntity($preparedJob, $this->request->data);
            if ($this->PreparedJobs->save($preparedJob)) {
                $this->Flash->success(__('The prepared job has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prepared job could not be saved. Please, try again.'));
            }
        }
        $regions = $this->PreparedJobs->Regions->find('list', ['limit' => 200]);
        $this->set(compact('preparedJob', 'regions'));
        $this->set('_serialize', ['preparedJob']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prepared Job id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preparedJob = $this->PreparedJobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preparedJob = $this->PreparedJobs->patchEntity($preparedJob, $this->request->data);
            if ($this->PreparedJobs->save($preparedJob)) {
                $this->Flash->success(__('The prepared job has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prepared job could not be saved. Please, try again.'));
            }
        }
        $regions = $this->PreparedJobs->Regions->find('list', ['limit' => 200]);
        $this->set(compact('preparedJob', 'regions'));
        $this->set('_serialize', ['preparedJob']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prepared Job id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preparedJob = $this->PreparedJobs->get($id);
        if ($this->PreparedJobs->delete($preparedJob)) {
            $this->Flash->success(__('The prepared job has been deleted.'));
        } else {
            $this->Flash->error(__('The prepared job could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
