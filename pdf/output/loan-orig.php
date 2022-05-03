<html lang="en">
<head>
<title>Loan Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="../../css/inner.css" media="screen" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85259511-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
            function postLink(link) {
                var f = document.createElement("form");
                f.method = 'post';
                f.action = link;
                document.body.appendChild(f);
                f.submit();
            }
        </script>
</head>

<body>
<?php
include 'config.php';
include 'opendb.php';

// how many rows to show per page
$rowsPerPage = 1;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

$query="SELECT * FROM loanapp ORDER BY id DESC LIMIT $offset, $rowsPerPage";
$result=mysql_query($query);

// print the student info in table
echo '<table border="0" cellpadding="4" cellspacing="0">';
while(list($id,$type,$amount,$purpose,$repayment,$protection,$status,$fname,$mname,$lname,$account,$ssn,$dlnum,$dlstate,$email,$dob,$hphone1,$hphone2,$bphone1,$bphone2,$add1,$add2,$city,$state,$zip,$ownrent,$years,$prevadd1,$prevadd2,$prevcity,$prevstate,$prevzip,$prevownrent,$prevyears,$employer,$empadd1,$empadd2,$empcity,$empstate,$empzip,$title,$start,$hours,$super,$selfemp,$prevemp,$prevempadd1,$prevempadd2,$prevempcity,$prevempstate,$prevempzip,$prevstart,$prevend,$income,$freq,$incometype,$otherincome,$otherfreq,$refname,$relation,$refadd1,$refadd2,$refcity,$refstate,$refzip,$refphone1,$refphone2,$costatus,$cofname,$comname,$colname,$coaccount,$cossn,$codlnum,$codlstate,$coemail,$codob,$cohphone1,$cohphone2,$cobphone1,$cobphone2,$coadd1,$coadd2,$cocity,$costate,$cozip,$coownrent,$coyears,$coemployer,$coempadd1,$coempadd2,$coempcity,$coempstate,$coempzip,$cotitle,$costart,$cohours,$cosuper,$coselfemp,$coprevemp,$coprevempadd1,$coprevempadd2,$coprevempcity,$coprevempstate,$coprevempzip,$coprevempstart,$coprevempend,$coincome,$cofreq,$coincometype,$cootherincome,$cootherfreq,$corefname,$corelation,$corefadd1,$corefadd2,$corefcity,$corefstate,$corefzip,$corefphone1,$corefphone2,$owe1,$creditor1,$rate1,$balance1,$pay1,$owedby1,$owe2,$creditor2,$rate2,$balance2,$pay2,$owedby2,$owe3,$creditor3,$rate3,$balance3,$pay3,$owedby3,$owe4,$creditor4,$rate4,$balance4,$pay4,$owedby4,$owe5,$creditor5,$rate5,$balance5,$pay5,$owedby5,$owe6,$creditor6,$rate6,$balance6,$pay6,$owedby6,$owe7,$creditor7,$rate7,$balance7,$pay7,$owedby7,$owe8,$creditor8,$rate8,$balance8,$pay8,$owedby8,$owe9,$creditor9,$rate9,$balance9,$pay9,$owedby9,$total1,$total2,$own1,$location1,$market1,$pledged1,$ownedby1,$own2,$location2,$market2,$pledged2,$ownedby2,$own3,$location3,$market3,$pledged3,$ownedby3,$own4,$location4,$market4,$pledged4,$ownedby4,$own5,$location5,$market5,$pledged5,$ownedby5,$own6,$location6,$market6,$pledged6,$ownedby6,$own7,$location7,$market7,$pledged7,$ownedby7,$own8,$location8,$market8,$pledged8,$ownedby8,$own9,$location9,$market9,$pledged9,$ownedby9,$quest1,$quest1a,$quest2,$quest2a,$quest3,$quest3a,$quest4,$quest4a,$quest4b,$quest4c,$agree1,$agree2) = mysql_fetch_array($result))
{

	echo "<table width='750' border='0' cellpadding='4' cellspacing='0' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'>
	<tr><td colspan='2'>
	<p>&nbsp;</p>
	<p><strong>ID:</strong> $id</p>
	<p>Married Applicants: May apply for a separate account.</p>
            <p><strong>Individual Credit:</strong> You must complete the <strong>Applicant</strong> section about yourself and the <strong>Other</strong> section about your spouse if:</p>
            <ol class='bullets'>
            <li>you live in or the property pledged as collateral is located in a community property state (AK, AZ, CA, ID, LA, NM, NV, TX, WA, WI).</li>
            <li>your spouse will use the account, or</li>
            <li>you are relying on your spouse's income as a basis for repayment. If you are relying on income from alimony, child support, or separate maintenance, complete the <strong>Other</strong> section to the extent possible about the person on whose payments you are relying.</li>
            </ol>
            <p><strong><br />
            Joint Credit:</strong> Each Applicant must <strong>individually</strong> complete the appropriate section below. If Co-Borrower is spouse of the Applicant, mark the Co-Applicant box.</p>
            <p><strong>Guarantor:</strong> Complete the <strong>Other</strong> section if you are a guarantor on an account/loan.</p>
            <p><strong>Account/Loan:</strong> $type<br>
            <em>(Including ATM/Debit Card Access to the Account if Available)</em></p>
            <p><font color='#FF0000'><strong>*</strong></font>Amount Requested $ $amount</p>
            <p><font color='#FF0000'><strong>*</strong></font>Purpose/Collateral: $purpose</p>
            <p><strong>Repayment:</strong> $repayment</p>
            </td></tr>
            <tr><td colspan='2'>
            <p><strong>PAYMENT PROTECTION</strong></p>
            <p>Are you interested in having your loan protected? $protection</p>
            <p>If you answer 'yes', the credit union will disclose the cost to protect your loan. The protection is voluntary and does not affect your loan approval. In order for your loan to be covered, you will need to sign a separate application that explains the terms and conditions.</p>
            </td></tr>
          <tr><td colspan='2'><p><strong>APPLICANT</strong></p></td></tr>
          <tr><td colspan='2'>
            <p><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></p>
            <p>$status</p></td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>First Name:</td>
          <td width='73%'><span class='contenttext'>$fname <font color='#FF0000'><strong>*</strong></font>Middle Initial: $mname <font color='#FF0000'><strong>*</strong></font>Last Name:
$lname</span></td>
          </tr>
          <tr>
            <td align='right' class='contenttext'>Account Number</td>
          <td width='73%'><span class='contenttext'>$account</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font>Social Security Number:</span></td>
          <td width='73%'><span class='contenttext'>$ssn <font color='#FF0000'><strong>*</strong></font>Driver's License Number: $dlnum <font color='#FF0000'><strong>*</strong></font>State: $dlstate</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'> <font color='#FF0000'><strong>*</strong></font>Email Address:</span></td>
          <td width='73%'><span class='contenttext'>$email <font color='#FF0000'><strong>*</strong></font>Date of Birth (MM/DD/YYYY): $dob</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font>Home Phone:</span></td>
          <td width='73%'><span class='contenttext'> ($hphone2) $hphone2 <strong>Business Phone:</strong> ($bphone1) $bphone2</span></td>
          </tr>
          <tr><td colspan='2'><h3>Present Home Address</h3></td></tr>
          <tr>
            <td width='27%' align='right'><font color='#FF0000'><strong>*</strong></font>Address Line 1:</td>
          <td width='73%'>$add1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$add2</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>City:</td>
          <td width='73%'>$city</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>State:</td>
          <td width='73%'>$state <font color='#FF0000'><strong>*</strong></font>Zip: $zip</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Own or Rent:</td>
          <td width='73%'>$account</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Length There:</td>
          <td width='73%'>$years</td></tr>
          <tr><td colspan='2'><h3>Previous Home Address</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$prevadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$prevadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$prevcity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$prevstate Zip: $prevzip</td></tr>
          <tr>
            <td align='right'>Own or Rent:</td>
          <td width='73%'>$prevownrent</td></tr>
          <tr>
            <td align='right'>Length There:</td>
          <td width='73%'>$prevyears</td></tr>
          
          <tr><td colspan='2'><h3>Employment Information</h3></td></tr>
          <tr>
            <td width='27%' align='right'><font color='#FF0000'><strong>*</strong></font>Employer Name:</td>
          <td width='73%'>$employer</td></tr>
          <tr>
            <td width='27%' align='right'><font color='#FF0000'><strong>*</strong></font>Address Line 1:</td>
          <td width='73%'>$empadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$empadd2</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>City:</td>
          <td width='73%'>$empcity</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>State:</td>
          <td width='73%'>$empstate <font color='#FF0000'><strong>*</strong></font>Zip: $empzip</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Title:</td>
          <td width='73%'>$title <font color='#FF0000'><strong>*</strong></font>Start Date (MM/DD/YYYY): $start <font color='#FF0000'><strong>*</strong></font>Hours at Work: $hours</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Supervisor's Name:</td>
          <td width='73%'>$super</td></tr>
          <tr>
            <td align='right'>If Self Employed, Type of Business:</td>
            <td>$selfemp</td>
          </tr>
          <tr><td colspan='2'><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Employer Name:</td>
          <td width='73%'>$prevemp</td></tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$prevempadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$prevempadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$prevempcity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$prevempstate Zip: $prevempzip</td></tr>
          <tr>
            <td align='right'>Start Date (MM/DD/YYYY):</td>
          <td width='73%'>$prevstart End Date (MM/DD/YYYY): $prevend</td></tr>
          <tr><td colspan='2'><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan='2'><h3>Employment Income</h3></td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Amount:</td>
          <td width='73%'>$income <font color='#FF0000'><strong>*</strong></font>Frequency: $freq</td></tr>
            <tr><td colspan='2'><h3>Additional Income</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Additional Income Type:</td>
          <td width='73%'>$incometype</td></tr>
          <tr>
            <td align='right'>Amount:</td>
          <td width='73%'>$otherincome Frequency: $otherfreq</td></tr>
          <tr><td colspan='2'><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Name:</td>
            <td>$refname <font color='#FF0000'><strong>*</strong></font>Relationship: $relation</td>
          </tr>
          <tr>
            <td width='27%' align='right'><font color='#FF0000'><strong>*</strong></font>Address Line 1:</td>
          <td width='73%'>$refadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$refadd2</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>City:</td>
          <td width='73%'>$refcity</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>State:</td>
          <td width='73%'>$refstate <font color='#FF0000'><strong>*</strong></font>Zip: $refzip</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font>Phone Number:</td>
            <td>($refphone1) $refphone2</td>
          </tr>
          <tr><td colspan='2'><hr /></td></tr>
          <tr>
            <td colspan='2'><p><strong>CO-APPLICANT</strong></p></td></tr>
            <tr><td colspan='2'>
            <p><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></p>
            <p>$costatus</p></td></tr>
          <tr>
            <td align='right'>First Name:</td>
          <td width='73%'>$cofname Middle Initial: $comname Last Name: $colname</td></tr>
          <tr>
            <td align='right'>Account Number:</td>
          <td width='73%'>$coaccount</td></tr>
          <tr>
            <td align='right'>Social Security Number:</td>
          <td width='73%'>$cossn Driver's License Number: $codlnum State: $codlstate</td></tr>
          <tr>
            <td align='right'>Email Address:</td>
          <td width='73%'>$coemail Date of Birth (MM/DD/YYYY): $codob</td></tr>
          <tr>
            <td align='right'>Home Phone:</td>
          <td width='73%'> ($cohphone1) $cohphone2 Business Phone: ($cobphone1) $cobphone2</td></tr>
          <tr><td colspan='2'><h3>Present Home Address</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$coadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$coadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$cocity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$costate Zip: $cozip</td></tr>
          <tr>
            <td align='right'>Own or Rent:</td>
          <td width='73%'>$coownrent</td></tr>
          <tr>
            <td align='right'>Length There:</td>
          <td width='73%'>$coyears</td></tr>
          
          <tr><td colspan='2'><h3>Employment Information</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Employer Name:</td>
          <td width='73%'>$coemployer</td></tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$coempadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$coempadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$coempcity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$coempstate Zip: $coempzip</td></tr>
          <tr>
            <td align='right'>Title:</td>
          <td width='73%'>$cotitle Start Date (MM/DD/YYYY): $costart Hours at Work: $cohours</td></tr>
          <tr>
            <td align='right'>Supervisor's Name:</td>
          <td width='73%'>$cosuper</td></tr>
          <tr>
            <td align='right'>If Self Employed, Type of Business:</td>
            <td>$coselfemp</td>
          </tr>
          <tr><td colspan='2'><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Employer Name:</td>
          <td width='73%'>$coprevemp</td></tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$coprevempadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$coprevempadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$coprevempcity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$coprevempstate Zip: $coprevempzip</td></tr>
          <tr>
            <td align='right'>Start Date (MM/DD/YYYY):</td>
          <td width='73%'>$coprevempstart End Date (MM/DD/YYYY): $coprevempend</td></tr>
          <tr><td colspan='2'><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan='2'><h3>Employment Income</h3></td></tr>
          <tr>
            <td align='right'>Amount:</td>
          <td width='73%'>$coincome Frequency: $cofreq</td></tr>
            <tr><td colspan='2'><h3>Additional Income</h3></td></tr>
          <tr>
            <td width='27%' align='right'>Additional Income Type:</td>
          <td width='73%'>$coincometype</td></tr>
          <tr>
            <td align='right'>Amount:</td>
          <td width='73%'>$cootherincome Frequency: $cootherfreq</td></tr>
          <tr><td colspan='2'><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
            <td align='right'>Name:</td>
            <td>$corefname Relationship: $corelation</td>
          </tr>
          <tr>
            <td width='27%' align='right'>Address Line 1:</td>
          <td width='73%'>$corefadd1</td></tr>
          <tr>
            <td align='right'>Address Line 2:</td>
          <td width='73%'>$corefadd2</td></tr>
          <tr>
            <td align='right'>City:</td>
          <td width='73%'>$corefcity</td></tr>
          <tr>
            <td align='right'>State:</td>
          <td width='73%'>$corefstate Zip: $corefzip</td></tr>
          <tr>
            <td align='right'>Phone Number:</td>
            <td>($corefphone1) $corefphone2</td>
          </tr>
          <tr><td colspan='2'><hr /></td></tr>
          
          <tr>
            <td colspan='2'>
            <table border='0' cellpadding='5' cellspacing='0' width='100%' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'>
            <tr><td width='19%' align='center'><strong>What You Owe</strong></td>
            <td width='28%' align='center'><strong>Creditor Name Other Than<br />
              This Credit Union</strong></td>
            <td width='11%' align='center'><strong>Interest Rate</strong></td>
            <td width='11%' align='center'><strong>Present Balance</strong></td>
            <td width='12%' align='center'><strong>Monthly Payment</strong></td>
            <td width='19%' align='center'><strong>Owed By</strong></td></tr>
            <tr>
              <td>$owe1</td>
              <td>$creditor1</td>
              <td>$rate1</td>
              <td>$$balance1</td>
              <td>$$pay1</td>
              <td align='center'>$owedby1</td>
            </tr>
            <tr>
              <td>$owe2</td>
              <td>$creditor2</td>
              <td>$rate2</td>
              <td>$$balance2</td>
              <td>$$pay2</td>
              <td align='center'>$owedby2</td>
            </tr>
            <tr>
              <td>$owe3</td>
              <td>$creditor3</td>
              <td>$rate3</td>
              <td>$$balance3</td>
              <td>$$pay3</td>
              <td align='center'>$owedby3</td>
            </tr>
            <tr>
              <td>$owe4</td>
              <td>$creditor4</td>
              <td>$rate4</td>
              <td>$$balance4</td>
              <td>$$pay4</td>
              <td align='center'>$owedby4</td>
            </tr>
            <tr>
              <td>$owe5</td>
              <td>$creditor5</td>
              <td>$rate5</td>
              <td>$$balance5</td>
              <td>$$pay5</td>
              <td align='center'>$owedby5</td>
            </tr>
            <tr>
              <td>$owe6</td>
              <td>$creditor6</td>
              <td>$rate6</td>
              <td>$$balance6</td>
              <td>$$pay6</td>
              <td align='center'>$owedby6</td>
            </tr>
            <tr>
              <td>$owe7</td>
              <td>$creditor7</td>
              <td>$rate7</td>
              <td>$$balance7</td>
              <td>$$pay7</td>
              <td align='center'>$owedby7</td>
            </tr>
            <tr>
              <td>$owe8</td>
              <td>$creditor8</td>
              <td>$rate8</td>
              <td>$$balance8</td>
              <td>$$pay8</td>
              <td align='center'>$owedby8</td>
            </tr>
            <tr>
              <td>$owe9</td>
              <td>$creditor9</td>
              <td>$rate9</td>
              <td>$$balance9</td>
              <td>$$pay9</td>
              <td align='center'>$owedby9</td>
            </tr>
            <tr>
              <td colspan='2'>&nbsp;</td>
              <td><strong>Totals:</strong></td>
              <td>$$total1</td>
              <td>$$total2</td>
              <td>&nbsp;</td>
            </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td colspan='2'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='2'><table border='0' cellpadding='5' cellspacing='0' width='100%' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'>
              <tr>
                <td width='19%' align='center'><strong>What You Own</strong></td>
                <td width='33%' align='center'><strong>List Location Of Property Or Financial Institution</strong></td>
                <td width='11%' align='center'><strong>Market Value</strong></td>
                <td width='18%' align='center'><strong>Pledged As Collateral<br>
                  For Another Loan
                </strong></td>
                <td width='19%' align='center'><strong>Owned By</strong></td>
              </tr>
              <tr>
                <td>$own1</td>
                <td>$location1</td>
                <td>$$market1</td>
                <td align='center'>$pledged1</td>
                <td align='center'>$ownedby1</td>
              </tr>
              <tr>
                <td>$own2</td>
                <td>$location2</td>
                <td>$$market2</td>
                <td align='center'>$pledged2</td>
                <td align='center'>$ownedby2</td>
              </tr>
              <tr>
                <td>$own3</td>
                <td>$location3</td>
                <td>$$market3</td>
                <td align='center'>$pledged3</td>
                <td align='center'>$ownedby3</td>
              </tr>
              <tr>
                <td>$own4</td>
                <td>$location4</td>
                <td>$$market4</td>
                <td align='center'>$pledged4</td>
                <td align='center'>$ownedby4</td>
              </tr>
              <tr>
                <td>$own5</td>
                <td>$location5</td>
                <td>$$market5</td>
                <td align='center'>$pledged5</td>
                <td align='center'>$ownedby5</td>
              </tr>
              <tr>
                <td>$own6</td>
                <td>$location6</td>
                <td>$$market6</td>
                <td align='center'>$pledged6</td>
                <td align='center'>$ownedby6</td>
              </tr>
              <tr>
                <td>$own7</td>
                <td>$location7</td>
                <td>$$market7</td>
                <td align='center'>$pledged7</td>
                <td align='center'>$ownedby7</td>
              </tr>
              <tr>
                <td>$own8</td>
                <td>$location8</td>
                <td>$$market8</td>
                <td align='center'>$pledged8</td>
                <td align='center'>$ownedby8</td>
              </tr>
              <tr>
                <td>$own9</td>
                <td>$location9</td>
                <td>$$market9</td>
                <td align='center'>$pledged9</td>
                <td align='center'>$ownedby9</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan='2'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='2'><table border='0' cellpadding='5' cellspacing='0' width='100%' style='font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;'>
              <tr>
                <td width='76%'><strong>OTHER INFORMATION ABOUT YOU</strong><strong></strong></td>
                <td width='12%' align='center'><strong>Applicant</strong></td>
                <td width='12%' align='center'><strong>Other</strong></td>
              </tr>
              <tr>
                <td>1. ARE YOU A U.S. CITIZEN OR PERMANENT RESIDENT ALIEN?</td>
                <td align='center'>$quest1</td>
                <td align='center'>$quest1a</td>
              </tr>
              <tr>
                <td>2. DO YOU CURRENTLY HAVE ANY OUTSTANDING JUDGMENTS OR HAVE YOU EVER FILED FOR BANKRUPTCY, HAD A DEBT ADJUSTMENT PLAN CONFIRMED UNDER CHAPTER 13, HAD PROPERTY FORECLOSED UPON OR REPOSSESSED IN THE LAST 7 YEARS, OR BEEN A PARTY IN A LAWSUIT?</td>
                <td align='center'>$quest2</td>
                <td align='center'>$quest2a</td>
              </tr>
              <tr>
                <td>3. IS YOUR INCOME LIKELY TO DECLINE IN THE NEXT TWO YEARS?</td>
                <td align='center'>$quest3</td>
                <td align='center'>$quest3a</td>
              </tr>
              <tr>
                <td>4. ARE YOU A CO-MAKER, CO-SIGNER OR GUARANTOR ON ANY LOAN NOT LISTED ABOVE?<br>
                <br>
                FOR WHOM (Name of other obligated on loan):<br>
                $quest4b
                <br>
                <br>
                TO WHOM (Name of creditor):<br>
                $quest4c</td>
                <td align='center'>$quest4</td>
                <td align='center'>$quest4a</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan='2'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='2'><p><strong>STATE LAW NOTICES</strong></p>
              <p><strong>OHIO RESIDENTS ONLY:</strong> The Ohio laws against discrimination require that all creditors make credit equally available to all creditworthy customers, and that credit reporting agencies maintain separate credit histories on each individual upon request. The Ohio Civil Rights Commission administers compliance with this law.</p>
              <p><strong>WISCONSIN RESIDENTS ONLY:</strong> (1) No provision of any marital property agreement, unilateral statement under Section 766.59, or court decree under Section 766.70 will adversely affect the rights of the Credit Union unless the Credit Union is furnished a copy of the agreement, statement or decree, or has actual knowledge of its terms, before the credit is granted or the account is opened. (2) Please sign if you are not applying for this account or loan with your spouse. The credit being applied for, if granted, will be incurred in the interest of the marriage or family of the undersigned.</p>
              <p>$agree1</p></td></tr>
            <tr>
            <td colspan='2'><p><strong>SIGNATURES</strong></p>
              <p>You promise that everything you have stated in this application is correct to the best of your knowledge and that the above information is a complete listing of what you owe. If there are any important changes you will notify us in writing immediately. You authorize the Credit Union to obtain credit reports in connection with this application for credit and for any update, increase, renewal, extension or collection of the credit received. You understand that the Credit Union will rely on the information in this application and your credit report to make its decision. If you request, the Credit Union will tell you the name and address of any credit bureau from which it received a credit report on you. It is a federal crime to willfully and deliberately provide incomplete or incorrect information on loan applications made to federal credit unions or state chartered credit unions insured by NCUA.</p>
              <p>$agree2</p></td></tr>";	

}
echo '</table>';
echo '<br>';

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM loanapp ORDER BY id DESC";
$result  = mysql_query($query) or die('Error, query failed');
$row     = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage);

$self = $_SERVER['PHP_SELF'];

// creating 'previous' and 'next' link
// plus 'first page' and 'last page' link

// print 'previous' link only if we're not
// on page one
if ($pageNum > 1)
{
	$page = $pageNum - 1;
	$prev = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$page\">[Prev]</a></font> ";

	$first = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=1\">[First Page]</a></font> ";
}
else
{
	$prev  = ' <font size="2" face="Arial, Helvetica, sans-serif">[Prev]</font> ';       // we're on page one, don't enable 'previous' link
	$first = ' <font size="2" face="Arial, Helvetica, sans-serif">[First Page]</font> '; // nor 'first page' link
}

// print 'next' link only if we're not
// on the last page
if ($pageNum < $maxPage)
{
	$page = $pageNum + 1;
	$next = "  <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$page\">[Next]</a></font> ";

	$last = " <font size='2' face='Arial, Helvetica, sans-serif'><a href=\"$self?page=$maxPage\">[Last Page]</a></font> ";
}
else
{
	$next = '<font size="2" face="Arial, Helvetica, sans-serif"> [Next]</font> ';      // we're on the last page, don't enable 'next' link
	$last = ' <font size="2" face="Arial, Helvetica, sans-serif">[Last Page]</font> '; // nor 'last page' link
}

// print the page navigation link
echo $first . $prev . "<font size='2' face='Arial, Helvetica, sans-serif'>Showing page <strong>$pageNum</strong> of <strong>$maxPage</strong> pages</font> " . $next . $last;

include 'closedb.php';
?>
<br><br>
<form action="delete.php" method="post">
<table border="0" cellpadding="4" cellspacing="0">
<tr><td><font size='2' face='Arial, Helvetica, sans-serif'>ID to Delete: <input type="text" name="id" size="4" value=""></font></td>
<td><font size='2' face='Arial, Helvetica, sans-serif'><input type="submit" name="submit" value="Delete It"></font></td></tr>
</table>
</form>
</body>
</html>
