
<?php
session_start();
if (isset($_SESSION['loggedin'])){
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log Page</title>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
<link href="newStylesheet.css" rel="stylesheet" type="text/css">
</head>


<body>
	<div id="page_translation" style="background-color: #DAD7D7;"></div>
<div id="header">
	<strong><a id="logbtn" href="HelpdeskLogPage.php" style="float: left">Back</a>
	<a>Call Log</a> <br></strong>
	<img src="MiA-logo.png" style="width:250px;height:70px;display: inline-block;" alt="companylogo">
	</div>
	<div id="main">
		<form action=placeholder.php>
			<input id="logbtn" type="submit" value="Update" style="float: right;">
		
	  <table width="200" border="1" cellpadding="5">
  <tbody>
    <tr>
      <th scope="col"></th>
      <th scope="col" colspan="3" class="tblclr2" id="tblclr2">Caller</th>
      <th scope="col" colspan="3" class="tblclr2">PROBLEM</th>
      <th scope="col" class="tblclr21">SPECIALISTS</th>
		<th scope="col" colspan="2" class="tblclr21">PROBLEM STATUS</th>
      
    </tr>
    <tr>
      <td></td>
      <td>ID</td>
      <td>Name</td>
      <td>Date</td>
      <td>Number</td>
      <td>Type</td>
		<td>Importance</td>
		<td>Name</td>
		<td>Rectified?</td>
		<td>Resolved By</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>TEXT FROM SQL</td>
      <td>TEXT FROM SQL</td>
      <td>TEXT FROM SQL</td>
      <td>TEXT FROM SQL</td>
      <td>TEXT FROM SQL</td>
		<td>TEXT FROM SQL</td>
		<td>TEXT FROM SQL</td>
		<td><input type="checkbox" onClick="placeholder.php"></input></td>
			<td><input type="text"></input></td>
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
	header("Location: Untitled.html");
}
?>