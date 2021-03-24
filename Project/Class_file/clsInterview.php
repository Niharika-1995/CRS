<?php
class clsInterview{
	var $JobID;
	var $Idate;
	var $Itime;
	var $Iplace;
	var $Inote;
	function getJobID(){
	return $this->JobID;
	}
	function setJobID($data){
	$this->JobID=$data;
	}
	function getIdate(){
	return $this->Idate;
	}
	function setIdate($data){
	$this->Idate=$data;
	}
	function getItime(){
	return $this->Itime;
	}
	function setItime($data){
	$this->Itime=$data;
	}
	function getIplace(){
	return $this->Iplace;
	}
	function setIplace($data){
	$this->Iplace=$data;
	}
	function getInote(){
	return $this->Inote;
	}
	function setInote($data){
	$this->Inote=$data;
	}
}
?>