<?php 

class App{

	static $db = null;
	static function getDatabase(){
		if(!self::$db){
			self::$db = new Modele('vbdd','root','');
	    }

		return  self::$db;
	}	
}