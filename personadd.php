<?php
include 'include.php';
if (!$_POST) {
   $display_block = "";
    
} else if ($_POST) {
    // add to tables, checking for required fieds
    if (($_POST["f_name"] == "") || ($_POST["l_name"] == "")) {
        header("Location: personadd.php");
        exit;
    }
    
    //connect to DB
    DBconn();
    
}
?>
<html>
<head>
<title>Add Person</title>
</head>
<body>
    <h1>Add a person</h1>
    <?php echo $display_block; ?>
</body>
</html>