<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Indicators Controller
 *
 * @property \App\Model\Table\IndicatorsTable $Indicators
 */
class IndicatorsController extends AppController
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
        $indicators = $this->paginate($this->Indicators);

        $this->set(compact('indicators'));
        $this->set('_serialize', ['indicators']);
    }

    /**
     * View method
     *
     * @param string|null $id Indicator id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indicator = $this->Indicators->get($id, [
            'contain' => ['Regions']
        ]);

        $this->set('indicator', $indicator);
        $this->set('_serialize', ['indicator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indicator = $this->Indicators->newEntity();
        if ($this->request->is('post')) {
            $indicator = $this->Indicators->patchEntity($indicator, $this->request->data);
            if ($this->Indicators->save($indicator)) {
                $this->Flash->success(__('The indicator has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicator could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Indicators->Regions->find('list', ['limit' => 200]);
        $this->set(compact('indicator', 'regions'));
        $this->set('_serialize', ['indicator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Indicator id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indicator = $this->Indicators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indicator = $this->Indicators->patchEntity($indicator, $this->request->data);
            if ($this->Indicators->save($indicator)) {
                $this->Flash->success(__('The indicator has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicator could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Indicators->Regions->find('list', ['limit' => 200]);
        $this->set(compact('indicator', 'regions'));
        $this->set('_serialize', ['indicator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Indicator id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicator = $this->Indicators->get($id);
        if ($this->Indicators->delete($indicator)) {
            $this->Flash->success(__('The indicator has been deleted.'));
        } else {
            $this->Flash->error(__('The indicator could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
