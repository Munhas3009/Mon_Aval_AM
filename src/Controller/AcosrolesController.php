<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acosroles Controller
 *
 * @property \App\Model\Table\AcosrolesTable $Acosroles
 *
 * @method \App\Model\Entity\Acosrole[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcosrolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Acos', 'Roles']
        ];
        $acosroles = $this->paginate($this->Acosroles);

        $this->set(compact('acosroles'));
    }

    /**
     * View method
     *
     * @param string|null $id Acosrole id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acosrole = $this->Acosroles->get($id, [
            'contain' => ['Acos', 'Roles']
        ]);

        $this->set('acosrole', $acosrole);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acosrole = $this->Acosroles->newEntity();
        if ($this->request->is('post')) {
            $acosrole = $this->Acosroles->patchEntity($acosrole, $this->request->getData());
            if ($this->Acosroles->save($acosrole)) {
                $this->Flash->success(__('The {0} has been saved.', 'Acosrole'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Acosrole'));
        }
        $acos = $this->Acosroles->Acos->find('list', ['limit' => 200]);
        $roles = $this->Acosroles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('acosrole', 'acos', 'roles'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Acosrole id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acosrole = $this->Acosroles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acosrole = $this->Acosroles->patchEntity($acosrole, $this->request->getData());
            if ($this->Acosroles->save($acosrole)) {
                $this->Flash->success(__('The {0} has been saved.', 'Acosrole'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Acosrole'));
        }
        $acos = $this->Acosroles->Acos->find('list', ['limit' => 200]);
        $roles = $this->Acosroles->Roles->find('list', ['limit' => 200]);
        $this->set(compact('acosrole', 'acos', 'roles'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Acosrole id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acosrole = $this->Acosroles->get($id);
        if ($this->Acosroles->delete($acosrole)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Acosrole'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Acosrole'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
