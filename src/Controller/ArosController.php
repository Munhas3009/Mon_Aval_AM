<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aros Controller
 *
 * @property \App\Model\Table\ArosTable $Aros
 *
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Roles']
        ];
        $aros = $this->paginate($this->Aros);

        $this->set(compact('aros'));
    }

    /**
     * View method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => ['Users', 'Roles']
        ]);

        $this->set('aro', $aro);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aro = $this->Aros->newEntity();
        if ($this->request->is('post')) {
            $aro = $this->Aros->patchEntity($aro, $this->request->getData());
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Aro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Aro'));
        }
        $users = $this->Aros->Users->find('list', ['limit' => 200]);
        $roles = $this->Aros->Roles->find('list', ['limit' => 200]);
        $this->set(compact('aro', 'users', 'roles'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aro = $this->Aros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aro = $this->Aros->patchEntity($aro, $this->request->getData());
            if ($this->Aros->save($aro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Aro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Aro'));
        }
        $users = $this->Aros->Users->find('list', ['limit' => 200]);
        $roles = $this->Aros->Roles->find('list', ['limit' => 200]);
        $this->set(compact('aro', 'users', 'roles'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Aro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aro = $this->Aros->get($id);
        if ($this->Aros->delete($aro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Aro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Aro'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
