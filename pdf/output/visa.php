<html lang="en">
<head>
<title>VISA Application</title>
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

$query="SELECT * FROM ccapp ORDER BY id DESC LIMIT $offset, $rowsPerPage";
$result=mysql_query($query);

// print the student info in table
echo '<table border="1" cellpadding="4" cellspacing="0" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;" width="750px">';
while(list($id,$type,$additional,$addname,$account,$fname,$mname,$lname,$add1,$add2,$city,$state,$zip,$ssn,$dob,$emp,$howlong,$salary,$payment,$hphone1,$hphone2,$cphone1,$cphone2,$dphone1,$dphone2,$limit,$cofname,$comname,$colname,$cossn,$codob,$coemp,$cohowlong,$cosalary,$agree1,$agree2) = mysql_fetch_array($result))
{

	echo "<tr><td colspan='2'>
	<p>&nbsp;</p>
	<p><strong>ID:</strong> $id</p></td></tr>
	<tr><td colspan='2'><p><strong>Account Choice:</strong>
                <br />
                $type
            <br />
            $additional $addname
          </p></td></tr>
            
          <tr><td colspan='2'><p><strong>APPLICANT</strong></p></td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font><strong>Account #</strong></td>
          <td width='73%'><span class='contenttext'>$account</span></td>
          </tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font><strong>First Name</strong></td>
          <td width='73%'><span class='contenttext'>$fname <font color='#FF0000'><strong>*</strong></font><strong>Middle Initial</strong> $mname <font color='#FF0000'><strong>*</strong></font><strong>Last Name</strong> $lname</span></td>
          </tr>
          <tr>
            <td width='27%' align='right'><font color='#FF0000'><strong>*</strong></font><strong>Address Line 1</strong></td>
          <td width='73%'>$add1 <strong>Address Line 2</strong> $add2</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font><strong>City</strong></td>
          <td width='73%'>$city</td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font><strong>State</strong></td>
          <td width='73%'>$state <font color='#FF0000'><strong>*</strong></font><strong>Zip</strong> $zip</td></tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Social Security Number</strong></span></td>
          <td width='73%'><span class='contenttext'>$ssn <font color='#FF0000'><strong>*</strong></font><strong>Date of Birth (MM/DD/YYYY)</strong> $dob</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Employer</strong></span></td>
          <td width='73%'><span class='contenttext'>$emp <font color='#FF0000'><strong>*</strong></font><strong>How Long?</strong> $howlong</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Annual Salary $</strong></span></td>
          <td width='73%'><span class='contenttext'>$salary <font color='#FF0000'><strong>*</strong></font><strong>Mortgage/Rent Payment</strong> $$payment</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Home Phone</strong></span></td>
          <td width='73%'><span class='contenttext'>($hphone1) $hphone2 <font color='#FF0000'><strong>*</strong></font><strong>Cell Phone</strong> ($cphone1) $cphone2</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><strong>Daytime Phone</strong></span></td>
          <td width='73%'><span class='contenttext'>($dphone1) $dphone2</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><strong>Limit Request $</strong></span></td>
          <td width='73%'><span class='contenttext'>$limit</span></td>
          </tr>
          <tr><td colspan='2'><h3>CO-APPLICANT</h3></td></tr>
          <tr>
            <td align='right'><font color='#FF0000'><strong>*</strong></font><strong>First Name</strong></td>
            <td><span class='contenttext'>$cofname <font color='#FF0000'><strong>*</strong></font><strong>Middle Initial</strong> $comname <font color='#FF0000'><strong>*</strong></font><strong>Last Name</strong> $colname</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Social Security Number</strong></span></td>
            <td><span class='contenttext'>$cossn <font color='#FF0000'><strong>*</strong></font><strong>Date of Birth (MM/DD/YYYY)</strong> $codob</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Employer</strong></span></td>
            <td><span class='contenttext'>$coemp <strong>How Long?</strong> $cohowlong</span></td>
          </tr>
          <tr>
            <td align='right'><span class='contenttext'><font color='#FF0000'><strong>*</strong></font><strong>Annual Salary $</strong></span></td>
            <td><span class='contenttext'>$cosalary</span></td>
          </tr>
          <tr>
            <td colspan='2'>&nbsp;</td>
          </tr>
          <tr>
            <td colspan='2'>
              <p><strong>READ THIS STATEMENT BEFORE AGREEING.</strong> By returning this application to the Credit Union, I/we promise that everything stated herein is correct to the best of my/our knowledge and that I/we authorize the Credit Union to obtain credit reports in connection with this application for credit and for any update, renewal or extension of the credit received. I/we understand that the Credit Union will rely on both the representations I/we make in this application and the contents of any credit report it obtains when deciding whether to grant the credit requested. I/we agree to immediately notify you of changes to any of the information provided in this application. I/we agree that my/our account will be subject to the terms and conditions of all applicable Agreement and Disclosure Statement that will accompany my Card(s) when issued; and that a photocopy or facsimile of this application shall be as binding as the original.</p>
              <p><strong>Authorized User/Card.</strong> I/we also request that an additional card be issued in the name of the Authorized User identified above. The undersigned specifically acknowledge their responsibility for all purchases and/or cash advances made by the Authorized User or anyone the Authorized User allows to use any card(s) issued in connection with the credit card account.  The Borrower acknowledges his or her responsibility for all purchases and cash advances made or authorized by the Authorized User.</p>
              <p><strong>$agree1</strong></p></td></tr>
            <tr>
            <td colspan='2'>
              <p><strong>SECURITY AGREEMENT AND PLEDGE.</strong> By signing this ap-plication, acceptance or authorized use of any credit card(s) issued, I/we pledge our shares per any other agreements with the Credit Union to secure payment of my/our obligations on this account.  Shares mean all deposits in any share savings, share draft, club, or other account(s), whether jointly or individually held, all of which are deemed &quot;general deposits,&quot; for the purpose of your pledge.  Additional Security:  I/we understand that collateral securing other loans will secure this account; and that property purchased with my/our credit card(s) will also secure this account.</p>
              <p><strong>$agree2</strong></p>
              <table width='95%' border='1' align='center' cellpadding='2' cellspacing='0' bordercolor='#000000' class='contenttext'>
                <tbody>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>CREDIT DISCLOSURE </strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>Interest Rates and Interest Charges</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td width='50%' align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Annual Percentage Rate (APR) for Purchases</strong></td>
                    <td width='50%' align='left' valign='middle' bgcolor='#ffffff'><div align='center'><strong style='color:#2E2E2E;'>8.90% to 17.90%*</strong></div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>APR for Balance Transfers</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>8.90% to 17.90%*</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>APR for Cash Advances</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>8.90% to 17.90%*</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>*Rates shown are standard card rates and subject to change. Your rate may vary based on individual creditworthiness and our underwriting standards.</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Penalty APR and When it Applies</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>NONE</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>How to Avoid Paying Interest on Purchases</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><div align='left' style='color:#2E2E2E;'>We will not charge you any interest on purchases if you pay your entire balance by the due date each month. The Interest Charge on cash advances begins from the date you                            obtained the cash advance. The Interest Charge on balance transfers begins from the date the transaction is posted to your account.</div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Minimum Interest Payment</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><div align='left' style='color:#2E2E2E;'>If you are charged interest, the charge will be no less than $0.00</div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>For Credit Card Tips from the Consumer Financial Protection Bureau</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><div align='left' style='color:#2E2E2E;'>To learn more about factors to consider when applying for or using a credit card, visit the Web site of the Consumer Financial Protection Bureau at <a onclick='drawAlert()' href='https://www.consumerfinance.gov/learnmore' target='_blank'>https://www.consumerfinance.gov/learnmore</a>.</div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><div align='left'><strong style='color:#fff;'>Fees</strong></div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Annual Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>NONE</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>Transaction Fee</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Balance Transfer Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>NONE</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Cash Advance Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>NONE</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Foreign Transaction Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><div style='color:#2E2E2E;' align='center'>Up to 1.00% of each transaction in US dollars</div></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>Penalty Fees</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Late Payment Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Up to $25.00</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Over-the-Credit Limit Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>NONE</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Returned Payment Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Up to $27.00</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#869e29' colspan='2'><strong style='color:#fff;'>Other Fees</strong></td>
                  </tr>
                  <tr bgcolor='#cccccc'>
                    <td align='left' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Live Pay-By-Phone Fee</strong></td>
                    <td align='center' valign='middle' bgcolor='#ffffff'><strong style='color:#2E2E2E;'>Up to $5.00</strong></td>
                  </tr>
                </tbody>
              </table>
              
              </td></tr>";	

}
echo '</table>';
echo '<br>';

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM ccapp ORDER BY id DESC";
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
<form action="delete2.php" method="post">
<table border="0" cellpadding="4" cellspacing="0">
<tr><td><font size='2' face='Arial, Helvetica, sans-serif'>ID to Delete: <input type="text" name="id" size="4" value=""></font></td>
<td><font size='2' face='Arial, Helvetica, sans-serif'><input type="submit" name="submit" value="Delete It"></font></td></tr>
</table>
</form>
</body>
</html>
