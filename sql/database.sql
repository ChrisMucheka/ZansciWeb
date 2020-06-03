CREATE TABLE IF NOT EXISTS `Tutor_Details` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(555) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` datetime NOT NULL,
  `street_address_1` varchar(255) NOT NULL,
  `street_address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
);
// BANK DETAILS TABLE
CREATE TABLE IF NOT EXISTS `Bank_Details` (
  `email` varchar(555) NOT NULL,
  `account_holder` varchar(555) NOT NULL,
  `bank_name` varchar(555) NOT NULL,
  `acc_no` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
);
//QUALIFICATION TABLE
CREATE TABLE IF NOT EXISTS `Tutor_Qualification` (
  `username` varchar(555) NOT NULL,
  `degree_type` varchar(555) NOT NULL,
  `degree_name` varchar(555) NOT NULL,
  `year_completed` varchar(4) NOT NULL,
  PRIMARY KEY (`username`)
);
//CERTIFICATION TABLE
CREATE TABLE IF NOT EXISTS `Tutor_Certification` (
  `username` varchar(555) NOT NULL,
  `certification_type` varchar(555) NOT NULL,
  `certification_number` varchar(555) NOT NULL,
  `certification_issue_date` varchar(255) NOT NULL,
  `certification_expery_date` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
);
//TUTOR SUBJECTS
CREATE TABLE IF NOT EXISTS `Tutor_Subjects` (
  `username` varchar(555) NOT NULL,
  `Subject_1` varchar(555) NOT NULL,
  `Subject_2` varchar(555) NOT NULL,
  `Subject_3` varchar(555) NOT NULL,
  PRIMARY KEY (`username`)
);
//TUTOR USER REGISTRATION
CREATE TABLE IF NOT EXISTS `registered_tutors` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(555) NOT NULL,
  PRIMARY KEY (`username`)
);
////https://codereview.stackexchange.com/questions/418/database-design-for-a-school-system