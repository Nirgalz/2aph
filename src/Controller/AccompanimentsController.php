<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Accompaniments Controller
 *
 * @property \App\Model\Table\AccompanimentsTable $Accompaniments
 */
class AccompanimentsController extends AppController
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
        $accompaniments = $this->paginate($this->Accompaniments);

        $this->set(compact('accompaniments'));
        $this->set('_serialize', ['accompaniments']);
    }

    /**
     * View method
     *
     * @param string|null $id Accompaniment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accompaniment = $this->Accompaniments->get($id, [
            'contain' => ['Regions']
        ]);

        $this->set('accompaniment', $accompaniment);
        $this->set('_serialize', ['accompaniment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accompaniment = $this->Accompaniments->newEntity();
        if ($this->request->is('post')) {
            $accompaniment = $this->Accompaniments->patchEntity($accompaniment, $this->request->data);
            if ($this->Accompaniments->save($accompaniment)) {
                $this->Flash->success(__('The accompaniment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The accompaniment could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Accompaniments->Regions->find('list', ['limit' => 200]);
        $this->set(compact('accompaniment', 'regions'));
        $this->set('_serialize', ['accompaniment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Accompaniment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accompaniment = $this->Accompaniments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accompaniment = $this->Accompaniments->patchEntity($accompaniment, $this->request->data);
            if ($this->Accompaniments->save($accompaniment)) {
                $this->Flash->success(__('The accompaniment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The accompaniment could not be saved. Please, try again.'));
            }
        }
        $regions = $this->Accompaniments->Regions->find('list', ['limit' => 200]);
        $this->set(compact('accompaniment', 'regions'));
        $this->set('_serialize', ['accompaniment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Accompaniment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accompaniment = $this->Accompaniments->get($id);
        if ($this->Accompaniments->delete($accompaniment)) {
            $this->Flash->success(__('The accompaniment has been deleted.'));
        } else {
            $this->Flash->error(__('The accompaniment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
