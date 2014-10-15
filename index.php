<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<<<<<<< HEAD
<?php
include('include.php');
$Announcements = mysqli_query($DBconn,'SELECT * FROM announce WHERE announce_published = 1 ORDER BY announce_start DESC, announce_ID DESC LIMIT 5');

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Fabula - Home</title>
    </head>
    <body>
        <!-- Here's where I'm gonna put the nav bar -->
        <a href="index.php">Home</a> | Announcements | Notes & Email | Forum | Schedule | Reports | File | <a href="Persons.php">Contacts</a> | Admin
        <table width = '100%' border='1'>
            <td ID="home_left" width='50%'>
    <table>
        <tr align='top'><h2>Announcements</h2></tr>
        <tr>        <?php echo "<table cellspacing='10'>";
while($row = mysqli_fetch_array($Announcements))
  {
  echo "<tr>";
  echo "<td>" . $row['announce_start'] . "</td>";
  echo "<td> | </td>";
  echo "<td>" . $row['announce_text'] . "</td>";
  echo "</tr>";
  }
echo "<br>";
        ?>
               
            
                </tr>
     </table>
            <td ID="home_right" width='50%'>
                <table border='0'>
        <td valign='top'><h2>Messages</h2></td>
        <tr><p>I still haven't built the messaging table. Shame on me.</p>
                <p>And the spacing and text levels are all sorts of fucked up.</p>
        </tr>        
     </table>
       </table>
=======
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
print(Date());
        ?>
        <P>This is the first default page for the backstage management portion of Fabula.</p>
        <p>This project is a work in progress.</p>
>>>>>>> e162efb9947a05d7ae2213f677f07397d8f0fb91
    </body>
</html>
