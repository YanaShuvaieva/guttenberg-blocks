<?php
// This file is generated. Do not modify it manually.
return array(
	'my-first-block' => array(
		'apiVersion' => 3,
		'name' => 'my-first-block/service-card',
		'title' => 'Карточка услуги',
		'category' => 'widgets',
		'icon' => 'id',
		'description' => 'Карточка с картинкой, заголовком и описанием.',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => ''
			),
			'description' => array(
				'type' => 'string',
				'default' => ''
			),
			'imageUrl' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
