<html lang="en">
<head>
<title>Loan Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
$id=$_POST['id'];
$con = mysql_connect("sql5c38b.carrierzone.com","ffcugaorg4843545","f@milyDB1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("phpmy1_ffcuga_org", $con);

mysql_query("DELETE FROM loanapp WHERE id='$id'");

echo '<font face="arial" size="2">The application has been deleted!</font>';
echo '<br>';
echo '<font face="arial" size="2">Click <a href="loan.php">here</a> to go back.</font>';

mysql_close($con);

?>
</body>
</html>
