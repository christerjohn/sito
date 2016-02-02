<?php

namespace Sito\Models;

use Sito\Models\Person;

class Admission 
{
	private $admission_no;
	private $hospital_case_no;
	private $medical_record_no;
	private $chief_complaint;
	private $date_admit;
	private $date_discharge;	

	public function setAdmissionNo($admission_no) 
	{
		$this->admission_no = $admission_no;
	}

	public function setHospitalCase($hospital_case_no) 
	{
		$this->hospital_case_no = $hospital_case_no;
	}

	public function setMedicalRecord($medical_record_no) 
	{
		$this->medical_record_no = $medical_record_no;
	}

	public function setChiefComplaint($chief_complaint) 
	{
		$this->chief_complaint = $chief_complaint;
	}

	public function setDateAdmit($date_admit)
	{
		$this->date_admit = $date_admit;
	}

	public function setDateDischarge($date_discharge)
	{
		$this->date_discharge = $date_discharge;
	}

	public function getAdmissionNo()
	{
		return $this->admission_no;
	}

	public function getHospitalCaseNo()
	{
		return $this->hospital_case_no;
	}

	public function getMedicalRecordNo()
	{
		return $this->medical_record_no;
	}

	public function getChiefComplaint()
	{
		return $this->chief_complaint;
	}

	public function getDateAdmit()
	{
		return $this->date_admit;
	}

	public function getDateDischarge()
	{
		return $this->date_discharge;
	}	
}	