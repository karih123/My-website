<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $fname=$data['name'];
        $email=$data['email'];
        $subject=$data['subject'];
        $message=$data['message'];
        

        $q="insert into contact_us set first_name='$fname', email='$email', subject='$subject', message='$message'";
       $data= $this->mysqli->query($q);
       if($data==true){
           $body="One message received from hubbunch contact us. details are below..<br> first_name='$fname', email='$email', subject='$subject', message='$message'";
       }
    }
    
}


?>