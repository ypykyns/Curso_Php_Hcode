<?php 

class Carro{

 private $modelo;
 private $motor;
 private $ano;


 public function getModelo(){

 	return $this->modelo;
 }


  public function setModelo($modelo){

  	$this->modelo = $modelo;
  }



 public function getMotor(){

 	return $this->motor;
 }


  public function setMotor($motor){

  	$this->motor = $motor;
  }



  public function getAno(){

 	return $this->ano;
 }


  public function setAno($ano){

  	$this->ano = $ano;

  } 


  public function exibir(){

  	return json_encode(array(
  		"modelo"=>$this->getModelo(),
  		"motor"=>$this->getMotor(),
  		"ano"=>$this->getAno()
  	
  	)); // fechando array


  } // fechando método exibir()


} //fechando classe Carro

$palio = new Carro();
$palio->setModelo("Fire");
$palio->setAno("2018");
$palio->setMotor("1.0");

print_r ($palio->exibir());

 ?>