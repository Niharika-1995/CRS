<?php
	class Job{
		var $JobID;
		var $ApplicantID;
		var $IsSelected;

		function getJobID()
		{
		return $this->JobID;
		}
		function setJobID($data){
		$this->JobID=$data;
		}
		function getApplicantID(){
		return $this->ApplicantID;
		}
		function setApplicantID($data){
			$this->ApplicantID=$data;
		}
		function getSelect(){
			return $this->IsSelected;
		}
		function setSelect($data){
			$this->IsSelected=$data;
		}
	}

?>