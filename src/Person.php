<?php

<<<<<<< HEAD
namespace SITO\saleinvoice;

class Person 
{
	private $fname;
	private $lname;
	private $mname;
	private $birthdate;
	private $strtaddress;
	private $city;
	private $province;
	private $country;
	private $zipcode;
	private $religion;
	private $gender;
	private $mobile;
	private $phone;

	public function __construct($fname, $lname, $mname, $birthdate, $strtaddress, $city, $province, $country, $zipcode, $religion, $gender, $mobile, $phone) {
		$this->fname = $fname;
		$this->lname = $lname;
		$this->mname = $mname;
		$this->birthdate = $birthdate;
		$this->strtaddress = $strtaddress;
		$this->city = $city;
		$this->province = $province;
		$this->country = $country;
		$this->zipcode = $zipcode;
		$this->religion = $religion;
		$this->gender = $gender;
		$this->mobile = $mobile;
		$this->phone = $phone;		
	}

	public function setFname($fname) 
	{
		$this->fname = $fname;
	}

	public function setLname($lname) 
	{
		$this->lname = $lname;
	}

	public function setMname($mname) 
	{
		$this->mname = $mname;
	}

	public function setStreetAddress($strtaddress) 
	{
		$this->strtaddress = $strtaddress;
	}

	public function setCity($city) 
	{
		$this->city = $city;
	}

	public function setProvince($province) 
	{
		$this->province = $province;
	}

	public function setCountry($country)
	{
		$this->country = $country;
	}

	public function setZipcode($zipcode) 
	{
		$this->zipcode = $zipcode;
	}

	public function setMobile($mobile) 
	{
		$this->mobile = $mobile;
	}

	public function setPhone($phone) 
	{
		$this->phone = $phone;
	}

	public function setBirthdate($birthdate) 
	{
		$this->birhtdate = $birhtdate;
	}

	public function setReligion($religion) 
	{
		$this->religion = $religion;
	}

	public function setGender($gender) 
	{
		$this->gender = $gender;
	}

	public function getFullName() 
	{
		return $this->fname . " " . $this->mname . " ". $this->lname;
	}

	public function getFname() 
	{
		return $this->fname = $fname;
	}

	public function getLname() 
	{
		return $this->lname = $lname;
	}

	public function getMname() 
	{
		return $this->mname = $mname;
	}

	public function getFullAddress() 
	{
		return $this->strtaddress. " " . $this->city. ", ". $this->province . ", ". $this->country . " " . $this->zipcode;
	}

	public function getStreetAddress() 
	{
		return $this->strtaddress;
	}

	public function getCity() 
	{
		return $this->city = $city;
	}
	
	public function getProvince() 
	{
		return $this->province = $province;
	}

	public function getCountry() 
	{
		return $this->country = $country;
	}

	public function getZipcode() 
	{
		return $this->zipcode = $zipcode;
	}
	public function getMobile() 
	{
		 return $this->mobile;
	}

	public function getPhone() 
	{
		 return $this->phone;
	}

	public function getBirthdate() 
	{
		 return $this->birthdate;
	}
	
	public function getReligion() 
	{
		 return $this->religion;
	}

	public function getGender()
	{
		 return $this->gender;
	}
}
=======
	class Person {

		private $first_name;
		private $last_name;
		private $middle_name;
		private $birth_date;
		private $street_address;
		private $city;
		private $province;
		private $country;
		private $zipcode;
		private $religion;
		private $gender;
		private $mobile;
		private $phone;

		public function __construct($first_name, $last_name, $middle_name, $birth_date, $street_address, $city, $province, $country, $zipcode, $religion, $gender, $mobile, $phone) 
		{
			$this->first_name 		= $first_name;
			$this->last_name 		= $last_name;
			$this->middle_name 		= $middle_name;
			$this->birth_date 		= $birth_date;
			$this->street_address 	= $street_address;
			$this->city 			= $city;
			$this->province 		= $province;
			$this->country 			= $country;
			$this->zipcode 			= $zipcode;
			$this->religion 		= $religion;
			$this->gender 			= $gender;
			$this->mobile 			= $mobile;
			$this->phone 			= $phone;		
		}

		public function setFirstName($first_name) 
		{
			$this->first_name = $first_name;
		}

		public function setLastName($last_name) 
		{
			$this->last_name = $last_name;
		}

		public function setMiddleName($middle_name) 
		{
			$this->middle_name = $middle_name;
		}

		public function setStreetAddress($street_address) 
		{
			$this->street_address = $street_address;
		}

		public function setCity($city) 
		{
			$this->city = $city;
		}

		public function setProvince($province) 
		{
			$this->province = $province;
		}

		public function setCountry($country) 
		{
			$this->country = $country;
		}

		public function setZipcode($zipcode) 
		{
			$this->zipcode = $zipcode;
		}

		public function setMobile($mobile) 
		{
			$this->mobile = $mobile;
		}

		public function setPhone($phone) 
		{
			$this->phone = $phone;
		}

		public function setBirthDate($birth_date) 
		{
			$this->birht_date = $birht_date;
		}

		public function setReligion($religion) 
		{
			$this->religion = $religion;
		}

		public function setGender($gender) 
		{
			$this->gender = $gender;
		}

		public function getFullName() 
		{
			return $this->first_name . " " . $thi->middle_name . " " . $this->last_name;
		}

		public function getFirstName() 
		{
			return $this->first_name = $first_name;
		}

		public function getLastName() 
		{
			return $this->last_name = $last_name;
		}

		public function getMiddleNme() 
		{
			return $this->middle_name = $middle_name;
		}

		public function getFullAddress() 
		{
			return $this->street_address. " " . $this->city . ", " . $this->province . " " . $this->country . " " . $this->zipcode;
		}

		public function getStreetAddress() 
		{
			return $this->street_address;
		}

		public function getCity() 
		{
			return $this->city = $city;
		}
		
		public function getProvince() 
		{
			return $this->province = $province;
		}

		public function getCountry() 
		{
			return $this->country = $country;
		}

		public function getZipcode() 
		{
			return $this->zipcode = $zipcode;
		}
		public function getMobile() 
		{
			 return $this->mobile;
		}

		public function getPhone() 
		{
			 return $this->phone;
		}

		public function getBirthDate() 
		{
			 return $this->birth_date;
		}
		
		public function getReligion() 
		{
			 return $this->religion;
		}

		public function getGender()
		{
			 return $this->gender;
		}

	}
>>>>>>> b7f399ccc085055e90dec57c1524d82663acf3d8
