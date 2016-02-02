<?php
namespace SitoTest\PersonTest;
use PHPUnit_Framework_TestCase;
use Sito\Models\Person; 
	
class PersonTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	public function AddPerson()
	{
		// echo exit();
		$person = new Person();
		$person->setFname("Ivan");
		$person->setLname("Hernaez");
		$person->setMname("Ad");
		$person->setStreetAddress("Palao street");
		$person->setCity("Iligan City");
		$person->setProvince("Lanao del Norte");
		$person->setCountry("Philippines");
		$person->setZipcode(9200);
		$person->setMobile("221-512");
		$person->setPhone("09261554918");
		$person->setBirthdate("1/20/1993");
		$person->setReligion("Catholic");
		$person->setGender("Male");
		
		$this->assertEquals('Ivan Ad Hernaez', $person ->getFullName());
		$this->assertEquals('Ivan', $person->getFname());
		$this->assertEquals('Hernaez', $person->getLname());
		$this->assertEquals('Ad', $person->getMname());
		$this->assertEquals('Palao street Iligan City, Lanao del Norte, Philippines 9200', $person ->getFullAddress());
		$this->assertEquals('Palao street',$person->getStreetAddress());
		$this->assertEquals('Iligan City', $person->getCity());
		$this->assertEquals('Lanao del Norte',$person->getProvince());
		$this->assertEquals('Philippines', $person->getCountry());
		$this->assertEquals(9200,$person->getZipcode());
		$this->assertEquals('221-512',$person->getMobile());
		$this->assertEquals('09261554918',$person->getPhone());
		$this->assertEquals('1/20/1993', $person ->getBirthdate());
		$this->assertEquals('Catholic',$person->getReligion());
		$this->assertEquals('Male',$person->getGender());
	
    }

}