<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Elements Controller
 *
 * @property \App\Model\Table\ElementsTable $Elements
 */
class ElementsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('elements', $this->paginate($this->Elements));
        $this->set('_serialize', ['elements']);
    }

    /**
     * View method
     *
     * @param string|null $id Element id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => []
        ]);
        $this->set('element', $element);
        $this->set('_serialize', ['element']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $element = $this->Elements->newEntity();
        if ($this->request->is('post')) {
            $element = $this->Elements->patchEntity($element, $this->request->data);
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The element has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The element could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('element'));
        $this->set('_serialize', ['element']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Element id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $element = $this->Elements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $element = $this->Elements->patchEntity($element, $this->request->data);
            if ($this->Elements->save($element)) {
                $this->Flash->success(__('The element has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The element could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('element'));
        $this->set('_serialize', ['element']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Element id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $element = $this->Elements->get($id);
        if ($this->Elements->delete($element)) {
            $this->Flash->success(__('The element has been deleted.'));
        } else {
            $this->Flash->error(__('The element could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
