<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\GuildSkillTable;

/**
 * Guild Controller
 *
 * @property \App\Model\Table\GuildTable $Guild
 */
class GuildController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('guild', $this->paginate($this->Guild));
        $this->set('_serialize', ['guild']);
    }

    /**
     * View method
     *
     * @param string|null $id Guild id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guild = $this->Guild->get($id, [
            'contain' => ['GuildSkill', 'City', 'CommerceRank']
        ]);
        $this->set('guild', $guild);
        $this->set('_serialize', ['guild']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guild = $this->Guild->newEntity();
        if ($this->request->is('post')) {
            $guild = $this->Guild->patchEntity($guild, $this->request->data);
            if ($this->Guild->save($guild)) {
                $this->Flash->success(__('The guild has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guild could not be saved. Please, try again.'));
            }
        }
        $skill = $this->Guild->Skill->find('list', ['limit' => 200]);
        $this->set(compact('guild', 'skill'));
        $this->set('_serialize', ['guild']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Guild id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guild = $this->Guild->get($id, [
            'contain' => ['GuildSkill']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guild = $this->Guild->patchEntity($guild, $this->request->data);
            if ($this->Guild->save($guild)) {
                $this->Flash->success(__('The guild has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guild could not be saved. Please, try again.'));
            }
        }
        $skill = $this->Guild->GuildSkill->find()->where(['guild_id' => $guild->ID]);
        $skills = [];
        foreach($skill as $skill) {
            $skills[] = $skill->skill_id;
        }
        $this->set(compact('guild', 'skills'));
        $this->set('_serialize', ['guild']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Guild id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guild = $this->Guild->get($id);
        if ($this->Guild->delete($guild)) {
            $this->Flash->success(__('The guild has been deleted.'));
        } else {
            $this->Flash->error(__('The guild could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function edit_skill() {
        $skillID = $this->request->query['skill_id'];
        $guildID = $this->request->query['guild_id'];
        $this->loadModel('GuildSkill');
        $guildSkill = $this->GuildSkill->find()->where(['guild_id' => $guildID, 'skill_id' => $skillID])->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guildSkill = $this->GuildSkill->patchEntity($guildSkill, $this->request->data);
            if ($this->GuildSkill->save($guildSkill)) {
                $this->Flash->success(__('The skill sprite has been saved.'));
                return $this->redirect(['action' => 'view', $guildID]);
            } else {
                $this->Flash->error(__('The family sprite could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guildSkill'));
        $this->set('_serialize', ['guildSkill']);
    }

    public function delete_skill($skillID) {

    }

}
