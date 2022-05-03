<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en">
<head>
<meta charset="utf-8">
<title>Family First Credit Union - VISA App</title>
<meta name="description" content="Family First Credit Union - Like all credit unions, Family First Credit Union is a not-for-profit financial cooperative. When you join the credit union, you become a shareholder - or an owner - of a very unique financial institution. Earnings above the required reserves are returned to you, in the form of lower interest rates on loans and competitive dividends on savings.">
<meta name="keywords" content="Family First Credit Union, Family First CU, Family First Credit Union, credit union, savings, loans, credit cards, ATM, debit cards, Visa, check cards, nonprofit, service">

<link rel="stylesheet" type="text/css" href="../css/inner.css" media="screen" />
<link rel="stylesheet" href="../css/ajxmenu.css" type="text/css">
<script src="../css/ajxmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/drawAlert.js"></script>

<link rel="stylesheet" href="Lively-Validator/lively-validator.css" />
   <script type="text/javascript" src="Lively-Validator/jquery-1.8.0.min.js"></script>
   <script type="text/javascript" src="Lively-Validator/livelyValidator.js"></script>
   <script type="text/javascript" >
   $(document).ready( function(){
      $('#App').livelyValidator({debug:true});
      $(':input').css( 'autocomplete', 'off' );   
   });
   </script>
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
<div class="container">
	<div class="header">
		<div class="logo"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "logo.html"); ?></div>
    	<div class="top"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "top.html"); ?></div>
    	<div class="hb"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "hb.html"); ?></div>
    </div>
    <div class="nav"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "nav.html"); ?></div>
    <div class="search"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "search.html"); ?></div>
    <div class="spacer2"><img src="../imgs/spacer2.png" border="0" alt="" /></div>
    <div class="innerL">
    	<div class="innerLT"><img src="../imgs/innerLT.png" border="0" alt="" /></div>
        <div class="innerC"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "formlinks.html"); ?></div>
        <div class="spacer3">&nbsp;</div>
        <div class="innerLB"><img src="../imgs/innerLB.png" border="0" alt="" /></div>
    </div>
    <div class="innerR">
    <h2>VISA Platinum Credit Card Application</h2>
    <FORM METHOD="POST" ACTION="insert2.php" id="App" name="Application" onSubmit="return uniValidate(this)">
          <table width="100%" border="0" cellpadding="4" cellspacing="0" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;" role="presentation">
          <tr><td colspan="2">
			  <fieldset style="border: none;">
				  <legend><strong>Account Choice:</strong></legend>
                <br />
                <label><input name="type" type="checkbox" value="Platinum VISA Credit Card" data-validate="required">
					Platinum VISA Platinum Credit Card</label>
            <br />
            <label><input name="additional" type="checkbox" value="Additional Card(s)" id="additional">
				You request Additional Card(s)</label>
			  </fieldset>
			  <label for="addname">In the name of:</label> <input id="addname" name="addname" value="" size="50" type="text" />
          </td></tr>
            
          <tr><td colspan="2"><p><strong>APPLICANT</strong></p></td></tr>
          <tr>
			  <td align="right"><label for="account"><font color="#FF0000"><strong>*</strong></font>Member/Account #</label></td>
          <td width="73%"><span class="contenttext">
            <input id="account" name="account" value="" size="25" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="fname"><font color="#FF0000"><strong>*</strong></font>First Name</label></td>
          <td width="73%"><span class="contenttext">
            <input id="fname" name="fname" value="" size="25" type="text" data-validate="required; alphabetic" /> 
			  <label for="mname"><font color="#FF0000"><strong>*</strong></font>Middle Initial</label>
              <input id="mname" name="mname" value="" size="5" type="text" data-validate="required" />
			  <label for="lname"><font color="#FF0000"><strong>*</strong></font>Last Name</label>
            <input id="lname" name="lname" value="" size="25" type="text" data-validate="required; alphabetic" />
          </span></td>
          </tr>
          <tr>
			  <td width="27%" align="right"><label for="add1"><font color="#FF0000"><strong>*</strong></font>Address Line 1</label></td>
          <td width="73%"><input id="add1" name="add1" value="" size="25" type="text" data-validate="required" /> 
			  <label for="add2">Address Line 2</label>
            <input id="add2" name="add2" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="right"><label for="city"><font color="#FF0000"><strong>*</strong></font>City</label></td>
          <td width="73%"><input id="city" name="city" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
			  <td align="right"><label for="state"><font color="#FF0000"><strong>*</strong></font>State</label></td>
          <td width="73%"><input id="state" name="state" value="" size="2" type="text" data-validate="required" /> 
			  <label for="zip"><font color="#FF0000"><strong>*</strong></font>Zip</label>
<input id="zip" name="zip" value="" size="12" type="text" data-validate="required" /></td></tr>
          <tr>
			  <td align="right"><label for="ssn"><font color="#FF0000"><strong>*</strong></font>Social Security Number</label></td>
          <td width="73%"><span class="contenttext">
            <input id="ssn" name="ssn" value="" size="25" type="text" data-validate="required" /> 
			  <label for="dob"><font color="#FF0000"><strong>*</strong></font>Date of Birth (MM/DD/YYYY)</label>
            <input id="dob" name="dob" value="" size="20" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="emp"><span class="contenttext"><font color="#FF0000"><strong>*</strong></font>Employer</span></label></td>
          <td width="73%"><span class="contenttext">
            <input id="emp" name="emp" value="" size="25" type="text" data-validate="required" />
			  <label for="howlong"><font color="#FF0000"><strong>*</strong></font>How Long?</label>
              <input id="howlong" name="howlong" value="" size="25" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="salary"><span class="contenttext"><font color="#FF0000"><strong>*</strong></font>Annual Salary $</span></label></td>
          <td width="73%"><span class="contenttext">
            <input id="salary" name="salary" value="" size="25" type="text" data-validate="required" /> 
			  <label for="payment"><font color="#FF0000"><strong>*</strong></font>Mortgage/Rent Payment $</label>
            <input id="payment" name="payment" value="" size="25" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr><td>&nbsp;</td>
          <td><em>NOTICE: Alimony, child support, or separate maintenance income need not be revealed if you do not choose to have it considered.</em></td>
          </tr>
          <tr>
            <td align="right"><span class="contenttext">&nbsp;</span></td>
          <td width="73%"><div class="contenttext">
			  <fieldset style="border: none;">
				  <legend><font color="#FF0000"><strong>*</strong></font>Home Phone</legend>
				  <label>(<input id="hphone2" name="hphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />)</label>
				  <label> - <input id="account21" name="hphone2" maxlength="10" value="" size="10" type="text" data-validate="required" /></label>
			  </fieldset>
          </div></td>
          </tr>
			  <tr>
            <td align="right"><span class="contenttext">&nbsp;</span></td>
          <td width="73%"><div class="contenttext">
			  <fieldset style="border: none;">
				  <legend><font color="#FF0000"><strong>*</strong></font>Cell Phone</legend>
				  <label>(<input id="hphone3" name="cphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />)</label>
				  <label> - <input id="account22" name="cphone2" maxlength="10" value="" size="10" type="text" data-validate="required" /></label>
			  </fieldset>
          </div></td>
          </tr>
          <tr>
            <td align="right"><span class="contenttext">&nbsp;</span></td>
          <td width="73%"><div class="contenttext">
			  <fieldset style="border: none;">
				  <legend>Daytime Phone</legend> 
				  <label>(<input id="hphone" name="dphone1" maxlength="3" value="" size="3" type="text" />)</label>
				  <label> - <input id="account9" name="dphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset>
          </div></td>
          </tr>
          <tr>
			  <td align="right"><label for="limit"><span class="contenttext">Limit Request $</span></label></td>
          <td width="73%"><span class="contenttext">
            <input id="limit" name="limit" value="" size="25" type="text" />
          </span></td>
          </tr>
          <tr><td colspan="2"><h3>CO-APPLICANT</h3></td></tr>
          <tr>
			  <td align="right"><label for="cofname">First Name</label></td>
            <td><span class="contenttext">
              <input id="cofname" name="cofname" value="" size="25" type="text" />
				<label for="comname">Middle Initial</label>
              <input id="comname" name="comname" value="" size="5" type="text" />
				<label for="colname">Last Name</label>
              <input id="colname" name="colname" value="" size="25" type="text" />
            </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="cossn"><span class="contenttext">Social Security Number</span></label></td>
            <td><span class="contenttext">
              <input id="cossn" name="cossn" value="" size="25" type="text" />
				<label for="codob">Date of Birth (MM/DD/YYYY)</label>
              <input id="codob" name="codob" value="" size="20" type="text" />
            </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="coemp"><span class="contenttext">Employer</span></label></td>
            <td><span class="contenttext">
              <input id="coemp" name="coemp" value="" size="25" type="text" />
				<label for="cohowlong">How Long?</label>
              <input id="cohowlong" name="cohowlong" value="" size="25" type="text" />
            </span></td>
          </tr>
          <tr>
			  <td align="right"><label for="cosalary"><span class="contenttext">Annual Salary $</span></label></td>
            <td><span class="contenttext">
              <input id="cosalary" name="cosalary" value="" size="25" type="text" />
            </span></td>
          </tr>
          <tr><td>&nbsp;</td>
          <td><em>NOTICE: Alimony, child support, or separate maintenance income need not be revealed if you do not choose to have it considered.</em></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">
              <p><strong>READ THIS STATEMENT BEFORE AGREEING.</strong> By returning this application to the Credit Union, I/we promise that everything stated herein is correct to the best of my/our knowledge and that I/we authorize the Credit Union to obtain credit reports in connection with this application for credit and for any update, renewal or extension of the credit received. I/we understand that the Credit Union will rely on both the representations I/we make in this application and the contents of any credit report it obtains when deciding whether to grant the credit requested. I/we agree to immediately notify you of changes to any of the information provided in this application. I/we agree that my/our account will be subject to the terms and conditions of all applicable Agreement and Disclosure Statement that will accompany my Card(s) when issued; and that a photocopy or facsimile of this application shall be as binding as the original.</p>
              <p><strong>Authorized User/Card.</strong> I/we also request that an additional card be issued in the name of the Authorized User identified above. The undersigned specifically acknowledge their responsibility for all purchases and/or cash advances made by the Authorized User or anyone the Authorized User allows to use any card(s) issued in connection with the credit card account.  The Borrower acknowledges his or her responsibility for all purchases and cash advances made or authorized by the Authorized User.</p>
				<p><label for="agree1">I agree to the above statement.</label> <input name="agree1" type="checkbox" id="agree1" value="I agree." data-validate="required"></p></td></tr>
            <tr>
            <td colspan="2">
              <p><strong>SECURITY AGREEMENT AND PLEDGE.</strong> By signing this ap-plication, acceptance or authorized use of any credit card(s) issued, I/we pledge our shares per any other agreements with the Credit Union to secure payment of my/our obligations on this account.  Shares mean all deposits in any share savings, share draft, club, or other account(s), whether jointly or individually held, all of which are deemed &quot;general deposits,&quot; for the purpose of your pledge.  Additional Security:  I/we understand that collateral securing other loans will secure this account; and that property purchased with my/our credit card(s) will also secure this account.</p>
				<p><label for="agree2">I agree to the Security Agreement and Pledge.</label> <input name="agree2" type="checkbox" id="agree2" value="I agree." data-validate="required"></p>
              <p><strong>MILITARY LENDING ACT DISCLOSURE:</strong><br />
              Federal law provides important protections to members of the Armed Forces and  their dependents relating to extensions of consumer credit.&nbsp; In general,  the cost of consumer credit to a member of the Armed Forces and his or her  dependent may not exceed an annual percentage rate of 36 percent.&nbsp; This  rate must include, as applicable to the credit transactions or account:&nbsp;  The costs associated with credit insurance premiums; fees for ancillary  products sold in connection with the credit transaction; any application fee  charged (other than certain application fees for specified credit transactions  or accounts); and any participation fee charged (other than certain  participation fees for a credit card account).&nbsp; To listen to the Military  Lending Act Disclosure Policy, please call (toll-free) #1-844-334-3810.</p>
              <p><label for="agree3">I agree to the Military Lending Act Disclosure.</label> <input name="agree3" type="checkbox" id="agree3" value="I agree." data-validate="required" /></p>
<table width="95%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#000000" class="contenttext" role="presentation">
              <tbody>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">CREDIT DISCLOSURE </strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">Interest Rates and Interest Charges</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td width="50%" align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Annual Percentage Rate (APR) for Purchases</strong></td>
                    <td width="50%" align="left" valign="middle" bgcolor="#ffffff"><div align="center"><strong style="color:#2E2E2E;">8.90% to 17.90%*</strong></div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">APR for Balance Transfers</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">8.90% to 17.90%*</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">APR for Cash Advances</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">8.90% to 17.90%*</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">*Rates shown are standard card rates and subject to change. Your rate may vary based on individual creditworthiness and our underwriting standards.</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Penalty APR and When it Applies</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">NONE</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">How to Avoid Paying Interest on Purchases</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><div align="left" style="color:#2E2E2E;">We will not charge you any interest on purchases if you pay your entire balance by the due date each month. The Interest Charge on cash advances begins from the date you                            obtained the cash advance. The Interest Charge on balance transfers begins from the date the transaction is posted to your account.</div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Minimum Interest Payment</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><div align="left" style="color:#2E2E2E;">If you are charged interest, the charge will be no less than $0.00</div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">For Credit Card Tips from the Consumer Financial Protection Bureau</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><div align="left" style="color:#2E2E2E;">To learn more about factors to consider when applying for or using a credit card, visit the Web site of the Consumer Financial Protection Bureau at <a onclick="drawAlert()" href="https://www.consumerfinance.gov/learnmore" target="_blank">https://www.consumerfinance.gov/learnmore</a>.</div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><div align="left"><strong style="color:#fff;">Fees</strong></div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Annual Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">NONE</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">Transaction Fee</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Balance Transfer Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">NONE</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Cash Advance Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">NONE</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Foreign Transaction Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><div style="color:#2E2E2E;" align="center">Up to 1.00% of each transaction in US dollars</div></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">Penalty Fees</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Late Payment Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Up to $32.00</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Over-the-Credit Limit Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">NONE</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Returned Payment Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Up to $32.00</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#869e29" colspan="2"><strong style="color:#fff;">Other Fees</strong></td>
                  </tr>
                  <tr bgcolor="#cccccc">
                    <td align="left" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Live Pay-By-Phone Fee</strong></td>
                    <td align="center" valign="middle" bgcolor="#ffffff"><strong style="color:#2E2E2E;">Up to $5.00</strong></td>
                  </tr>
                </tbody>
              </table>
              
              </td></tr>
            <tr>
            <td colspan="2" align="center"><input name="Submit" type="submit" id="Submit" title="Submit Visa Application" value="Submit" /></td></tr>
          </table>
          </FORM>
    </div>
    <div class="spacer4"><img src="../imgs/spacer4.png" border="0" alt="" /></div>
</div>
<div class="footercontain">
<table width="1150" border="0" align="center" cellpadding="0" cellspacing="0" role="presentation">
<tr><td>
	<div class="footer1"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "footer1.html"); ?></div>
    <div class="footer2"><? $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/"; include($INC_DIR. "footer2.html"); ?></div>
</td></tr>
</table>
</div>
</body>
</html>
