<?
$username="ffcugaorg4843545";
$password="f@milyDB1";
$database="phpmy1_ffcuga_org";

$type=$_POST['type'];
$amount=$_POST['amount'];
$purpose=$_POST['purpose'];
$branch=$_POST['branch'];
$terms=$_POST['terms'];
$repayment=$_POST['repayment'];
$protection=$_POST['protection'];
$status=$_POST['status'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$account=$_POST['account'];
$ssn=$_POST['ssn'];
$dlnum=$_POST['dlnum'];
$dlstate=$_POST['dlstate'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$hphone1=$_POST['hphone1'];
$hphone2=$_POST['hphone2'];
$bphone1=$_POST['bphone1'];
$bphone2=$_POST['bphone2'];
$cphone1=$_POST['cphone1'];
$cphone2=$_POST['cphone2'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$ownrent=$_POST['ownrent'];
$years=$_POST['years'];
$monthly=$_POST['monthly'];
$employer=$_POST['employer'];
$empadd1=$_POST['empadd1'];
$empadd2=$_POST['empadd2'];
$empcity=$_POST['empcity'];
$empstate=$_POST['empstate'];
$empzip=$_POST['empzip'];
$title=$_POST['title'];
$start=$_POST['start'];
$selfemp=$_POST['selfemp'];
$prevemp=$_POST['prevemp'];
$prevempadd1=$_POST['prevempadd1'];
$prevempadd2=$_POST['prevempadd2'];
$prevempcity=$_POST['prevempcity'];
$prevempstate=$_POST['prevempstate'];
$prevempzip=$_POST['prevempzip'];
$prevstart=$_POST['prevstart'];
$prevend=$_POST['prevend'];
$income=$_POST['income'];
$freq=$_POST['freq'];
$incometype=$_POST['incometype'];
$otherincome=$_POST['otherincome'];
$otherfreq=$_POST['otherfreq'];
$refname=$_POST['refname'];
$relation=$_POST['relation'];
$refadd1=$_POST['refadd1'];
$refadd2=$_POST['refadd2'];
$refcity=$_POST['refcity'];
$refstate=$_POST['refstate'];
$refzip=$_POST['refzip'];
$refphone1=$_POST['refphone1'];
$refphone2=$_POST['refphone2'];
$costatus=$_POST['costatus'];
$cofname=$_POST['cofname'];
$comname=$_POST['comname'];
$colname=$_POST['colname'];
$coaccount=$_POST['coaccount'];
$cossn=$_POST['cossn'];
$coemail=$_POST['coemail'];
$codob=$_POST['codob'];
$cohphone1=$_POST['cohphone1'];
$cohphone2=$_POST['cohphone2'];
$cobphone1=$_POST['cobphone1'];
$cobphone2=$_POST['cobphone2'];
$cocphone1=$_POST['cocphone1'];
$cocphone2=$_POST['cocphone2'];
$coadd1=$_POST['coadd1'];
$coadd2=$_POST['coadd2'];
$cocity=$_POST['cocity'];
$costate=$_POST['costate'];
$cozip=$_POST['cozip'];
$coownrent=$_POST['coownrent'];
$coyears=$_POST['coyears'];
$comonthly=$_POST['comonthly'];
$coemployer=$_POST['coemployer'];
$coempadd1=$_POST['coempadd1'];
$coempadd2=$_POST['coempadd2'];
$coempcity=$_POST['coempcity'];
$coempstate=$_POST['coempstate'];
$coempzip=$_POST['coempzip'];
$cotitle=$_POST['cotitle'];
$costart=$_POST['costart'];
$cosuper=$_POST['cosuper'];
$coselfemp=$_POST['coselfemp'];
$coprevemp=$_POST['coprevemp'];
$coprevempadd1=$_POST['coprevempadd1'];
$coprevempadd2=$_POST['coprevempadd2'];
$coprevempcity=$_POST['coprevempcity'];
$coprevempstate=$_POST['coprevempstate'];
$coprevempzip=$_POST['coprevempzip'];
$coprevempstart=$_POST['coprevempstart'];
$coprevempend=$_POST['coprevempend'];
$coincome=$_POST['coincome'];
$cofreq=$_POST['cofreq'];
$coincometype=$_POST['coincometype'];
$cootherincome=$_POST['cootherincome'];
$cootherfreq=$_POST['cootherfreq'];
$corefname=$_POST['corefname'];
$corelation=$_POST['corelation'];
$corefadd1=$_POST['corefadd1'];
$corefadd2=$_POST['corefadd2'];
$corefcity=$_POST['corefcity'];
$corefstate=$_POST['corefstate'];
$corefzip=$_POST['corefzip'];
$corefphone1=$_POST['corefphone1'];
$corefphone2=$_POST['corefphone2'];
$refname1=$_POST['refname1'];
$refadd1a=$_POST['refadd1a'];
$refadd1b=$_POST['refadd1b'];
$refcity1a=$_POST['refcity1a'];
$refstate1a=$_POST['refstate1a'];
$refzip1a=$_POST['refzip1a'];
$refphone1a=$_POST['refphone1a'];
$refphone2a=$_POST['refphone2a'];
$refname2=$_POST['refname2'];
$refadd2a=$_POST['refadd2a'];
$refadd2b=$_POST['refadd2b'];
$refcity2a=$_POST['refcity2a'];
$refstate2a=$_POST['refstate2a'];
$refzip2a=$_POST['refzip2a'];
$refphone3a=$_POST['refphone3a'];
$refphone4a=$_POST['refphone4a'];
$refname3=$_POST['refname3'];
$refadd3a=$_POST['refadd3a'];
$refadd3b=$_POST['refadd3b'];
$refcity3a=$_POST['refcity3a'];
$refstate3a=$_POST['refstate3a'];
$refzip3a=$_POST['refzip3a'];
$refphone5a=$_POST['refphone5a'];
$refphone6a=$_POST['refphone6a'];
$quest1=$_POST['quest1'];
$quest1a=$_POST['quest1a'];
$quest2=$_POST['quest2'];
$quest2a=$_POST['quest2a'];
$quest3=$_POST['quest3'];
$quest3a=$_POST['quest3a'];
$quest4=$_POST['quest4'];
$quest4a=$_POST['quest4a'];
$quest4b=$_POST['quest4b'];
$quest4c=$_POST['quest4c'];
$comments=$_POST['comments'];
$agree1=$_POST['agree1'];
$agree2=$_POST['agree2'];


mysql_connect('sql5c38b.carrierzone.com',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO loanapp VALUES ('','$type','$amount','$purpose','$branch','$terms','$repayment','$protection','$status','$fname','$mname','$lname','$account','$ssn','$dlnum','$dlstate','$email','$dob','$hphone1','$hphone2','$bphone1','$bphone2','$cphone1','$cphone2','$add1','$add2','$city','$state','$zip','$ownrent','$years','$monthly','$employer','$empadd1','$empadd2','$empcity','$empstate','$empzip','$title','$start','$selfemp','$prevemp','$prevempadd1','$prevempadd2','$prevempcity','$prevempstate','$prevempzip','$prevstart','$prevend','$income','$freq','$incometype','$otherincome','$otherfreq','$refname','$relation','$refadd1','$refadd2','$refcity','$refstate','$refzip','$refphone1','$refphone2','$costatus','$cofname','$comname','$colname','$coaccount','$cossn','$coemail','$codob','$cohphone1','$cohphone2','$cobphone1','$cobphone2','$cocphone1','$cocphone2','$coadd1','$coadd2','$cocity','$costate','$cozip','$coownrent','$coyears','$comonthly','$coemployer','$coempadd1','$coempadd2','$coempcity','$coempstate','$coempzip','$cotitle','$costart','$cosuper','$coselfemp','$coprevemp','$coprevempadd1','$coprevempadd2','$coprevempcity','$coprevempstate','$coprevempzip','$coprevempstart','$coprevempend','$coincome','$cofreq','$coincometype','$cootherincome','$cootherfreq','$corefname','$corelation','$corefadd1','$corefadd2','$corefcity','$corefstate','$corefzip','$corefphone1','$corefphone2','$refname1','$refadd1a','$refadd1b','$refcity1a','$refstate1a','$refzip1a','$refphone1a','$refphone2a','$refname2','$refadd2a','$refadd2b','$refcity2a','$refstate2a','$refzip2a','$refphone3a','$refphone4a','$refname3','$refadd3a','$refadd3b','$refcity3a','$refstate3a','$refzip3a','$refphone5a','$refphone6a','$quest1','$quest1a','$quest2','$quest2a','$quest3','$quest3a','$quest4','$quest4a','$quest4b','$quest4c','$comments','$agree1','$agree2')";


mysql_query($query);

mysql_close();

echo "<div align='center'><font face='Gotham, Helvetica Neue, Helvetica, Arial, sans-serif' size='2'><img src='/imgs/logo.png' border='0' alt='Fulton Teacher CU' title='Family First CU'><br><br>Your information has been submitted!<br>Click <a href='/forms_app/loan_app.php'>here</a> to return.</font></div>";
?>

<?php 
$email_to = "applications@ffcuga.org";
$email_subject = "Loan Application from $fname $lname";
$email_body = "A new loan application has been submitted by $fname $lname.";

if(mail($email_to, $email_subject, $email_body)){
    echo "<div align='center'><font face='Gotham, Helvetica Neue, Helvetica, Arial, sans-serif' size='2'>The email was successfully sent.</font></div>";
} else {
    echo "The email $email_subject was NOT sent.";
}
?>
