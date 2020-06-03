<?php
namespace Phppot;
use \Phppot\DataSource;

class Member
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
function validateLoginMember($email,$password)
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
        #$query = "select * FROM registered_users WHERE email =$email AND password=$passwordHash";
        $result=$conn->query("select * FROM registered_users WHERE email ='$email' AND password='$passwordHash'");
        $getPaidStatusIndex=mysqli_fetch_assoc($result);
        $getPaidStatus=$getPaidStatusIndex['plan_paid'];
        $memberCount= $result->num_rows;
            // Password Matching Validation
            if($getPaidStatus=='false')
            {
             $errorMessage[]='No payment plan found please make a payment for you to login';
              header('Location: PayWeb_Standalone_Payment_Portal-12/PayWeb_Standalone_Payment_Portal-12/public_html/index.php?amount=200&email='.$email.'&reference=xcvfd_'.$email.'');
              $valid=false;
            }
            if ($memberCount==0) 
            {
                $errorMessage[] = 'You have entered a wrong password';
                $valid = false;
            }
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
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
    function isMemberExists($email)
    {
        $query = "select * FROM registered_users WHERE email = ?";
        $paramType = "s";
        $paramArray = array($email);
        $memberCount = $this->ds->numRows($query, $paramType, $paramArray);        
        return $memberCount;
    }
    function isCorrect($email,$password)
    {
         $query="select * FROM registered_users WHERE email=? AND password=?";
         $paramType="ss";
         $paramArray=array($email,$password);
         $memberCount=$this->ds-numRows($query,$paramType,$paramArray);
         return $memberCount;
    }
    function insertMemberRecord($password, $email)
    {
        $passwordHash = md5($password);
        $query = "INSERT INTO registered_users ( password, email) VALUES (?, ?)";
        $paramType = "ss";
        $paramArray = array(
            $passwordHash,
            $email
        );     
        $insertId = $this->ds->insert($query, $paramType, $paramArray);   
        return $insertId;
    }
}