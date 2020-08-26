<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pictures Controller
 *
 * @property \App\Model\Table\PicturesTable $Pictures
 * @method \App\Model\Entity\Picture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PicturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles'],
        ];
        $pictures = $this->paginate($this->Pictures);

        $this->set(compact('pictures'));
    }

    /**
     * View method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $picture = $this->Pictures->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('picture'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $picture = $this->Pictures->newEmptyEntity();
        if ($this->request->is('post')) {
            $picture = $this->Pictures->patchEntity($picture, $this->request->getData());
            if ($this->Pictures->save($picture)) {
                $this->Flash->success(__('The picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture could not be saved. Please, try again.'));
        }
        $articles = $this->Pictures->Articles->find('list', ['limit' => 200]);
        $this->set(compact('picture', 'articles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $picture = $this->Pictures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $picture = $this->Pictures->patchEntity($picture, $this->request->getData());
            if ($this->Pictures->save($picture)) {
                $this->Flash->success(__('The picture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The picture could not be saved. Please, try again.'));
        }
        $articles = $this->Pictures->Articles->find('list', ['limit' => 200]);
        $this->set(compact('picture', 'articles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $picture = $this->Pictures->get($id);
        if ($this->Pictures->delete($picture)) {
            $this->Flash->success(__('The picture has been deleted.'));
        } else {
            $this->Flash->error(__('The picture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
