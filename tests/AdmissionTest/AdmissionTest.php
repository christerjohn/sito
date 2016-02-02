<?php
namespace SitoTest\AdmissionTest;
use PHPUnit_Framework_TestCase;
use Sito\Models\Admission; 
	
class AdmissionTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	public function AddAdmission()
	{
		// echo exit();
		$admission_no = new Admission();

		$admission_no->setAdmissionNo(12);
		$admission_no->setHospitalCase(14);
		$admission_no->setMedicalRecord(15);
		$admission_no->setChiefComplaint("Hernaez");
		$admission_no->setDateAdmit("2/2/16");
		$admission_no->setDateDischarge ("3/1/16");

		$this->assertEquals(12, $admission_no->getAdmissionNo());
		$this->assertEquals(14, $admission_no->getHospitalCaseNo());
		$this->assertEquals(15, $admission_no->getMedicalRecordNo());
		$this->assertEquals('Hernaez', $admission_no->getChiefComplaint());
		$this->assertEquals('2/2/16', $admission_no->getDateAdmit());
		$this->assertEquals('3/1/16', $admission_no->getDateDischarge());
		// echo ($admission_no -> getAdmissionNo());
		// echo ($admission_no -> getHospitalCaseNo());
		// echo ($admission_no -> getMedicalRecordNo());	
		// echo ($admission_no -> getChiefComplaint());
		// echo ($admission_no -> getDateAdmit());	
		// echo ($admission_no -> getDateDischarge());
		//$this->assertTrue(true);
    }

}