<?php

namespace App\Controller\Pasta;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 *
 * @method \App\Model\Entity\Tag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PastaController extends AppController {
    public function index(){
        $this->set('tags', "valor");
    }
}
