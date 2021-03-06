<?php

namespace application\models;

use application\core\Model;

class Main extends Model{
	
	public $error;
	
	public function contactValidate($post){
		$namelen = iconv_strlen($post['name']);
		$textlen = iconv_strlen($post['text']);
		if($namelen < 3 or $namelen > 20){  //проверка длины 										//символов имени
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		}elseif(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){ //проверка емейла
			$this->error = 'email указан неверно';
			return false;
		}elseif($textlen < 10 or $textlen > 500){
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}
	
	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}
	
	public function postsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => (($route['page'] ?? 1) - 1) *  $max,
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}

}