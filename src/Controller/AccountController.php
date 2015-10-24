<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Account Controller
 *
 * @property \App\Model\Table\AccountTable $Account
 */
class AccountController extends AppController {

    public $paginate = array(
        'limit' => 20
    );

    /**
     * Edit method
     *
     * @param string|null $id Account id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->Account->initConnectionParams($id);

        $account = $this->Account->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Account->patchEntity($account, $this->request->data);
            if ($this->Account->save($account)) {
                $this->Flash->success(__('The account common has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The account common could not be saved. Please, try again.'));
            }
        }

        $account->mac = $this->Account->getMac();
        $this->set(compact('account'));
        $this->set('_serialize', ['account']);
        $this->set('isIpBanned', $this->Account->isBanIp($id));
        $this->set('isMacBanned', $this->Account->isBanMac($id));
    }
}