<?php
class clsJob {
	var $JobID;
	var $Title;
	var $Category;
	var $Qualification;
	var $Skills;
	var $Place;
	var $Experience;
	var $Salary;
	var $nVacant;
	var $IsScheduled;


	function getJobID() {
	return $this->JobID;
	}
	function setJobID($data){
	$this->JobID=$data;
	}
	function getTitle(){
	return $this->Title;
	}
	function setTitle($data){
	$this->Title=$data;
	}
	function getCategory(){
	return $this->Category;
	}
	function setCategory($data){
	$this->Category=$data;
	}
	function getQualification(){
	return $this->Qualification;
	}
	function setQualification($data){
	$this->Qualification=$data;
	}
	function getSkills(){
	return $this->Skills;
	}
	function setSkills($data){
	$this->Skills=$data;
	}
	function getExperience(){
	return $this->Experience;
	}
	function setExperience($data){
	$this->Experience=$data;
	}
	function getPlace(){
	return $this->Place;
	}
	function setPlace($data){
	$this->Place=$data;
	}
	function getSalary(){
	return $this->Salary;
	}
	function setSalary($data){
	$this->Salary=$data;
	}
	function getNumVac(){
	return $this->nVacant;
	}
	function setNumVac($data){
	$this->nVacant=$data;
	}
	function getSch(){
	return $this->IsScheduled;
	}
	function setSch($data){
	$this->IsScheduled=$data;
	}
}

?>