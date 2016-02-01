<?php

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