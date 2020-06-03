<?php
namespace Phppot;
use \Phppot\DataSource;

class Tutor_Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function validateMember()
    {
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) 
        {
            if (empty($_POST[$key])) 
            {
                $valid = false;
            }
        }        
        if($valid == true) 
        {
            // Password Matching Validation
            if ($_POST['password_1'] != $_POST['password_2']) {
                $errorMessage[] = 'Passwords should be same.';
                $valid = false;
            }
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
                    $valid = false;
                }
            }
            
            // Validation to check if Terms and Conditions are accepted
            if (! isset($error_message)) {
                if (! isset($_POST["terms"])) {
                    $errorMessage[] = "Accept terms and conditions.";
                    $valid = false;
                }
            }
        }
        else 
        {
            $errorMessage[] = "All fields are required.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }
function validateLoginMember($username,$password)
    {
        $passwordHash = md5($password);
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) 
        {
            if (empty($_POST[$key])) 
            {
                $valid = false;
            }
        }        
        if($valid == true) 
        {
        $conn = mysqli_connect('localhost:3306','root', 'TakudzwaSiyabonga@21761', 'zansci_users') or die("Cannot connect to the database server now". mysql_error());
        $query = "select * FROM registered_tutors WHERE username =$username AND password=$passwordHash";
        $result=$conn->query("select * FROM registered_tutors WHERE username ='$username' AND password='$passwordHash'");
        #$getPaidStatusIndex=mysqli_fetch_assoc($result);
        #$getPaidStatus=$getPaidStatusIndex['plan_paid'];
        $memberCount= $result->num_rows;
            // Password Matching Validation
           if ($memberCount==0) 
            {
                $errorMessage[] = 'You have entered a wrong password';
                $valid = false;
            }
            
            // Email Validation
           // if (! isset($error_message)) {
             //   if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            //        $errorMessage[] = "Invalid email address.";
             //       $valid = false;
             //   }
           // }
        }
        else 
        {
            $errorMessage[] = "All fields are required.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }
    function isMemberExists($username)
    {
        $query = "select * FROM registered_tutors WHERE username = ?";
        $paramType = "s";
        $paramArray = array($username);
        $memberCount = $this->ds->numRows($query, $paramType, $paramArray);        
        return $memberCount;
    }
    function isCorrect($username,$password)
    {
         $query="select * FROM registered_tutors WHERE username=? AND password=?";
         $paramType="ss";
         $paramArray=array($username,$password);
         $memberCount=$this->ds-numRows($query,$paramType,$paramArray);
         return $memberCount;
    }
    function insertTutorRecord($name, $surname, $email,$phone_no,$street_1,$street_2,$city,$postal_code,$country,$province,$timezone,$dob)
    {
        
        $query = "INSERT INTO registered_tutors ( username, email, name, surname, phone_no , street_1 ,street_2 ,city, postal_code, country, province, timezone, dob) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $paramType = "sssssssssssss";
        $paramArray = array($name, $surname, $email,$phone_no,$street_1,$street_2,$city,$postal_code,$country,$province,$timezone,$dob);     
        $insertId = $this->ds->insert($query, $paramType, $paramArray);   
        return $insertId;
    }
    function insertMemberRecord($password, $email,$username)
    {
        $passwordHash = md5($password);
        $query = "INSERT INTO registered_tutors ( password, email,username) VALUES (?,?,?)";
        $paramType = "sss";
        $paramArray = array(
            $passwordHash,
            $email,
            $username
        );     
        $insertId = $this->ds->insert($query, $paramType, $paramArray);   
        return $insertId;
    }
}