<?php

App::uses('Model', 'Model');

class Post extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notBlank'
		),
		'body' => array(
			'rule' => 'notBlank'
		)
	);

	public $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag'
			,'joinTable' => 'posts_tags'
			,'foreignKey' => 'post_id'
			,'associationForeignKey' => 'tag_id'
			,'unique' => true
		)
	);
}
