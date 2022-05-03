<?
$username="ffcugaorg4843545";
$password="f@milyDB1";
$database="phpmy1_ffcuga_org";

$type=$_POST['type'];
$additional=$_POST['additional'];
$addname=$_POST['addname'];
$account=$_POST['account'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$ssn=$_POST['ssn'];
$dob=$_POST['dob'];
$emp=$_POST['emp'];
$howlong=$_POST['howlong'];
$salary=$_POST['salary'];
$payment=$_POST['payment'];
$hphone1=$_POST['hphone1'];
$hphone2=$_POST['hphone2'];
$cphone1=$_POST['cphone1'];
$cphone2=$_POST['cphone2'];
$dphone1=$_POST['dphone1'];
$dphone2=$_POST['dphone2'];
$limit=$_POST['limit'];
$cofname=$_POST['cofname'];
$comname=$_POST['comname'];
$colname=$_POST['colname'];
$cossn=$_POST['cossn'];
$codob=$_POST['codob'];
$coemp=$_POST['coemp'];
$cohowlong=$_POST['cohowlong'];
$cosalary=$_POST['cosalary'];
$agree1=$_POST['agree1'];
$agree2=$_POST['agree2'];


mysql_connect('sql5c38b.carrierzone.com',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO ccapp VALUES ('','$type','$additional','$addname','$account','$fname','$mname','$lname','$add1','$add2','$city','$state','$zip','$ssn','$dob','$emp','$howlong','$salary','$payment','$hphone1','$hphone2','$cphone1','$cphone2','$dphone1','$dphone2','$limit','$cofname','$comname','$colname','$cossn','$codob','$coemp','$cohowlong','$cosalary','$agree1','$agree2')";


mysql_query($query);

mysql_close();

echo "<div align='center'><font face='Gotham, Helvetica Neue, Helvetica, Arial, sans-serif' size='2'><img src='/imgs/logo.png' border='0' alt='Family First CU' title='Family First CU'><br><br>Your information has been submitted!<br>Click <a href='/forms_app/visa_app.php'>here</a> to return.</font></div>";
?>

<?php 
$email_to = "applications@ffcuga.org";
$email_subject = "VISA Application from $fname $lname";
$email_body = "A new visa application has been submitted by $fname $lname.";

if(mail($email_to, $email_subject, $email_body)){
    echo "<div align='center'><font face='Gotham, Helvetica Neue, Helvetica, Arial, sans-serif' size='2'>The email was successfully sent.</font></div>";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
