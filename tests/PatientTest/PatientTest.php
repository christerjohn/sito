<?php
namespace SitoTest\PatientTest;
use PHPUnit_Framework_TestCase;
use Sito\Models\Patient; 
	
class PatientTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	public function AddPatient()
	{
		// echo exit();
		$patient_no = new Patient();
		$patient_no->setPatientNo(12);
		$patient_no->setNationality("Filipino");
		$patient_no->setOccupation("Teacher");
		$patient_no->setCivilStatus(12);
		
		echo ($patient_no->getPatientNo());
		echo ($patient_no->getNationality());
		echo ($patient_no->getOccupation());	
		echo ($patient_no->getCivilStatus());
		//$this->assertTrue(true);
    }

}