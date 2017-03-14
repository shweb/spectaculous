<?php

	/**
	*	class Form
	*	genère un formulaire
	*/
	
	class form{
	
	/**
	* @var array
	*/
	protected $data;
	
	/**
	* @var string 
	*/
	public $surround = 'p';
	
	
	/**
	* @param array $data 
	*/
	public function __construct($data =array()){
		$this->data = $data;
	}
	
	/**
	* @param $html string
	* return string
	*/
	public function surround($html){
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}
	
	/**
	* @param $index string
	* return string
	*/
	public function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}
	
	/**
	* @param $name string 
	* return string
	*/
	public function input($name){
		return $this->surround('<input type="text" name="'.$name.'" value="'. $this->getValue($name).'" />');
	}
	
	/**
	* return string
	*/
	public function submit(){
		return $this->surround('<button type="submit">envoyer</button>');
	}
	
	
}
?>