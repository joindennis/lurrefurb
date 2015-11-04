<?php 
session_start();
// echo $_SESSION['letters_code2'];
// echo "<br>";
// echo $_POST['letters_code2'];
// strcasecmp($_SESSION['letters_code2'], $_POST['letters_code2']);



	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		  echo '<script type="text/javascript">window.location = "error.php"</script>';
	exit;} 

else {echo '';}
	

?>

<?php



$fields_firstname=$_POST['fn'];
$fields_email=$_POST['email'];
$fields_phone=$_POST['phone'];
$fields_message=$_POST['message'];



// echo $_POST['fn'].'<br>';
// echo $_POST['ln'].'<br>';
// echo $_POST['email'].'<br>';
// echo $_POST['cc'].'<br>';
// echo $_POST['phone'].'<br>';
// echo $_POST['cn'].'<br>';
// echo $_POST['letters_code2'].'<br>';
// 
// 
// die("stop!");
 

//$to  = "zeppieri.janice@gmail.com";
$to  = "info@larrefurb.com"; 

$subject = "LAR Website";

$message = '

<html>

   <head>

        <title>CONTACT US</title>

   </head>

    <body>

       <br>

        CONTACT US<br><br>

First Name: '.$fields_firstname.'<br>
Email: '.$fields_email.'<br> 
Phone: '.$fields_phone.'<br>
Message: '.$fields_message.'<br>  


        
<br><br><br>
    </body>

</html>';        


$headers  = "Content-type: text/html; charset=UTF-8 \r\n";

$headers .= "From: http://www.larrefurb.com <info@larrefurb.com>\r\n";

if (

(($fields_firstname !='') ||
($fields_email !='')

)
)


{

mail($to, $subject, $message, $headers);

echo '<script type="text/javascript">window.location = "success.php"</script>';

exit;

}


else {

    echo '<script type="text/javascript">window.location = "error.php"</script>';

exit;}   

?>  


</div>

   
</div>


?>