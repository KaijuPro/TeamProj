<!doctype html>
<html>
 <head>
  <title>Helpdesk Logs</title>
 </head>
<body>
<?php

// Check that user sent some data to begin with. 
if (isset($_REQUEST['yourfield'])) {

    /* Sanitize input. Trust *nothing* sent by the client.
     * When possible use whitelisting, only allow characters that you know
     * are needed. If username must contain only alphanumeric characters,
     * without puntation, then you should not accept anything else.
     * For more details, see: https://stackoverflow.com/a/10094315
     */
    $yourfield=preg_replace('/[^a-zA-Z0-9\ ]/','',$_REQUEST['yourfield']);

    /* Escape your input: use htmlspecialchars to avoid most obvious XSS attacks.
     * Note: Your application may still be vulnerable to XSS if you use $yourfield
     *       in an attribute without proper quoting.
     * For more details, see: https://stackoverflow.com/a/130323
     */
    $yourfield=htmlspecialchars($yourfield);


} else {
    die('User did not send any data to be saved!');
}


try {
       $dbhandle = new PDO('mysql:host=localhost; dbname=PLACEHOLDER',
                           'coa123cycle', 'bgt87awx');
    }
    catch (PDOException $e) {
       // The PDO constructor throws an exception if it fails
       die('Error Connecting to Database: ' . $e->getMessage());
    }

    $sql = "SELECT cy.ISO_id, cy.name, cy.gender, cy.height, cy.weight, cn.country_name FROM Country cn INNER JOIN Cyclist cy ON cn.ISO_id = cy.ISO_id ";

    $query = $dbhandle->prepare($sql);

    if ( $query->execute() === FALSE ) {
       die('Error Running Query: ' . implode($query->errorInfo(),' '));
    }

    // Put the results into a nice big associative array
    $results = $query->fetchAll();

?>
<form method="post">
 <input type="text" name="yourfield" value="<?php print $yourfield; ?>">
 <input type="submit" name="youraction" value="save">
</form>

</body>
</html>

<?php
// $path = 'data.txt';              
//if(isset($_POST['identification']) && isset($_POST['name']) && isset($_POST['date']))
//{
//$fh = fopen($path,"a+");
//    $string = $_POST['identification'].' - '.$_POST['name'];
//    fwrite($fh,$string); // Write information to the file
//    fclose($fh); // Close the file
//}
?>