<?php
	class BootstarpForm extends form{
	
	/**
	* @param $html string
	* return string
	*/
	public function surround($html){
		return "<div class=\"form-group\">{$html}</div>";
	}
	
	
	/**
	* @param $name string 
	* return string
	*/
	public function input($name){
		
		return $this->surround(
		'<label>'.$name.'</label> <input type="text" name="'.$name.'" value="'. $this->getValue($name).'" class="cform-controle"/>');
	}
	
	
}

?>