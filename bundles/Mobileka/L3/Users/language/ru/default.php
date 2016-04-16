<?php

return array(
	'controllers' => array(
		'admin' => array(
			'default' => array(
				'titles' => array(
					'index' => 'Список пользователей',
					'view' => 'Просмотр профиля пользователя',
					'add' => 'Создание нового пользователя',
					'edit' => 'Редактирование пользователя',
					'singin' => 'Вход для своих'
				)
			),
			'groups' => array(
				'titles' => array(
					'index' => 'Список категорий пользователей',
					'add' => 'Создание новой группы пользователей',
					'edit' => 'Редактирование группы пользователей',
				)
			),
		)
	),
	'messages' => array(
		'signin' => 'Добро пожаловать в панель управления Михалычем!'
	),
	'labels' => array(
		'email' => 'Логин',
		'name' => 'Настоящее имя',
		'contacts' => 'Контакты',
		'group_id' => 'Категория пользователя',
		'enabled_fields_json' => 'Доступные поля'

	),
	'form' => array(),
	'grid' => array(
		'email' => 'Логин',
		'name' => 'Настоящее имя',
		'contacts' => 'Контакты',
		'group_id' => 'Категория пользователя'
	),
);
