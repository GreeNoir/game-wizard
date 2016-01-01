<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Family Controller
 *
 * @property \App\Model\Table\FamilyTable $Family
 */
class FamilyController extends AppController
{

    public $paginate = [
        'order' => ['FamilyID' => 'ASC']
    ];

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('family', $this->paginate($this->Family));
        $this->set('_serialize', ['family']);
    }

    /**
     * View method
     *
     * @param string|null $id Family id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $family = $this->Family->get($id, [
            'contain' => []
        ]);
        $this->set('family', $family);
        $this->set('_serialize', ['family']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $family = $this->Family->newEntity();
        if ($this->request->is('post')) {
            $family = $this->Family->patchEntity($family, $this->request->data);
            if ($this->Family->save($family)) {
                $this->Flash->success(__('The family has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The family could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('family'));
        $this->set('_serialize', ['family']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Family id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $family = $this->Family->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $family = $this->Family->patchEntity($family, $this->request->data);
            if ($this->Family->save($family)) {
                $this->Flash->success(__('The family has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The family could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('family'));
        $this->set('_serialize', ['family']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Family id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $family = $this->Family->get($id);
        if ($this->Family->delete($family)) {
            $this->Flash->success(__('The family has been deleted.'));
        } else {
            $this->Flash->error(__('The family could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
