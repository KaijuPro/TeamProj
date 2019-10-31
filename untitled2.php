<?php
session_start();
if (isset($_SESSION['loggedin'])){
?>
<html>
<head>
<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="base64.js"></script>
-->
<script>
	    function WriteToFile() {
     
        set fso = CreateObject("Scripting.FileSystemObject"); 
        set s   = fso.CreateTextFile("/Users/aldrichfernandes/Desktop/All/HTMLnCSS/C0323 Assessment 1 - Aldrich Fernandes, arf21/logHelpdesk.txt", True);
     
        var ID = document.getElementById('identification');
        var Name  = document.getElementById('name');
		var Date  = document.getElementById('date');
		var Number  = document.getElementById('number');
		var Type  = document.getElementById('type');
		var Importance  = document.getElementById('importance');
		var Specialist  = document.getElementById('SpecName');	
			
//			        var data = ID.value + : + Name.value + : + Date.value + : + Number.value + : + Type.value + : + Importance.value + : + Specialist.value;
//        
//        var textToBLOB = new Blob([data], { type: 'text/plain' });
//        var sFileName = 'logHelpdesk.txt';   // The file name.
// 
//        var newLink = document.createElement("a");
//        newLink.download = sFileName;
// 
//        if (window.webkitURL != null) {
//            newLink.href = window.webkitURL.createObjectURL(textToBLOB);
//        }
//        else {
//            newLink.href = window.URL.createObjectURL(textToBLOB);
//            newLink.style.display = "none";
//            document.body.appendChild(newLink);
//        }
// 
//        newLink.click();
//    }
     
        s.writeline("ID :" + identification);
        s.writeline("Name :" + name);
		s.writeline("Date :" + date);
		s.writeline("Number :" + number);
		s.writeline("Type :" + type);
		s.writeline("Importance :" + importance);
		s.writeline("Name :" + SpecName);	
     
        s.writeline("-----------------------------");
        s.Close();
     }
	</script>
<link rel="stylesheet" href="newStylesheet.css">
</head>

<body>
    <div id="header"><strong> You have successfuly logged in. </strong>
		<br>
	<img src="MiA-logo.png" style="width:250px;height:70px;display: inline-block;" alt="companylogo">
	</div>
	

<div id="main">
<h2>Make-it-All Helpdesk Call Log System
</h2>
	    <!--<p><a href="javascript://Save as TXT" id="submitLink">Save as TXT</a></p>-->
		<button id="logbtn" style="float: right;" onClick="WriteToFile()" value="Log">Log</button>

<!--	<form onSubmit="WriteToFile(this)">-->
<!--	<form action="logHelp.php" method="post">-->
<!--	<form action="untitled3.html" method="get">-->
<table width="200" border="1" cellpadding="5">
  <tbody>
    <tr>
      <th scope="col"></th>
      <th scope="col" colspan=3>Caller</th>
      <th scope="col" colspan=3>PROBLEM</th>
      <th scope="col">SPECIALISTS</th>
      
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
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input id="identification" type="text"></td>
      <td><input id="name" name ="name" type="text"></td>
      <td><input id="date" type="date"></td>
      <td><input id="number" type="text"></td>
      <td><input id="type" type="text"></td>
		<td><input id="importance" type="text"></td>
		<td><input id="SpecName" type="text"></td>
    </tr>
<!--
	  <input type="submit" value="submit">
	  </form>
-->
<!--	 <input id="logbtn" type="submit" value="Submit">-->
<!--
	  <input type="submit" value="submit">
	  </form>
-->
<!--
    <tr>
       <td>&nbsp;</td>
      <td><input id="ID" type="text"></td>
      <td><input id="NAME" type="text"></td>
      <td><input id="DATE" type="text"></td>
      <td><input id="NUMBER" type="text"></td>
      <td><input id="TYPE" type="text"></td>
		<td><input id="IMPORTANCE" type="text"></td>
		<td><input id="NAME" type="text"></td>
    </tr>
    <tr id="preset">
       <td>&nbsp;</td>
      <td><input id="ID" type="text"></td>
      <td><input id="NAME" type="text"></td>
      <td><input id="DATE" type="text"></td>
      <td><input id="NUMBER" type="text"></td>
      <td><input id="TYPE" type="text"></td>
		<td><input id="IMPORTANCE" type="text"></td>
		<td><input id="NAME" type="text"></td>
    </tr>
-->
  </tbody>
</table>
</div>
</body>
</html>
 <?php
/*  $path = 'data.txt';              
if(isset($_POST['identification']) && isset($_POST['name']) && isset($_POST['date']))
{
$fh = fopen($path,"a+");
    $string = $_POST['identification'].' - '.$_POST['name'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
} */
?>
<?php
}
else {
	header("Location: Untitled.html");
}
?>
