<?php

class Box extends AppModel {
	public $validate = array(
        'login' => array(
            'rule' => 'notEmpty'
        ),
		'senha' => array(
            'rule' => 'notEmpty'
        ),
        'nome' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>