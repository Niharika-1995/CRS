<?php
class clsApplicant {
	var $user_id;		
	var $password;
	var $role;
	var $status;
	var $lastlogin;
	var $secques;
	var $secans;

	var $applicantid;
	var $name;
	var $gender;
	var $dob;
	var $mstatus;
	var $nationality;
	var $mobile;
	var $email;
	var $address;
	var $qualification;
	var $skills;
	var $interests;
	var $experiences;
	var $estatus;
	var $cemployer;
	var $ref;
	//var $is_selected;
	var $is_notified;
	var $job_id;	

   	function getApppassword()
   	{
   		return $this->password;   		
   	}

   	function setApppassword($Data)
   	{
   		$this->password = $Data;
   	}

   	function getRole()
   	{
   		return $this->role;
   	}

   	function setRole($Data)
   	{
   		$this->role = $Data;
   	}

   	function getStatus()
   	{
   		return $this->status;
   	}

   	function setStatus($Data)
   	{
   		$this->status = $Data;
   	}

   	function getlastLogin()
   	{
   		return $this->lastlogin;
   	}

   	function setLastLogin($Data)
   	{
   		$this->lastlogin = $Data;
   	}

   	function getAppsecques()
   	{
   		return $this->secques;
   	}

   	function setAppsecques($Data)
   	{
   		$this->secques = $Data;
   	}

   	function getAppsecans()
   	{
   		return $this->secans;
   	}

   	function setAppsecans($Data)
   	{
   		$this->secans = $Data;
   	}



	function getapplicantid()
	{
		return $this->applicantid;
	}

	function setapplicantid($Data)
   	{
   		$this->applicantid = $Data;
   	}

   	function getAppname()
   	{
   		return $this->name;
   	}

   	function setAppname($Data)
   	{
   		$this->name = $Data;
   	}

   	function getAppgender()
   	{
   		return $this->gender;
   	}

   	function setAppgender($Data)
   	{
   		$this->gender = $Data;
   	}

   	function getAppdob()
   	{
   		return $this->dob;
   	}

   	function setAppdob($Data)
   	{
   		$this->dob = $Data;
   	}

   	function getAppmrstatus()
   	{
   		return $this->mstatus;
   	}

   	function setAppmrstatus($Data)
   	{
   		$this->mstatus = $Data;
   	}

   	function getAppnationality()
   	{
   		return $this->nationality;
   	}

   	function setAppnationality($Data)
   	{
   		$this->nationality = $Data;
   	}

   	function getAppphone()
   	{
   		return $this->mobile;
   	}

   	function setAppphone($Data)
   	{
   		$this->mobile = $Data;
   	}

   	function getAppemail()
   	{
   		return $this->email;
   	}

   	function setAppemail($Data)
   	{
   		$this->email = $Data;
   	}

   	function getAppaddress()
   	{
   		return $this->address;
   	}

   	function setAppaddress($Data)
   	{
   		$this->address = $Data;
   	}

   	function getAppqualification()
   	{
   		return $this->qualification;
   	}

   	function setAppqualification($Data)
   	{
   		$this->qualification = $Data;   		
   	}   

   	function getAppskills()
   	{
   		return $this->skills;
   	}

   	function setAppskills($Data)
   	{
   		$this->skills = $Data;
   	}

   	function getAppinterests()
   	{
   		return $this->interests;
   	}

   	function setAppinterests($Data)
   	{
   		$this->interests = $Data;
   	}

   	function getAppexperience()
   	{
   		return $this->experiences;
   	}

   	function setAppexperience($Data)
   	{
   		$this->experiences = $Data;
   	}

   	function getAppestatus()
   	{
   		return $this->estatus;
   	}

   	function setAppestatus($Data)
   	{
   		$this->estatus = $Data;
   	}

   	function getAppcemployer()
   	{
   		return $this->cemployer;
   	}

   	function setAppcemployer($Data)
   	{
   		$this->cemployer = $Data;
   	}

   	function getAppisnotified()
   	{
   		return $this->is_notified;
   	}

   	function setAppisnotified($Data)
   	{
   		$this->is_notified = $Data;
   	}

   	function setJobID($Data)
   	{
   		$this->job_id = $Data;
   	}

	function setAppUserid($Data)
	{
		$this->user_id = $Data;
	}

   function getAppuserid()
   {
   	return $this->user_id;
   }
}
?>