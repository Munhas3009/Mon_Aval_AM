<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Acos Controller
 *
 * @property \App\Model\Table\AcosTable $Acos
 *
 * @method \App\Model\Entity\Aco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Controllers', 'Actions']
        ];
        $acos = $this->paginate($this->Acos);

        $this->set(compact('acos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aco = $this->Acos->get($id, [
            'contain' => ['Controllers', 'Actions', 'Acosroles']
        ]);

        $this->set('aco', $aco);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aco = $this->Acos->newEntity();
        if ($this->request->is('post')) {
            $aco = $this->Acos->patchEntity($aco, $this->request->getData());
            if ($this->Acos->save($aco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Aco'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Aco'));
        }
        $controllers = $this->Acos->Controllers->find('list', ['limit' => 200]);
        $actions = $this->Acos->Actions->find('list', ['limit' => 200]);
        $this->set(compact('aco', 'controllers', 'actions'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Aco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aco = $this->Acos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aco = $this->Acos->patchEntity($aco, $this->request->getData());
            if ($this->Acos->save($aco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Aco'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Aco'));
        }
        $controllers = $this->Acos->Controllers->find('list', ['limit' => 200]);
        $actions = $this->Acos->Actions->find('list', ['limit' => 200]);
        $this->set(compact('aco', 'controllers', 'actions'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Aco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aco = $this->Acos->get($id);
        if ($this->Acos->delete($aco)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Aco'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Aco'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
