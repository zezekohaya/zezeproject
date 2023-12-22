<?php
$firstname = $_REQUEST['firstname']; 
$secondname = $_REQUEST['secondname']; 
$address = $_REQUEST['address']; 
$gender=$_REQUEST['male_or_female'];
$email=$_REQUEST['mail'];
$birthdate=$_REQUEST['date'];
 



if(isset($_POST['btntest']))
{
    $host = "localhost"; 
    $user = "root"; 
    $password ="";
    $db = "bages"; 


    
    @$conn= mysqli_connect($host,$user,$password,$db);
    
    $insert= "insert into school_bages values ('$firstname','$secondname','$address','$male_or_female','$mail','$date')";

    
    mysqli_query($conn,$insert);

    

    if($conn){
        
        echo("<h1 style='color:green;'> Your Registartion is Done!</h1>");
        

    }
    else{
        echo("<h1 style='color:red;'> Your Registartion is Failed!</h1>");
    }
   
}








?>