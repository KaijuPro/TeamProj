<?php
session_start();
if (isset($_SESSION['loggedin'])){
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Specialists</title>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
<link href="newStylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="page_translation" style="background-color: #DAD7D7;"></div>
<div id="header">
	<strong><a id="logbtn" href="HelpdeskLogPage.php" style="float: left">Back</a>
	<a>Specialists</a> <br></strong>
	<img src="MiA-logo.png" style="width:250px;height:70px;display: inline-block;" alt="companylogo">
	</div>
	<div id="main">
		<form action=placeholder.php>
<!--			<input id="logbtn" type="submit" value="Update" style="float: right;">-->
		
	  <table width="200" border="1" cellpadding="5">
  <tbody>
    <tr>
      <th scope="col" colspan="4" class="tblclr2" id="tblclr2" style="text-align: center">Specialists</th>
      
    </tr>
    <tr>
      
      <th>Name</th>
      <th>Availability</th>
      <th>Speciality</th>
		<th>Problem Assigned</th>
    </tr>
    <tr>
      <td>TEXT FROM SQL</td>
      <td>TEXT FROM SQL</td>
		<td>TEXT FROM SQL</td>
		<td>TEXT FROM SQL</td>
    </tr>
		</table>
	</form>
	
</div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'page_translation');
}
</script>
</body>
</html>
<?php
}
else {
	header("Location: MiALoginPage.html");
}
?>
