<?php

namespace App\Controller\Medico;

use App\Controller\AppController;

/**
 * Tratamentos Controller
 *
 * @property \App\Model\Table\TratamentosTable $Tratamentos
 *
 * @method \App\Model\Entity\Tratamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TratamentosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Unidades', 'Users', 'Pacientes', 'Diagnosticos', 'Categories']
        ];
        $tratamentos = $this->paginate($this->Tratamentos);

        $this->set(compact('tratamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => ['Unidades', 'Users', 'Pacientes', 'Diagnosticos', 'Categories']
        ]);

        $this->set('tratamento', $tratamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $tratamento = $this->Tratamentos->newEntity();
        if ($this->request->is('post')) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());

            // Added this line
            $tratamento->user_id = $this->Auth->user('id');
// You could also do the following
//$newData = ['user_id' => $this->Auth->user('id')];
//$article = $this->Articles->patchEntity($article, $newData);

            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $categories = $this->Tratamentos->Categories->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'pacientes', 'diagnosticos', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $tratamento = $this->Tratamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tratamento = $this->Tratamentos->patchEntity($tratamento, $this->request->getData());
            if ($this->Tratamentos->save($tratamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tratamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tratamento'));
        }
        $unidades = $this->Tratamentos->Unidades->find('list', ['limit' => 200]);
        $users = $this->Tratamentos->Users->find('list', ['limit' => 200]);
        $pacientes = $this->Tratamentos->Pacientes->find('list', ['limit' => 200]);
        $diagnosticos = $this->Tratamentos->Diagnosticos->find('list', ['limit' => 200]);
        $categories = $this->Tratamentos->Categories->find('list', ['limit' => 200]);
        $this->set(compact('tratamento', 'unidades', 'users', 'pacientes', 'diagnosticos', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tratamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $tratamento = $this->Tratamentos->get($id);
        if ($this->Tratamentos->delete($tratamento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tratamento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tratamento'));
        }

        return $this->redirect(['action' => 'index']);
    }

    //we define function auth

    public function isAuthorized($user) {
// All registered users can add articles
// Prior to 3.4.0 $this->request->param('action') was used.
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
// The owner of an article can edit and delete it
// Prior to 3.4.0 $this->request->param('action') was used.
        if (in_array($this->request->getParam('action'), ['edit', 'index', 'delete'])) {
// Prior to 3.4.0 $this->request->params('pass.0')
            $tratamentoId = (int) $this->request->getParam('pass.0');
            if ($this->Tratamentos->isOwnedBy($tratamentoId, $user['id'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

}
