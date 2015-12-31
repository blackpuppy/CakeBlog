<?php

App::uses('Model', 'Model');

class Tag extends AppModel {
	public $validate = array(
		'name' => array(
			'rule' => 'notBlank'
		)
	);

	public $hasAndBelongsToMany = array(
		'Post' => array(
			'className' => 'Post'
			,'joinTable' => 'posts_tags'
			,'foreignKey' => 'tag_id'
			,'associationForeignKey' => 'post_id'
			,'unique' => true
		)
	);
}
