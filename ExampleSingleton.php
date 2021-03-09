<?php

declare(strict_types = 1);


final class Singleton{

	private function __construct(){}

	public function __sleep(){
		throw new ErrorException('this class can`t be serialize');
	}

	public function __wakeup(){
		throw new ErrorException('how did you serialized this class...?');
	}

	public function __clone(){
		throw new ErrorException('this class can`t be clone');
	}

	public static function getInstance():self{
		static $instance;
		return $instance?? $instance = new self;
	}
}
