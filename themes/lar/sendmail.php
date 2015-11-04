<?php 
session_start();
// echo $_SESSION['letters_code2'];
// echo "<br>";
// echo $_POST['letters_code2'];
// strcasecmp($_SESSION['letters_code2'], $_POST['letters_code2']);



	if(empty($_SESSION['letters_code2'] ) ||
	  strcasecmp($_SESSION['letters_code2'], $_POST['letters_code2']) != 0)
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
$fields_lastname=$_POST['ln'];
$fields_email=$_POST['email'];
$fields_cc=$_POST['cc'];  //condo corp
$fields_phone=$_POST['phone'];
$fields_cn=$_POST['cn'];



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

        <title>SUBSCRIBE & WIN!</title>

   </head>

    <body>

       <br>

        SUBSCRIBE & WIN!<br><br>

First Name: '.$fields_firstname.'<br>
Last Name: '.$fields_lastname.'<br>            
Email: '.$fields_email.'<br> 
Condo corp.: '.$fields_cc.'<br> 
Phone: '.$fields_phone.'<br>
Company name: '.$fields_cn.'<br>  


        
<br><br><br>
    </body>

</html>';        


$headers  = "Content-type: text/html; charset=UTF-8 \r\n";

$headers .= "From: http://www.yatta.ca/projects/lar <info@lar.ca>\r\n";

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