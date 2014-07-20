<?php

App::uses('Model', 'Model');

class Tag extends AppModel {
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );
}