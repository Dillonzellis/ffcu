<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en">
<head>
<meta charset="utf-8">
<title>Family First Credit Union - Loan App</title>
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
    <h2>Loan Application</h2>
    <FORM METHOD="POST" ACTION="insert.php" id="App" name="Application" onSubmit="return uniValidate(this)">
          <table width="100%" border="0" cellpadding="4" cellspacing="0" class="contenttext" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;" role="presentation">
          <tr><td colspan="2"><p>Married Applicants: May apply for a separate account.</p>
            <p><strong>Individual Credit:</strong> You must complete the <strong>Applicant</strong> section about yourself and the <strong>Other</strong> section about your spouse if:</p>
            <ol class="bullets">
            <li>you live in or the property pledged as collateral is located in a community property state (AK, AZ, CA, ID, LA, NM, NV, TX, WA, WI).</li>
            <li>your spouse will use the account, or</li>
            <li>you are relying on your spouse's income as a basis for repayment. If you are relying on income from alimony, child support, or separate maintenance, complete the <strong>Other</strong> section to the extent possible about the person on whose payments you are relying.</li>
            </ol>
            <p><strong><br />
            Joint Credit:</strong> Each Applicant must <strong>individually</strong> complete the appropriate section below. If Co-Borrower is spouse of the Applicant, mark the Co-Applicant box.</p>
            <p><strong>Guarantor:</strong> Complete the <strong>Other</strong> section if you are a guarantor on an account/loan.</p>
            <p><fieldset style="border: none;">
				<legend><strong>Account/Loan:</strong></legend>
              <label><input id="type" name="type" type="radio" value="Individual" data-validate="required">
				  Individual</label> 
            <label><input name="type" type="radio" value="Joint" data-validate="required">
				Joint</label><br>
            
			  </fieldset></p>
			  <p><label for="amount"><font color="#FF0000"><strong>*</strong></font>Amount Requested $</label>
              <input id="amount" name="amount" value="" size="25" type="text" data-validate="required; number" />
            </p>
			  <p><label for="purpose"><font color="#FF0000"><strong>*</strong></font>Loan Type:</label>
              <input id="purpose" name="purpose" value="" size="25" type="text" data-validate="required" />
            </p>
			  <p><label for="branch"><font color="#FF0000"><strong>*</strong></font>Which location would you like to pick up your loan?</label></p>
            <p>
            <select id="branch" name="branch" data-validate="required">
                          <option value="" selected>---Select a branch---</option>
                          <option value="Roswell">Roswell</option>
                          <option value="Hapeville">Hapeville</option>
            </select>
            </p>
			  <p><label for="terms"><font color="#FF0000"><strong>*</strong></font>What terms would you like?</label></p>
            <p>
            <select name="terms" data-validate="required" id="terms">
                          <option value="" selected>---Select terms---</option>
                          <option value="12 months">12 months</option>
                          <option value="24 months">24 months</option>
                          <option value="36 months">36 months</option>
                          <option value="48 months">48 months</option>
                          <option value="60 months">60 months</option>
                          <option value="72 months">72 months</option>
            </select>
            </p>
            <p>
				<fieldset style="border: none;">
					<legend><strong>Repayment:</strong></legend>
					<label><input name="repayment" type="radio" value="Payroll Deduction" data-validate="required">
						Payroll Deduction</label>
					<label><input name="repayment" type="radio" value="Cash" data-validate="required">
						Cash</label>
					<label><input name="repayment" type="radio" value="Automatic Payment" data-validate="required">
						Automatic Payment</label>
              <label><input name="repayment" type="radio" value="Military Allotment" data-validate="required">
				  Military Allotment</label>
			  </fieldset>
            </p>
            </td></tr>
            <tr><td colspan="2">
            <p><strong>PAYMENT PROTECTION</strong></p>
            <p><fieldset style="border: none;">
				<legend>Are you interested in having your loan protected by credit life and disability insurance?</legend>
				<label><input name="protection" type="radio" value="Yes" data-validate="required"> Yes</label>
				<label><input name="protection" type="radio" value="No" data-validate="required"> No</label>
				</fieldset>
		</p>
            <p>If you answer "yes", the credit union will disclose the cost to protect your loan. The protection is voluntary and does not affect your loan approval. In order for your loan to be covered, you will need to sign a separate application that explains the terms and conditions.</p>
            </td></tr>
          <tr><td colspan="2"><p><strong>APPLICANT</strong></p></td></tr>
          <tr><td colspan="2">
            <p><fieldset style="border: none;">
			  <legend><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></legend>
			  <br>
			  <label><input name="status" type="radio" value="Married"> Married</label>
			  <label><input name="status" type="radio" value="Separated"> Separated</label>
			  <label><input name="status" type="radio" value="Unmarried"> Unmarried (Single - Divorced - Widowed)</label>
			  </fieldset>
	</p></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="fname"><font color="#FF0000"><strong>*</strong></font>Applicant First Name</label>
<input id="fname" name="fname" value="" size="25" type="text" data-validate="required; alphabetic" />
			  <label for="mname">Applicant Middle Initial</label>
              <input name="mname" type="text" id="mname" value="" size="5" maxlength="2" />
			  <label for="lname"><font color="#FF0000"><strong>*</strong></font>Applicant Last Name</label>            <input id="lname" name="lname" value="" size="25" type="text" data-validate="required; alphabetic" />          </td>
          </tr>
          <tr>
			  <td colspan="2" align="left" class="contenttext"><fieldset style="border: none;">
				  <legend><font color="#FF0000"><strong>*</strong></font>Applicant Account Info</legend>
				  <label>Member/Account Number <input id="account" name="account" value="" size="25" type="text" data-validate="required" /></label>
				  </fieldset></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="ssn"><font color="#FF0000"><strong>*</strong></font>Social Security Number</label>
<input id="ssn" name="ssn" value="" size="25" type="text" data-validate="required" />
			  <label for="dlnum">Applicant Driver's License Number</label> 
            <input id="dlnum" name="dlnum" value="" size="20" type="text" />
			  <label for="dlstate">Applicant Driver's License State</label>            <input name="dlstate" type="text" id="dlstate" value="" size="2" maxlength="2" />          </td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="email"><font color="#FF0000"><strong>*</strong></font>Applicant Email Address</label>
<input id="email" name="email" value="" size="25" type="text" data-validate="email; required" />
			  <label for="dob"><font color="#FF0000"><strong>*</strong></font>Applicant Date of Birth (MM/DD/YYYY)</label>              <input id="dob" name="dob" value="" size="10" type="text" data-validate="required" />          </td>
          </tr>
          <tr>
            <td colspan="2" align="left">&nbsp;
			  <fieldset style="border: none;">
				  <legend><font color="#FF0000"><strong>*</strong></font>Home Phone</legend>
				  <label>(<input name="hphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />)</label>
				  <label> - <input name="hphone2" maxlength="10" value="" size="10" type="text" data-validate="required" /></label>
			  </fieldset>
			  <br>
			  <fieldset style="border: none;">
				  <legend>Business Phone</legend>
				  <label>(<input id="hphone3" name="bphone1" maxlength="3" value="" size="3" type="text" />)</label>
				  <label> - <input id="account2" name="bphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset>
			  <br>			  <fieldset style="border: none;">
				  <legend>Cell Phone</legend>
				  <label>(<input id="hphone" name="cphone1" maxlength="3" value="" size="3" type="text" />)</label>
				  <label> - <input id="account3" name="cphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset>          </td>
          </tr>
          <tr><td colspan="2"><h3>Present Home Address</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="add1"><font color="#FF0000"><strong>*</strong></font>Applicant Address Line 1</label>			    <input id="add1" name="add1" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="add2">Applicant Address Line 2</label>			    <input id="add2" name="add2" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="city"><font color="#FF0000"><strong>*</strong></font>Applicant City</label>			    <input id="city" name="city" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="state"><font color="#FF0000"><strong>*</strong></font>Applicant State</label>
			    <input name="state" type="text" id="state" value="" size="2" maxlength="2" data-validate="required" /> 
			  <label for="zip"><font color="#FF0000"><strong>*</strong></font>Applicant Zip</label>
<input id="zip" name="zip" value="" size="12" type="text" data-validate="required" /></td>
          </tr>
          <tr>
            <td colspan="2" align="left">
              <fieldset style="border: none;">
                <legend><font color="#FF0000"><strong>*</strong></font>Own or Rent</legend>
                <label><input id="account4" name="ownrent" value="Own" type="radio" data-validate="required" /> Own</label>
                <label><input id="account5" name="ownrent" value="Rent" type="radio" data-validate="required" /> Rent</label>
                </fieldset>            </td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="years"><font color="#FF0000"><strong>*</strong></font>Length There</label>			    <input id="years" name="years" maxlength="12" value="" size="12" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="monthly"><font color="#FF0000"><strong>*</strong></font>Monthly Payment</label>			    <input id="monthly" name="monthly" maxlength="12" value="" size="12" type="text" data-validate="required" /></td>
          </tr>
          
          <tr><td colspan="2"><h3>Employment Information</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="employer"><font color="#FF0000"><strong>*</strong></font>Employer Name</label>			    <input id="employer" name="employer" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="empadd1"><font color="#FF0000"><strong>*</strong></font>Employer Address Line 1</label>			    <input id="empadd1" name="empadd1" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="empadd2">Employer Address Line 2</label>			    <input id="empadd2" name="empadd2" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="empcity"><font color="#FF0000"><strong>*</strong></font>Employer City</label>			    <input id="empcity" name="empcity" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="empstate"><font color="#FF0000"><strong>*</strong></font>Employer State</label>
			    <input id="empstate" name="empstate" maxlength="2" value="" size="2" type="text" data-validate="required" /> 
			  <label for="empzip"><font color="#FF0000"><strong>*</strong></font>Employer Zip</label>
			  <input id="empzip" name="empzip" value="" size="12" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="title"><font color="#FF0000"><strong>*</strong></font>Title</label>
			    <input id="title" name="title" value="" size="12" type="text" data-validate="required" /> 
			  <label for="start"><font color="#FF0000"><strong>*</strong></font>Start Date (MM/DD/YYYY)</label> 
            <input id="start" name="start" value="" size="12" type="text" data-validate="required" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="selfemp">If Applicant Self Employed, Type of Business</label>			    <input id="selfemp" name="selfemp" value="" size="25" type="text" /></td>
            </tr>
          <tr><td colspan="2"><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevemp">Previous Employer Name</label>			    <input id="prevemp" name="prevemp" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevempadd1">Previous Employer Address Line 1</label>			    <input id="prevempadd1" name="prevempadd1" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevempadd2">Previous Employer Address Line 2</label>			    <input id="prevempadd2" name="prevempadd2" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevempcity">Previous Employer City</label>			    <input id="prevempcity" name="prevempcity" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevempstate">Previous Employer State</label>
			    <input id="prevempstate" name="prevempstate" maxlength="2" value="" size="2" type="text" /> 
			  <label for="prevempzip">Previous Employer Zip</label> 
            <input id="prevempzip" name="prevempzip" value="" size="12" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="prevstart">Previous Employer Start Date (MM/DD/YYYY)</label>
			    <input id="prevstart" name="prevstart" value="" size="12" type="text" /> 
			  <label for="prevend">Previous Employer End Date (MM/DD/YYYY)</label> 
              <input id="prevend" name="prevend" value="" size="12" type="text" /></td>
          </tr>
          <tr><td colspan="2"><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan="2"><h3>Employment Income</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="income"><font color="#FF0000"><strong>*</strong></font>Amount (Net - After Taxes)</label>
			    <input id="income" name="income" maxlength="12" value="" size="12" type="text" data-validate="required" /> 
			  <label for="freq"><font color="#FF0000"><strong>*</strong></font>Frequency</label>
			  <select id="freq" name="freq" type="select-one" data-validate="required">
                <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td>
          </tr>
            <tr><td colspan="2"><h3>Additional Income</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="incometype">Applicant Additional Income Type</label>			    <select id="incometype" name="incometype" type="select-one">
		        <option value="">Select One</option>
			      <option value="Alimony - Child Support">Alimony - Child Support</option>
			      <option value="Disability">Disablity</option>
			      <option value="Second Employment Income">Second Employment Income</option>
			      <option value="Social Security - Retirement">Social Security - Retirement</option>
			      <option value="Rental Property">Rental Property</option>
			      <option value="Other">Other</option>
		        </select>            </td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="otherincome">Other Amount</label>
			    <input id="otherincome" name="otherincome" maxlength="12" value="" size="12" type="text" /> 
			  <label for="otherfreq">Other Frequency</label>
			  <select id="otherfreq" name="otherfreq" type="select-one">
			    <option value="">Select One</option>
			    <option value="Monthly">Monthly</option>
			    <option value="Semi-Monthly">Semi-Monthly</option>
			    <option value="Weekly">Weekly</option>
			    <option value="Bi-Weekly">Bi-Weekly</option>
		      </select></td>
          </tr>
          <tr><td colspan="2"><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
			  <td colspan="2" align="left"><label for="refname"><font color="#FF0000"><strong>*</strong></font>Relative Name</label>
			    <input id="refname" name="refname" value="" size="25" type="text" data-validate="required" />
				<label for="relation"><font color="#FF0000"><strong>*</strong></font>Relationship</label>
            <input id="relation" name="relation" value="" size="25" type="text" data-validate="required" /></td>
            </tr>
          <tr>
			  <td colspan="2" align="left"><label for="refadd1">Relative Address Line 1</label>			    <input id="refadd1" name="refadd1" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="refadd2">Relative Address Line 2</label>			    <input id="refadd2" name="refadd2" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="refcity">Relative City</label>			    <input id="refcity" name="refcity" value="" size="25" type="text"/></td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="refstate">Relative State</label>
			    <input id="refstate" name="refstate" maxlength="2" value="" size="2" type="text"  />
			  <label for="refzip">Relative Zip</label> 
            <input id="refzip" name="refzip" value="" size="12" type="text"  /></td>
          </tr>
          <tr>
            <td colspan="2" align="left"><fieldset style="border: none;">
              <legend><font color="#FF0000"><strong>*</strong></font>Phone Number</legend>
              <label>(<input id="account6" name="refphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />)</label>
              <label> - <input id="account7" name="refphone2" maxlength="10" value="" size="10" type="text" data-validate="required" /></label>
            </fieldset></td>
            </tr>
          <tr><td colspan="2"><hr /></td></tr>
          <tr>
            <td colspan="2"><p><strong>CO-APPLICANT</strong></p></td></tr>
            <tr><td colspan="2" align="left">
            <p><fieldset style="border: none;">
				<legend><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></legend><br>
              <label><input name="costatus" type="radio" value="Married">
				  Married</label>
              <label><input name="costatus" type="radio" value="Separated">
				  Separated</label> 
              <label><input name="costatus" type="radio" value="Unmarried"> 
				  Unmarried (Single - Divorced - Widowed)</label>
				</fieldset>
</p></td></tr>
          <tr>
			  <td align="left"><label for="cofname">First Name</label></td>
          <td width="76%" align="left"><input id="cofname" name="cofname" value="" size="25" type="text" />
			  <label for="comname">Middle Initial</label>
              <input id="comname" name="comname" value="" size="5" type="text" />
			  <label for="colname">Last Name</label>
          <input id="colname" name="colname" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coaccount">Co Member/Account Number</label></td>
          <td width="76%" align="left"><input id="coaccount" name="coaccount" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="cossn">Social Security Number</label></td>
          <td width="76%" align="left"><input id="cossn" name="cossn" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coemail">Email Address</label></td>
          <td width="76%" align="left"><input id="coemail" name="coemail" value="" size="25" type="text" /> 
			  <label for="codob">Date of Birth (MM/DD/YYYY)</label>
              <input id="codob" name="codob" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="left">&nbsp;</td>
          <td width="76%" align="left"><fieldset style="border: none;">
			  <legend>Home Phone</legend>
			  <label>(<input id="hphone2" name="cohphone1" maxlength="3" value="" size="3" type="text" />)</label>
			  <label> - <input id="account8" name="cohphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset>
			  <br>
			  <fieldset style="border: none;">
				  <legend>Business Phone</legend>
				  <label>(<input id="hphone33" name="cobphone1" maxlength="3" value="" size="3" type="text" />)</label>
				  <label> - <input id="account9" name="cobphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset>
			  <br>
			  <fieldset style="border: none;">
				  <legend>Cell Phone</legend>
				  <label>(<input id="hphone4" name="cocphone1" maxlength="3" value="" size="3" type="text" />)</label>
				  <label> - <input id="account10" name="cocphone2" maxlength="10" value="" size="10" type="text" /></label>
			  </fieldset></td></tr>
          <tr><td colspan="2" align="left"><h3>Present Home Address</h3></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coadd1">Co-App Address Line 1</label></td>
          <td width="76%" align="left"><input id="coadd1" name="coadd1" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coadd2">Co-App Address Line 2</label></td>
          <td width="76%" align="left"><input id="coadd2" name="coadd2" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="cocity">Co-App City</label></td>
          <td width="76%" align="left"><input id="cocity" name="cocity" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="costate">Co-App State</label></td>
          <td width="76%" align="left"><input id="costate" name="costate" value="" size="2" type="text" />
			  <label for="cozip">Co-App Zip</label>
            <input id="cozip" name="cozip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="left">&nbsp;</td>
          <td width="76%" align="left"><fieldset style="border: none;">
			  <legend>Own or Rent</legend>
			  <label><input id="account11" name="coownrent" value="Own" type="radio" />
				  Own</label>
			  <label><input id="account12" name="coownrent" value="Rent" type="radio" /> 
				  Rent</label>
			  </fieldset></td></tr>
          <tr>
			  <td align="left"><label for="coyears">Length There</label></td>
          <td width="76%" align="left"><input id="coyears" name="coyears" maxlength="12" value="" size="12" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="comonthly">Monthly Payment</label></td>
          <td width="76%" align="left"><input id="comonthly" name="comonthly" maxlength="12" value="" size="12" type="text" /></td></tr>
          
          <tr><td colspan="2" align="left"><h3>Employment Information</h3></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coemployer">Co-App Employer Name</label></td>
          <td width="76%" align="left"><input id="coemployer" name="coemployer" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coempadd1">Co-App Employer Address Line 1</label></td>
          <td width="76%" align="left"><input id="coempadd1" name="coempadd1" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coempadd2">Co-App Employer Address Line 2</label></td>
          <td width="76%" align="left"><input id="coempadd2" name="coempadd2" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coempcity">Co-App Employer City</label></td>
          <td width="76%" align="left"><input id="coempcity" name="coempcity" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coempstate">Co-App Employer State</label></td>
          <td width="76%" align="left"><input id="coempstate" name="coempstate" maxlength="2" value="" size="2" type="text" /> 
			  <label for="coempzip">Co-App Employer Zip</label> 
            <input id="coempzip" name="coempzip" value="" size="12" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="cotitle">Title</label></td>
          <td width="76%" align="left"><input id="cotitle" name="cotitle" value="" size="12" type="text" /> 
			  <label for="costart">Co-App Start Date (MM/DD/YYYY)</label> 
            <input id="costart" name="costart" value="" size="12" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="cosuper">Co-App Supervisor's Name</label></td>
          <td width="76%" align="left"><input id="cosuper" name="cosuper" value="" size="25" type="text" /> </td></tr>
          <tr>
			  <td align="left"><label for="coselfemp">If Co-App Self Employed, Type of Business</label></td>
            <td align="left"><input id="coselfemp" name="coselfemp" value="" size="25" type="text" /></td>
          </tr>
          <tr><td colspan="2" align="left"><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coprevemp">Co-App Previous Employer Name</label></td>
          <td width="76%" align="left"><input id="coprevemp" name="coprevemp" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coprevempadd1">Co-App Previous Employer Address Line 1</label></td>
          <td width="76%" align="left"><input id="coprevempadd1" name="coprevempadd1" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coprevempadd2">Co-App Previous Employer Address Line 2</label></td>
          <td width="76%" align="left"><input id="coprevempadd2" name="coprevempadd2" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coprevempcity">Co-App Previous Employer City</label></td>
          <td width="76%" align="left"><input id="coprevempcity" name="coprevempcity" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coprevempstate">Co-App Previous Employer State</label></td>
          <td width="76%" align="left"><input id="coprevempstate" name="coprevempstate" maxlength="2" value="" size="2" type="text" /> 
			  <label for="coprevempzip"> Co-App Previous Employer Zip</label> 
            <input id="coprevempzip" name="coprevempzip" value="" size="12" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="coprevempstart">Co-App Previous Employer Start Date (MM/DD/YYYY)</label></td>
          <td width="76%" align="left"><input id="coprevempstart" name="coprevempstart" value="" size="12" type="text" /> 
			  <label for="coprevempend">Co-App Previous Employer End Date (MM/DD/YYYY)</label> 
              <input id="coprevempend" name="coprevempend" value="" size="12" type="text" /></td></tr>
          <tr><td colspan="2" align="left"><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan="2" align="left"><h3>Employment Income</h3></td></tr>
          <tr>
			  <td align="left"><label for="coincome">Amount (Net - After Taxes)</label></td>
          <td width="76%" align="left"><input id="coincome" name="coincome" maxlength="12" value="" size="12" type="text" /> 
			  <label for="cofreq">Co-App Employment Income Frequency</label> <select id="cofreq" name="cofreq" type="select-one">
          <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
            <tr><td colspan="2" align="left"><h3>Additional Income</h3></td></tr>
          <tr>
			  <td width="76%" align="left"><label for="coincometype">Additional Income Type</label></td>
          <td width="76%" align="left"><select id="coincometype" name="coincometype" type="select-one">
          <option value="">Select One</option>
                <option value="ACS">Alimony - Child Support</option>
                <option value="DIS">Disablity</option>
                <option value="EMP">Second Employment Income</option>
                <option value="SSR">Social Security - Retirement</option>
                <option value="RP">Rental Property</option>
                <option value="RP">Other</option>
              </select>
            </td></tr>
          <tr>
			  <td align="left"><label for="cootherincome">Amount</label></td>
          <td width="76%" align="left"><input id="cootherincome" name="cootherincome" maxlength="12" value="" size="12" type="text" /> 
			  <label for="cootherfreq">Co-App Additional Income Frequency</label> <select id="cootherfreq" name="cootherfreq" type="select-one">
          <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
          <tr><td colspan="2" align="left"><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
			  <td align="left"><label for="corefname">Co-App Relative Name</label></td>
            <td align="left"><input id="corefname" name="corefname" value="" size="25" type="text" />
				<label for="corelation">Relationship</label>
            <input id="corelation" name="corelation" value="" size="25" type="text" /></td>
          </tr>
          <tr>
			  <td width="76%" align="left"><label for="corefadd1">Co-App Relative Address Line 1</label></td>
          <td width="76%" align="left"><input id="corefadd1" name="corefadd1" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="corefadd2">Co-App Relative Address Line 2</label></td>
          <td width="76%" align="left"><input id="corefadd2" name="corefadd2" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="corefcity">Co-App Relative City</label></td>
          <td width="76%" align="left"><input id="corefcity" name="corefcity" value="" size="25" type="text" /></td></tr>
          <tr>
			  <td align="left"><label for="corefstate">Co-App Relative State</label></td>
          <td width="76%" align="left"><input id="corefstate" name="corefstate" maxlength="2" value="" size="2" type="text" /> 
			  
	          <label for="corefzip">Co-App Relative Zip</label> 
            <input id="corefzip" name="corefzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td colspan="2" align="left"><fieldset style="border: none;">
              <legend>Phone Number</legend>
              <label>(<input id="account113" name="corefphone1" maxlength="3" value="" size="3" type="text" />)</label>
              <label> - <input id="account114" name="corefphone2" maxlength="10" value="" size="10" type="text" /></label>
            </fieldset></td>
            </tr>
          <tr><td colspan="2" align="left"><hr /></td></tr>
          <tr><td colspan="2" align="left"><h3>References</h3></td></tr>
          <tr>
			  <td colspan="2" align="left">
				  <fieldset style="border: none;">
					  <legend><strong>First Reference</strong></legend>
					  <br>
					  <label for="refname1"><font color="#FF0000"><strong>*</strong></font>Name</label>			    <input id="refname1" name="refname1" value="" size="25" type="text" data-validate="required" />
		      <label for="refadd1a"><br>
		        <br>		        
		        Address Line 1</label>			    
		      <input id="refadd1a" name="refadd1a" value="" size="25" type="text" />
		      <label for="refadd1b"><br>
		        <br>
		        Address Line 2</label>		      
		      <input id="refadd1b" name="refadd1b" value="" size="25" type="text" />
		      <label for="refcity1a"><br>
		        <br>
		        City</label>		      
		      <input id="refcity1a" name="refcity1a" value="" size="25" type="text" />
		      <label for="refstate1a"><br>
		        <br>
		        State</label>
		      <input id="refstate1a" name="refstate1a" maxlength="2" value="" size="2" type="text" /> 
			  <label for="refzip1a">Zip</label> 
            <input id="refzip1a" name="refzip1a" value="" size="12" type="text" />
				  </fieldset></td>
            </tr>
          <tr>
            <td colspan="2" align="left"><fieldset style="border: none;">
              <legend><font color="#FF0000"><strong>*</strong></font>Phone Number</legend>
              <label>(<input id="account115" name="refphone1a" maxlength="3" value="" size="3" type="text" data-validate="required" />)</label>
              <label> - <input id="account116" name="refphone2a" maxlength="10" value="" size="10" type="text" data-validate="required" /></label>
            </fieldset></td>
            </tr>
          <tr><td colspan="2" align="left"><hr /></td></tr>
          <tr>
			  <td colspan="2" align="left">
				  <fieldset style="border: none;">
					  <legend><strong>Second Reference<br>
					  <br>
					  </strong></legend><label for="refname2">Name</label>			    <input id="refname2" name="refname2" value="" size="25" type="text" />
		      <label for="refadd2a"><br>
		        <br>
		        Address Line 1</label>			    
		      <input id="refadd2a" name="refadd2a" value="" size="25" type="text" />
		      <label for="refadd2b"><br>
		        <br>
		        Address Line 2</label>		      
		      <input id="refadd2b" name="refadd2b" value="" size="25" type="text" />
		      <br>
		      <br>
<label for="refcity2a">City</label>		      
		      <input id="refcity2a" name="refcity2a" value="" size="25" type="text" />
		      <label for="refstate2a"><br>
		        <br>
		        State</label>
		      <input id="refstate2a" name="refstate2a" maxlength="2" value="" size="2" type="text" /> 
			  <label for="refzip2a">Zip</label> 
            <input id="refzip2a" name="refzip2a" value="" size="12" type="text" />
				  </fieldset></td>
            </tr>
          <tr>
            <td colspan="2" align="left"><fieldset style="border: none;">
              <legend>Phone Number</legend>
              <label>(<input id="account117" name="refphone3a" maxlength="3" value="" size="3" type="text" />)</label>
              <label> - <input id="account118" name="refphone4a" maxlength="10" value="" size="10" type="text" /></label>
            </fieldset></td>
            </tr>
          <tr><td colspan="2" align="left"><hr /></td></tr>
          <tr>
			  <td colspan="2" align="left">
				  <fieldset style="border: none;">
				    <legend><strong>Third Reference</strong></legend>
					  <br>
					  <label for="refname3">Name</label>			    <input id="refname3" name="refname3" value="" size="25" type="text" />
		      <label for="refadd3a"><br>
		        <br>
		        Address Line 1</label>			    <input id="refadd3a" name="refadd3a" value="" size="25" type="text" />
		      <label for="refadd3b"><br>
		        <br>
		        Address Line 2</label>		      <input id="refadd3b" name="refadd3b" value="" size="25" type="text" />
		        <br>
		        <br>
<label for="refcity3a">City</label>		      <input id="refcity3a" name="refcity3a" value="" size="25" type="text" />
		      <label for="refstate3a"><br>
		        <br>
		        State</label>
		      <input id="refstate3a" name="refstate3a" maxlength="2" value="" size="2" type="text" /> 
			  <label for="refzip3a">Zip</label> 
            <input id="refzip3a" name="refzip3a" value="" size="12" type="text" />
				  </fieldset></td>
            </tr>
          <tr>
            <td colspan="2" align="left"><fieldset style="border: none;">
              <legend>Phone Number</legend>
              <label>(<input id="account119" name="refphone5a" maxlength="3" value="" size="3" type="text" />)</label>
              <label> - <input id="account120" name="refphone6a" maxlength="10" value="" size="10" type="text" /></label>
            </fieldset></td>
            </tr>
          <tr><td colspan="2" align="left"><hr /></td></tr>
          <tr>
            <td colspan="2" align="left"><table border="0" cellpadding="5" cellspacing="0" width="100%" role="presentation">
              <tr>
                <td width="71%"><strong>OTHER INFORMATION ABOUT YOU</strong><strong></strong></td>
                <td width="15%" align="center">&nbsp;</td>
                <td width="14%" align="center">&nbsp;</td>
              </tr>
              <tr>
                <td>1. ARE YOU A U.S. CITIZEN OR PERMANENT RESIDENT ALIEN?</td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Applicant Answer 1</strong></legend>
						<label><input id="account121" name="quest1" value="Yes" type="radio" data-validate="required" />
							Yes</label>
						<label><input id="account122" name="quest1" value="No" type="radio" data-validate="required" />
							No</label>
					</fieldset></td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Other Answer 1</strong></legend>
						<label><input id="account123" name="quest1a" value="Yes" type="radio" />
							Yes</label>
						<label><input id="account124" name="quest1a" value="No" type="radio" />
							No</label>
					</fieldset></td>
              </tr>
              <tr>
                <td>2. DO YOU CURRENTLY HAVE ANY OUTSTANDING JUDGMENTS OR HAVE YOU EVER FILED FOR BANKRUPTCY, HAD A DEBT ADJUSTMENT PLAN CONFIRMED UNDER CHAPTER 13, HAD PROPERTY FORECLOSED UPON OR REPOSSESSED IN THE LAST 7 YEARS, OR BEEN A PARTY IN A LAWSUIT?</td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Applicant Answer 2</strong></legend>
						<label><input id="account125" name="quest2" value="Yes" type="radio" data-validate="required" />
							Yes</label>
						<label><input id="account126" name="quest2" value="No" type="radio" data-validate="required" />
							No</label>
					</fieldset></td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Other Answer 2</strong></legend>
						<label><input id="account127" name="quest2a" value="Yes" type="radio" />
							Yes</label>
						<label><input id="account128" name="quest2a" value="No" type="radio" />
							No</label>
					</fieldset></td>
              </tr>
              <tr>
                <td>3. IS YOUR INCOME LIKELY TO DECLINE IN THE NEXT TWO YEARS?</td>
                <td align="center">
				  <fieldset style="border: none;">
						<legend><strong>Applicant Answer 3</strong></legend>
					  <label><input id="account129" name="quest3" value="Yes" type="radio" data-validate="required" />
						  Yes</label>
					  <label><input id="account130" name="quest3" value="No" type="radio" data-validate="required" />
							No</label>
					</fieldset></td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Other Answer 3</strong></legend>
						<label><input id="account131" name="quest3a" value="Yes" type="radio" />
							Yes</label>
						<label><input id="account132" name="quest3a" value="No" type="radio" />
							No</label>
					</fieldset></td>
              </tr>
              <tr>
                <td>4. ARE YOU A CO-MAKER, CO-SIGNER OR GUARANTOR ON ANY LOAN NOT LISTED ABOVE?<br>
                <br>
					<label for="quest4b">FOR WHOM (Name of other obligated on loan):</label><br>
                <input id="quest4b" name="quest4b" value="" size="40" type="text" />
                <br>
                <br>
					<label for="quest4c">TO WHOM (Name of creditor):</label><br>
                <input id="quest4c" name="quest4c" value="" size="40" type="text" /></td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Applicant Answer 4</strong></legend>
						<label><input id="account133" name="quest4" value="Yes" type="radio" data-validate="required" />
							Yes</label>
						<label><input id="account134" name="quest4" value="No" type="radio" data-validate="required" />
					  No</label>
					</fieldset></td>
                <td align="center">
					<fieldset style="border: none;">
						<legend><strong>Other Answer 4</strong></legend>
						<label><input id="account135" name="quest4a" value="Yes" type="radio" />
							Yes</label>
						<label><input id="account136" name="quest4a" value="No" type="radio" />
							No</label>
					</fieldset></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" align="left">&nbsp;</td>
          </tr>
          <tr>
			  <td colspan="2" align="left"><label for="comments">Comments:</label><br />
            <textarea name="comments" cols="50" rows="4" id="comments"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="left"><p><strong>STATE LAW NOTICES</strong></p>
              <p><strong>OHIO RESIDENTS ONLY:</strong> The Ohio laws against discrimination require that all creditors make credit equally available to all creditworthy customers, and that credit reporting agencies maintain separate credit histories on each individual upon request. The Ohio Civil Rights Commission administers compliance with this law.</p>
              <p><strong>WISCONSIN RESIDENTS ONLY:</strong> (1) No provision of any marital property agreement, unilateral statement under Section 766.59, or court decree under Section 766.70 will adversely affect the rights of the Credit Union unless the Credit Union is furnished a copy of the agreement, statement or decree, or has actual knowledge of its terms, before the credit is granted or the account is opened. (2) Please sign if you are not applying for this account or loan with your spouse. The credit being applied for, if granted, will be incurred in the interest of the marriage or family of the undersigned.</p>
              <p><strong>MILITARY LENDING ACT DISCLOSURE:</strong><br />
                <br />
              Federal law provides important protections to members of  the Armed Forces and their dependents relating to extensions of consumer  credit.&nbsp; In general, the cost of consumer credit to a member of the Armed  Forces and his or her dependent may not exceed an annual percentage rate of 36  percent.&nbsp; This rate must include, as applicable to the credit transactions  or account:&nbsp; The costs associated with credit insurance premiums; fees for  ancillary products sold in connection with the credit transaction; any  application fee charged (other than certain application fees for specified  credit transactions or accounts); and any participation fee charged (other than  certain participation fees for a credit card account).&nbsp; To listen to the  Military Lending Act Disclosure Policy, please call (toll-free) #1-800-211-9064.</p>
				<p><label for="agree1">I agree to the above statements.</label> <input name="agree1" type="checkbox" id="agree1" value="I agree."></p></td></tr>
            <tr>
            <td colspan="2" align="left"><p><strong>SIGNATURES</strong></p>
              <p>You promise that everything you have stated in this application is correct to the best of your knowledge and that the above information is a complete listing of what you owe. If there are any important changes you will notify us in writing immediately. You authorize the Credit Union to obtain credit reports in connection with this application for credit and for any update, increase, renewal, extension or collection of the credit received. You understand that the Credit Union will rely on the information in this application and your credit report to make its decision. If you request, the Credit Union will tell you the name and address of any credit bureau from which it received a credit report on you. It is a federal crime to willfully and deliberately provide incomplete or incorrect information on loan applications made to federal credit unions or state chartered credit unions insured by NCUA.</p>
				<p><label for="agree2">I agree to the above statement.</label> <input name="agree2" type="checkbox" id="agree2" value="I agree." data-validate="required"></p></td></tr>
            <tr>
            <td colspan="2" align="center"><input name="Submit" type="submit" id="Submit" value="Submit" /></td></tr>
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
