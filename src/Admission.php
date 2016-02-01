
<?php

namespace SITO\saleinvoice;




use Person;



	class Admission extends Patient{
		private $admission_no;
		private $hospital_case_no;
		private $medical_record_no;
		private $chief_complaint;
		private $date_admit;
		private $date_discharge;	
	

		public function setAdmission($admission_no) 
		{
			$this->admission_no = $admission_no;
			
		}

		public function setHospital_case($hospital_case_no) 
		{
			$this->hospital_case_no = $hospital_case_no;
		
		}

		public function setMedical_record($medical_record_no) 
		{
			$this->medical_record_no = $medical_record_no;
		}

		public function setChief_complaint($chief_complaint) 
		{
			$this >chief_complaint = $chief_complaint;
		}

		public function setDate_admit($date_admit)
		{
			$this->date_admit = $date_admit;
		}

		public function getAdmission_no()
		{
			 return $this-> admission_no;
		}

		public function getHospital_case_no()
		{
		 	return $this-> hospital_case_no;
		}

		public function getMedical_record_no()
		{
			 return $this-> medical_record_no;

		}

		public function getChief_complaint(){

			 return $this-> chief_complaint;
		}

		public function getDate_admit(){

			 return $this-> date_admit;
		}

		public function getDate_discharge(){

			 return $this-> date_discharge;
		}	
	}	