<?php

return [
	//MainController
	'blog' => [
		'controller' => 'main',
		'action' => 'index',
	],
	
	'blog/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	
	'blog/about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	
	'blog/contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	
	'blog/post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	
	//AdminController
	
	'blog/admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	
	'blog/admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	
	'blog/admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	
	'blog/admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	
	'blog/admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	
	'blog/admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
    
    'blog/admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	
	
];