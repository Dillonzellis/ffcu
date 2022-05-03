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
          <table width="100%" border="0" cellpadding="4" cellspacing="0" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#000000;">
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
            <p><strong>Account/Loan:</strong>
              <input name="type" type="radio" value="Individual" data-validate="required">
            Individual 
            <input name="type" type="radio" value="Joint" data-validate="required">
            Joint<br>
            </p>
            <p><font color="#FF0000"><strong>*</strong></font>Amount Requested $
              <input id="account47" name="amount" value="" size="25" type="text" data-validate="required; number" />
            </p>
            <p><font color="#FF0000"><strong>*</strong></font>Loan Type:
              <input id="account48" name="purpose" value="" size="25" type="text" data-validate="required" />
            </p>
            <p><strong>Repayment:</strong>
<input name="repayment" type="radio" value="Payroll Deduction" data-validate="required">
              Payroll Deduction 
              <input name="repayment" type="radio" value="Cash" data-validate="required">
              Cash 
               
              <input name="repayment" type="radio" value="Automatic Payment" data-validate="required">
              Automatic Payment
              <input name="repayment" type="radio" value="Military Allotment" data-validate="required">
              Military Allotment
            </p>
            </td></tr>
            <tr><td colspan="2">
            <p><strong>PAYMENT PROTECTION</strong></p>
            <p> Are you interested in having your loan protected by credit life and disability insurance? 
              <input name="protection" type="radio" value="Yes" data-validate="required">
              Yes 
              <input name="protection" type="radio" value="No" data-validate="required">
              No</p>
            <p>If you answer "yes", the credit union will disclose the cost to protect your loan. The protection is voluntary and does not affect your loan approval. In order for your loan to be covered, you will need to sign a separate application that explains the terms and conditions.</p>
            </td></tr>
          <tr><td colspan="2"><p><strong>APPLICANT</strong></p></td></tr>
          <tr><td colspan="2">
            <p><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></p>
            <p>
              <input name="status" type="radio" value="Married">
              Married
              <input name="status" type="radio" value="Separated">
              Separated 
              <input name="status" type="radio" value="Unmarried"> 
              Unmarried (Single - Divorced - Widowed)
</p></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>First Name</td>
          <td width="73%"><span class="contenttext">
            <input id="fname" name="fname" value="" size="25" type="text" data-validate="required; alphabetic" />
            Middle Initial
              <input name="mname" type="text" id="mname" value="" size="5" maxlength="2" />
            <font color="#FF0000"><strong>*</strong></font>Last Name
            <input id="lname" name="lname" value="" size="25" type="text" data-validate="required; alphabetic" />
          </span></td>
          </tr>
          <tr>
            <td align="right" class="contenttext"><font color="#FF0000"><strong>*</strong></font>Member/Account Number</td>
          <td width="73%"><span class="contenttext">
            <input id="account" name="account" value="" size="25" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr>
            <td align="right"><span class="contenttext"><font color="#FF0000"><strong>*</strong></font>Social Security Number</span></td>
          <td width="73%"><span class="contenttext">
            <input id="ssn" name="ssn" value="" size="25" type="text" data-validate="required" />
            Driver's License Number 
            <input id="dlnum" name="dlnum" value="" size="20" type="text" />
            State 
            <input name="dlstate" type="text" id="dlstate" value="" size="2" maxlength="2" />
          </span></td>
          </tr>
          <tr>
            <td align="right"><span class="contenttext"> <font color="#FF0000"><strong>*</strong></font>Email Address</span></td>
          <td width="73%"><span class="contenttext">
            <input id="email" name="email" value="" size="25" type="text" data-validate="email; required" />
            <font color="#FF0000"><strong>*</strong></font>Date of Birth (MM/DD/YYYY)
              <input id="dob" name="dob" value="" size="10" type="text" data-validate="required" />
          </span></td>
          </tr>
          <tr>
            <td align="right"><span class="contenttext"><font color="#FF0000"><strong>*</strong></font>Home Phone</span></td>
          <td width="73%"><span class="contenttext"> (
<input id="hphone2" name="hphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />
)
<input id="account21" name="hphone2" maxlength="10" value="" size="10" type="text" data-validate="required" />
Business Phone (
            <input id="hphone3" name="bphone1" maxlength="3" value="" size="3" type="text" />
)
<input id="account22" name="bphone2" maxlength="10" value="" size="10" type="text" />
          </span></td>
          </tr>
          <tr><td colspan="2"><h3>Present Home Address</h3></td></tr>
          <tr>
            <td width="27%" align="right"><font color="#FF0000"><strong>*</strong></font>Address Line 1</td>
          <td width="73%"><input id="add1" name="add1" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="add2" name="add2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>City</td>
          <td width="73%"><input id="city" name="city" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>State</td>
          <td width="73%"><input name="state" type="text" id="state" value="" size="2" maxlength="2" data-validate="required" /> 
            <font color="#FF0000"><strong>*</strong></font>Zip
<input id="zip" name="zip" value="" size="12" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Own or Rent</td>
          <td width="73%"><input id="account" name="ownrent" value="Own" type="radio" data-validate="required" />
          Own 
            <input id="account4" name="ownrent" value="Rent" type="radio" data-validate="required" /> 
            Rent</td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Length There</td>
          <td width="73%"><input id="years" name="years" maxlength="12" value="" size="12" type="text" data-validate="required" /></td></tr>
          <tr><td colspan="2"><h3>Previous Home Address</h3></td></tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="prevadd1" name="prevadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="prevadd2" name="prevadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="prevcity" name="prevcity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input name="prevstate" type="text" id="prevstate" value="" size="2" maxlength="2" />
            Zip
<input id="prevzip" name="prevzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Own or Rent</td>
          <td width="73%"><input id="account" name="prevownrent" value="Own" type="radio" />
          Own 
            <input id="account4" name="prevownrent" value="Rent" type="radio" /> 
            Rent</td></tr>
          <tr>
            <td align="right">Length There</td>
          <td width="73%"><input id="prevyears" name="prevyears" maxlength="12" value="" size="12" type="text" /></td></tr>
          
          <tr><td colspan="2"><h3>Employment Information</h3></td></tr>
          <tr>
            <td width="27%" align="right"><font color="#FF0000"><strong>*</strong></font>Employer Name</td>
          <td width="73%"><input id="employer" name="employer" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
            <td width="27%" align="right"><font color="#FF0000"><strong>*</strong></font>Address Line 1</td>
          <td width="73%"><input id="empadd1" name="empadd1" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="empadd2" name="empadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>City</td>
          <td width="73%"><input id="empcity" name="empcity" value="" size="25" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>State</td>
          <td width="73%"><input id="empstate" name="empstate" maxlength="2" value="" size="2" type="text" data-validate="required" /> 
          <font color="#FF0000"><strong>*</strong></font>Zip 
            <input id="empzip" name="empzip" value="" size="12" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Title</td>
          <td width="73%"><input id="title" name="title" value="" size="12" type="text" data-validate="required" /> 
            <font color="#FF0000"><strong>*</strong></font>Start Date (MM/DD/YYYY) 
            <input id="start" name="start" value="" size="12" type="text" data-validate="required" /> 
            <font color="#FF0000"><strong>*</strong></font>Hours at Work 
            <input id="hours" name="hours" value="" size="12" type="text" data-validate="required" /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Supervisor's Name</td>
          <td width="73%"><input id="super" name="super" value="" size="25" type="text" data-validate="required" /> </td></tr>
          <tr>
            <td align="right">If Self Employed, Type of Business</td>
            <td><input id="account10" name="selfemp" value="" size="25" type="text" /></td>
          </tr>
          <tr><td colspan="2"><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
            <td width="27%" align="right">Employer Name</td>
          <td width="73%"><input id="prevemp" name="prevemp" value="" size="25" type="text" /></td></tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="prevempadd1" name="prevempadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="prevempadd2" name="prevempadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="prevempcity" name="prevempcity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="prevempstate" name="prevempstate" maxlength="2" value="" size="2" type="text" /> 
          Zip 
            <input id="prevempzip" name="prevempzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Start Date (MM/DD/YYYY)</td>
          <td width="73%"><input id="prevstart" name="prevstart" value="" size="12" type="text" /> 
            End Date (MM/DD/YYYY) 
              <input id="prevend" name="prevend" value="" size="12" type="text" /></td></tr>
          <tr><td colspan="2"><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan="2"><h3>Employment Income</h3></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Amount (Net - After Taxes)</td>
          <td width="73%"><input id="income" name="income" maxlength="12" value="" size="12" type="text" data-validate="required" /> 
          <font color="#FF0000"><strong>*</strong></font>Frequency <select id="freq" name="freq" type="select-one" data-validate="required">
                <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
            <tr><td colspan="2"><h3>Additional Income</h3></td></tr>
          <tr>
            <td width="27%" align="right">Additional Income Type</td>
          <td width="73%"><select id="incometype" name="incometype" type="select-one">
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
            <td align="right"> Amount</td>
          <td width="73%"><input id="otherincome" name="otherincome" maxlength="12" value="" size="12" type="text" /> 
          Frequency <select id="otherfreq" name="otherfreq" type="select-one">
          <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
          <tr><td colspan="2"><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Name</td>
            <td><input id="refname4" name="refname" value="" size="25" type="text" data-validate="required" />
            <font color="#FF0000"><strong>*</strong></font>Relationship
            <input id="account113" name="relation" value="" size="25" type="text" data-validate="required" /></td>
          </tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="refadd1" name="refadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="refadd2" name="refadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="refcity" name="refcity" value="" size="25" type="text"/></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="refstate" name="refstate" maxlength="2" value="" size="2" type="text"  />
            Zip 
            <input id="refzip" name="refzip" value="" size="12" type="text"  /></td></tr>
          <tr>
            <td align="right"><font color="#FF0000"><strong>*</strong></font>Phone Number</td>
            <td>(
              <input id="account111" name="refphone1" maxlength="3" value="" size="3" type="text" data-validate="required" />
              )
            <input id="account112" name="refphone2" maxlength="10" value="" size="10" type="text" data-validate="required" /></td>
          </tr>
          <tr><td colspan="2"><hr /></td></tr>
          <tr>
            <td colspan="2"><p><strong>CO-APPLICANT</strong></p></td></tr>
            <tr><td colspan="2">
            <p><strong>COMPLETE FOR JOINT CREDIT, SECURED CREDIT OR IF YOU LIVE IN A COMMUNITY PROPERTY STATE.</strong></p>
            <p>
              <input name="costatus" type="radio" value="Married">
              Married
              <input name="costatus" type="radio" value="Separated">
              Separated 
              <input name="costatus" type="radio" value="Unmarried"> 
              Unmarried (Single - Divorced - Widowed)
</p></td></tr>
          <tr>
            <td align="right">First Name</td>
          <td width="73%"><input id="cofname" name="cofname" value="" size="25" type="text" />
          Middle Initial
              <input id="comname" name="comname" value="" size="5" type="text" />
              Last Name
          <input id="colname" name="colname" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Member/Account Number</td>
          <td width="73%"><input id="coaccount" name="coaccount" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Social Security Number</td>
          <td width="73%"><input id="cossn" name="cossn" value="" size="25" type="text" /> 
            Driver's License Number 
            <input id="codlnum" name="codlnum" value="" size="25" type="text" /> 
            State 
            <input id="codlstate" name="codlstate" value="" size="5" type="text" /></td></tr>
          <tr>
            <td align="right">Email Address</td>
          <td width="73%"><input id="coemail" name="coemail" value="" size="25" type="text" /> 
            Date of Birth (MM/DD/YYYY)
              <input id="codob" name="codob" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Home Phone</td>
          <td width="73%"> (
<input id="hphone2" name="cohphone1" maxlength="3" value="" size="3" type="text" />
)
<input id="account21" name="cohphone2" maxlength="10" value="" size="10" type="text" />
Business Phone (
            <input id="hphone3" name="cobphone1" maxlength="3" value="" size="3" type="text" />
)
<input id="account22" name="cobphone2" maxlength="10" value="" size="10" type="text" /></td></tr>
          <tr><td colspan="2"><h3>Present Home Address</h3></td></tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="coadd1" name="coadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="coadd2" name="coadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="cocity" name="cocity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="costate" name="costate" value="" size="2" type="text" />
          Zip
            <input id="cozip" name="cozip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Own or Rent</td>
          <td width="73%"><input id="account" name="coownrent" value="Own" type="radio" />
          Own 
            <input id="account4" name="coownrent" value="Rent" type="radio" /> 
            Rent</td></tr>
          <tr>
            <td align="right">Length There</td>
          <td width="73%"><input id="coyears" name="coyears" maxlength="12" value="" size="12" type="text" /></td></tr>
          
          <tr><td colspan="2"><h3>Employment Information</h3></td></tr>
          <tr>
            <td width="27%" align="right">Employer Name</td>
          <td width="73%"><input id="coemployer" name="coemployer" value="" size="25" type="text" /></td></tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="coempadd1" name="coempadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="coempadd2" name="coempadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="coempcity" name="coempcity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="coempstate" name="coempstate" maxlength="2" value="" size="2" type="text" /> 
          Zip 
            <input id="coempzip" name="coempzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Title</td>
          <td width="73%"><input id="cotitle" name="cotitle" value="" size="12" type="text" /> 
            Start Date (MM/DD/YYYY) 
            <input id="costart" name="costart" value="" size="12" type="text" /> 
            Hours at Work 
            <input id="cohours" name="cohours" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Supervisor's Name</td>
          <td width="73%"><input id="cosuper" name="cosuper" value="" size="25" type="text" /> </td></tr>
          <tr>
            <td align="right">If Self Employed, Type of Business</td>
            <td><input id="account10" name="coselfemp" value="" size="25" type="text" /></td>
          </tr>
          <tr><td colspan="2"><h3>Previous Employment Information - (If less than 2 years on current job)</h3></td></tr>
          <tr>
            <td width="27%" align="right">Employer Name</td>
          <td width="73%"><input id="coprevemp" name="coprevemp" value="" size="25" type="text" /></td></tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="coprevempadd1" name="coprevempadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="coprevempadd2" name="coprevempadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="coprevempcity" name="coprevempcity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="coprevempstate" name="coprevempstate" maxlength="2" value="" size="2" type="text" /> 
          Zip 
            <input id="coprevempzip" name="coprevempzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Start Date (MM/DD/YYYY)</td>
          <td width="73%"><input id="coprevempstart" name="coprevempstart" value="" size="12" type="text" /> 
            End Date (MM/DD/YYYY) 
              <input id="coprevempend" name="coprevempend" value="" size="12" type="text" /></td></tr>
          <tr><td colspan="2"><p><strong>NOTICE:</strong> ALIMONY, CHILD SUPPORT, OR SEPARATE MAINTENANCE INCOME NEED NOT BE REVEALED IF YOU DO NOT CHOOSE TO HAVE IT CONSIDERED.</p></td></tr>
          <tr><td colspan="2"><h3>Employment Income</h3></td></tr>
          <tr>
            <td align="right"> Amount (Net - After Taxes)</td>
          <td width="73%"><input id="coincome" name="coincome" maxlength="12" value="" size="12" type="text" /> 
          Frequency <select id="cofreq" name="cofreq" type="select-one">
          <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
            <tr><td colspan="2"><h3>Additional Income</h3></td></tr>
          <tr>
            <td width="27%" align="right">Additional Income Type</td>
          <td width="73%"><select id="coincometype" name="coincometype" type="select-one">
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
            <td align="right">Amount</td>
          <td width="73%"><input id="cootherincome" name="cootherincome" maxlength="12" value="" size="12" type="text" /> 
          Frequency <select id="cootherfreq" name="cootherfreq" type="select-one">
          <option value="">Select One</option>
                <option value="Monthly">Monthly</option>
                <option value="Semi-Monthly">Semi-Monthly</option>
                <option value="Weekly">Weekly</option>
                <option value="Bi-Weekly">Bi-Weekly</option>
            </select></td></tr>
          <tr><td colspan="2"><h3>Name &amp; Address of Nearest Relative Not Living With You</h3></td></tr>
          <tr>
            <td align="right">Name</td>
            <td><input id="refname4" name="corefname" value="" size="25" type="text" />
            Relationship
            <input id="account113" name="corelation" value="" size="25" type="text" /></td>
          </tr>
          <tr>
            <td width="27%" align="right">Address Line 1</td>
          <td width="73%"><input id="corefadd1" name="corefadd1" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">Address Line 2</td>
          <td width="73%"><input id="corefadd2" name="corefadd2" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">City</td>
          <td width="73%"><input id="corefcity" name="corefcity" value="" size="25" type="text" /></td></tr>
          <tr>
            <td align="right">State</td>
          <td width="73%"><input id="corefstate" name="corefstate" maxlength="2" value="" size="2" type="text" /> 
          Zip 
            <input id="corefzip" name="corefzip" value="" size="12" type="text" /></td></tr>
          <tr>
            <td align="right">Phone Number</td>
            <td>(
              <input id="account111" name="corefphone1" maxlength="3" value="" size="3" type="text" />
              )
            <input id="account112" name="corefphone2" maxlength="10" value="" size="10" type="text" /></td>
          </tr>
          <tr><td colspan="2"><hr /></td></tr>
          
          <tr>
            <td colspan="2">
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
            <tr><td width="19%" align="center"><strong>What You Owe</strong></td>
            <td width="26%" align="center"><strong>Creditor Name Other Than<br />
              This Credit Union</strong></td>
            <td width="10%" align="center"><strong>Interest Rate</strong></td>
            <td width="11%" align="center"><strong>Present Balance</strong></td>
            <td width="11%" align="center"><strong>Monthly Payment</strong></td>
            <td width="23%" align="center"><strong>Owed By</strong></td></tr>
            <tr>
              <td><input id="account2" name="owe1" value="" size="25" type="text" /></td>
              <td><input id="creditor1" name="creditor1" value="" size="30" type="text" /></td>
              <td><input id="rate1" name="rate1" value="" size="10" type="text" /></td>
              <td>$
                <input id="balance1" name="balance1" value="" size="5" type="text" /></td>
              <td>$
                <input id="pay1" name="pay1" value="" size="5" type="text" /></td>
              <td align="center"><input id="account3" name="owedby1" value="Applicant" type="radio" />
                Applicant
                <input id="account5" name="owedby1" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account6" name="owe2" value="" size="25" type="text" /></td>
              <td><input id="creditor2" name="creditor2" value="" size="30" type="text" /></td>
              <td><input id="financial9" name="rate2" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial10" name="balance2" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial11" name="pay2" value="" size="5" type="text" /></td>
              <td align="center"><input id="account7" name="owedby2" value="Applicant" type="radio" />
                Applicant
                <input id="account8" name="owedby2" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="owe3" name="owe3" value="" size="25" type="text" /></td>
              <td><input id="financial12" name="creditor3" value="" size="30" type="text" /></td>
              <td><input id="financial13" name="rate3" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial14" name="balance3" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial15" name="pay3" value="" size="5" type="text" /></td>
              <td align="center"><input id="account11" name="owedby3" value="Applicant" type="radio" />
                Applicant
                <input id="account12" name="owedby3" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account13" name="owe4" value="" size="25" type="text" /></td>
              <td><input id="financial16" name="creditor4" value="" size="30" type="text" /></td>
              <td><input id="financial17" name="rate4" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial18" name="balance4" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial19" name="pay4" value="" size="5" type="text" /></td>
              <td align="center"><input id="account14" name="owedby4" value="Applicant" type="radio" />
                Applicant
                <input id="account15" name="owedby4" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account16" name="owe5" value="" size="25" type="text" /></td>
              <td><input id="financial20" name="creditor5" value="" size="30" type="text" /></td>
              <td><input id="financial21" name="rate5" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial22" name="balance5" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial23" name="pay5" value="" size="5" type="text" /></td>
              <td align="center"><input id="account17" name="owedby5" value="Applicant" type="radio" />
                Applicant
                <input id="account18" name="owedby5" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account19" name="owe6" value="" size="25" type="text" /></td>
              <td><input id="financial24" name="creditor6" value="" size="30" type="text" /></td>
              <td><input id="financial25" name="rate6" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial26" name="balance6" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial27" name="pay6" value="" size="5" type="text" /></td>
              <td align="center"><input id="account20" name="owedby6" value="Applicant" type="radio" />
                Applicant
                <input id="account23" name="owedby6" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account24" name="owe7" value="" size="25" type="text" /></td>
              <td><input id="financial28" name="creditor7" value="" size="30" type="text" /></td>
              <td><input id="financial29" name="rate7" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial30" name="balance7" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial31" name="pay7" value="" size="5" type="text" /></td>
              <td align="center"><input id="account25" name="owedby7" value="Applicant" type="radio" />
                Applicant
                <input id="account26" name="owedby7" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account27" name="owe8" value="" size="25" type="text" /></td>
              <td><input id="financial32" name="creditor8" value="" size="30" type="text" /></td>
              <td><input id="financial33" name="rate8" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial34" name="balance8" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial35" name="pay8" value="" size="5" type="text" /></td>
              <td align="center"><input id="account28" name="owedby8" value="Applicant" type="radio" />
                Applicant
                <input id="account29" name="owedby8" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td><input id="account30" name="owe9" value="" size="25" type="text" /></td>
              <td><input id="financial36" name="creditor9" value="" size="30" type="text" /></td>
              <td><input id="financial37" name="rate9" value="" size="10" type="text" /></td>
              <td>$
                <input id="financial38" name="balance9" value="" size="5" type="text" /></td>
              <td>$
                <input id="financial39" name="pay9" value="" size="5" type="text" /></td>
              <td align="center"><input id="account31" name="owedby9" value="Applicant" type="radio" />
                Applicant
                <input id="account32" name="owedby9" value="Other" type="radio" />
                Other </td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              <td><strong>Totals</strong></td>
              <td>$
                <input id="total1" name="total1" value="" size="5" type="text" /></td>
              <td>$
                <input id="total2" name="total2" value="" size="5" type="text" /></td>
              <td>&nbsp;</td>
            </tr>
            </table>
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><table border="0" cellpadding="5" cellspacing="0" width="100%">
              <tr>
                <td width="19%" align="center"><strong>What You Own</strong></td>
                <td width="32%" align="center"><strong>List Location Of Property Or Financial Institution</strong></td>
                <td width="11%" align="center"><strong>Market Value</strong></td>
                <td width="16%" align="center"><strong>Pledged As Collateral<br>
                  For Another Loan
                </strong></td>
                <td width="22%" align="center"><strong>Owned By</strong></td>
              </tr>
              <tr>
                <td><input id="account33" name="own1" value="" size="25" type="text" /></td>
                <td><input id="location1" name="location1" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial41" name="market1" value="" size="5" type="text" /></td>
                <td align="center"><input id="account64" name="pledged1" value="Yes" type="radio" />
                  Yes
                  <input id="account65" name="pledged1" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account3" name="ownedby1" value="Applicant" type="radio" />
                  Applicant
                  <input id="account5" name="ownedby1" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account36" name="own2" value="" size="25" type="text" /></td>
                <td><input id="financial40" name="location2" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial45" name="market2" value="" size="5" type="text" /></td>
                <td align="center"><input id="account66" name="pledged2" value="Yes" type="radio" />
                  Yes
                  <input id="account67" name="pledged2" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account7" name="ownedby2" value="Applicant" type="radio" />
                  Applicant
                  <input id="account8" name="ownedby2" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account39" name="own3" value="" size="25" type="text" /></td>
                <td><input id="financial42" name="location3" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial49" name="market3" value="" size="5" type="text" /></td>
                <td align="center"><input id="account68" name="pledged3" value="Yes" type="radio" />
                  Yes
                  <input id="account69" name="pledged3" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account11" name="ownedby3" value="Applicant" type="radio" />
                  Applicant
                  <input id="account12" name="ownedby3" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account42" name="own4" value="" size="25" type="text" /></td>
                <td><input id="financial43" name="location4" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial53" name="market4" value="" size="5" type="text" /></td>
                <td align="center"><input id="account70" name="pledged4" value="Yes" type="radio" />
                  Yes
                  <input id="account71" name="pledged4" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account14" name="ownedby4" value="Applicant" type="radio" />
                  Applicant
                  <input id="account15" name="ownedby4" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account45" name="own5" value="" size="25" type="text" /></td>
                <td><input id="financial44" name="location5" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial57" name="market5" value="" size="5" type="text" /></td>
                <td align="center"><input id="account72" name="pledged5" value="Yes" type="radio" />
                  Yes
                  <input id="account73" name="pledged5" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account17" name="ownedby5" value="Applicant" type="radio" />
                  Applicant
                  <input id="account18" name="ownedby5" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account52" name="own6" value="" size="25" type="text" /></td>
                <td><input id="financial46" name="location6" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial61" name="market6" value="" size="5" type="text" /></td>
                <td align="center"><input id="account74" name="pledged6" value="Yes" type="radio" />
                  Yes
                  <input id="account75" name="pledged6" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account20" name="ownedby6" value="Applicant" type="radio" />
                  Applicant
                  <input id="account23" name="ownedby6" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account55" name="own7" value="" size="25" type="text" /></td>
                <td><input id="financial47" name="location7" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial65" name="market7" value="" size="5" type="text" /></td>
                <td align="center"><input id="account76" name="pledged7" value="Yes" type="radio" />
                  Yes
                  <input id="account77" name="pledged7" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account25" name="ownedby7" value="Applicant" type="radio" />
                  Applicant
                  <input id="account26" name="ownedby7" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account58" name="own8" value="" size="25" type="text" /></td>
                <td><input id="financial48" name="location8" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial69" name="market8" value="" size="5" type="text" /></td>
                <td align="center"><input id="account78" name="pledged8" value="Yes" type="radio" />
                  Yes
                  <input id="account79" name="pledged8" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account28" name="ownedby8" value="Applicant" type="radio" />
                  Applicant
                  <input id="account29" name="ownedby8" value="Other" type="radio" />
                Other </td>
              </tr>
              <tr>
                <td><input id="account61" name="own9" value="" size="25" type="text" /></td>
                <td><input id="financial50" name="location9" value="" size="40" type="text" /></td>
                <td>$
                  <input id="financial73" name="market9" value="" size="5" type="text" /></td>
                <td align="center"><input id="account80" name="pledged9" value="Yes" type="radio" />
                  Yes
                  <input id="account81" name="pledged9" value="No" type="radio" />
                No </td>
                <td align="center"><input id="account31" name="ownedby9" value="Applicant" type="radio" />
                  Applicant
                  <input id="account32" name="ownedby9" value="Other" type="radio" />
                Other </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><table border="0" cellpadding="5" cellspacing="0" width="100%">
              <tr>
                <td width="71%"><strong>OTHER INFORMATION ABOUT YOU</strong><strong></strong></td>
                <td width="15%" align="center"><strong>Applicant</strong></td>
                <td width="14%" align="center"><strong>Other</strong></td>
              </tr>
              <tr>
                <td>1. ARE YOU A U.S. CITIZEN OR PERMANENT RESIDENT ALIEN?</td>
                <td align="center"><input id="account83" name="quest1" value="Yes" type="radio" data-validate="required" />
                  Yes
                  <input id="account84" name="quest1" value="No" type="radio" data-validate="required" />
                  No </td>
                <td align="center"><input id="account85" name="quest1a" value="Yes" type="radio" />
Yes
  <input id="account86" name="quest1a" value="No" type="radio" />
No </td>
              </tr>
              <tr>
                <td>2. DO YOU CURRENTLY HAVE ANY OUTSTANDING JUDGMENTS OR HAVE YOU EVER FILED FOR BANKRUPTCY, HAD A DEBT ADJUSTMENT PLAN CONFIRMED UNDER CHAPTER 13, HAD PROPERTY FORECLOSED UPON OR REPOSSESSED IN THE LAST 7 YEARS, OR BEEN A PARTY IN A LAWSUIT?</td>
                <td align="center"><input id="account88" name="quest2" value="Yes" type="radio" data-validate="required" />
                  Yes
                  <input id="account89" name="quest2" value="No" type="radio" data-validate="required" />
                  No </td>
                <td align="center"><input id="account90" name="quest2a" value="Yes" type="radio" />
Yes
  <input id="account91" name="quest2a" value="No" type="radio" />
No </td>
              </tr>
              <tr>
                <td>3. IS YOUR INCOME LIKELY TO DECLINE IN THE NEXT TWO YEARS?</td>
                <td align="center"><input id="account93" name="quest3" value="Yes" type="radio" data-validate="required" />
                  Yes
                  <input id="account94" name="quest3" value="No" type="radio" data-validate="required" />
                  No </td>
                <td align="center"><input id="account95" name="quest3a" value="Yes" type="radio" />
Yes
  <input id="account96" name="quest3a" value="No" type="radio" />
No </td>
              </tr>
              <tr>
                <td>4. ARE YOU A CO-MAKER, CO-SIGNER OR GUARANTOR ON ANY LOAN NOT LISTED ABOVE?<br>
                <br>
                FOR WHOM (Name of other obligated on loan):<br>
                <input id="financial51" name="quest4b" value="" size="40" type="text" />
                <br>
                <br>
                TO WHOM (Name of creditor):<br>
                <input id="financial52" name="quest4c" value="" size="40" type="text" /></td>
                <td align="center"><input id="account98" name="quest4" value="Yes" type="radio" data-validate="required" />
                  Yes
                  <input id="account99" name="quest4" value="No" type="radio" data-validate="required" />
                  No </td>
                <td align="center"><input id="account100" name="quest4a" value="Yes" type="radio" />
Yes
  <input id="account101" name="quest4a" value="No" type="radio" />
No </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><p><strong>STATE LAW NOTICES</strong></p>
              <p><strong>OHIO RESIDENTS ONLY:</strong> The Ohio laws against discrimination require that all creditors make credit equally available to all creditworthy customers, and that credit reporting agencies maintain separate credit histories on each individual upon request. The Ohio Civil Rights Commission administers compliance with this law.</p>
              <p><strong>WISCONSIN RESIDENTS ONLY:</strong> (1) No provision of any marital property agreement, unilateral statement under Section 766.59, or court decree under Section 766.70 will adversely affect the rights of the Credit Union unless the Credit Union is furnished a copy of the agreement, statement or decree, or has actual knowledge of its terms, before the credit is granted or the account is opened. (2) Please sign if you are not applying for this account or loan with your spouse. The credit being applied for, if granted, will be incurred in the interest of the marriage or family of the undersigned.</p>
              <p><input name="agree1" type="checkbox" id="agree1" value="I agree."> I agree to the above statement.</p></td></tr>
            <tr>
            <td colspan="2"><p><strong>SIGNATURES</strong></p>
              <p>You promise that everything you have stated in this application is correct to the best of your knowledge and that the above information is a complete listing of what you owe. If there are any important changes you will notify us in writing immediately. You authorize the Credit Union to obtain credit reports in connection with this application for credit and for any update, increase, renewal, extension or collection of the credit received. You understand that the Credit Union will rely on the information in this application and your credit report to make its decision. If you request, the Credit Union will tell you the name and address of any credit bureau from which it received a credit report on you. It is a federal crime to willfully and deliberately provide incomplete or incorrect information on loan applications made to federal credit unions or state chartered credit unions insured by NCUA.</p>
              <p><input name="agree2" type="checkbox" id="agree2" value="I agree." data-validate="required"> I agree to the above statement.</p></td></tr>
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
