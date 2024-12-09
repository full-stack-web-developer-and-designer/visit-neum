<?php
class Page{
	private static $db;
	public static function get($id){
		$q = self::$db->query("SELECT * FROM pages WHERE page_id = {$id}");
		$post = $q->fetchObject('Page');
		return $post;
	}
	public static function getAll(){
		$q = self::$db->query("SELECT * FROM pages");
		$postArr = $q->fetchAll();
		return $postArr;
	}	
	public static function init(){
		self::$db = Connect::getInstance();
	}
	public static function remove($id){
		$q = self::$db->query("DELETE FROM pages WHERE page_id = {$id}");
	}
	public function render(){
		$render = "<div><h1>" . $this->title . "</h1>";
		$render .= "<p><strong>" . $this->strong . "</strong>" . $this->first_part . "<br>" . $this->second_part . "</p>";
		$render .= "<p>". $this->third_part . "<span class='none'>" . $this->span_none . "</p></div>";
		return $render;
	}
	}
	