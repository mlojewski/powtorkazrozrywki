<?php
require "tweet.php";
require "user.php";
require "connect.php";
require "comment.php";
session_start();
if (!isset($_SESSION['loggedUser'])) {// takiego ifa wklejamy do każdej podstrony do której ma mieć dostęp zalogowany user
  header('Location: index.php');
  exit();
}

$commentUserLoad = Comments::loadAllCommentsByUserId($conn, $_SESSION['id']);
$commentUserLoadPreProper = array_reverse($commentUserLoad);


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     archiwum Twoich komentarzy <?php echo $_SESSION['userName']; ?>
     <br>
     <br>
     <table border="3" cellspacing="5">
       <tr><th>Treść komentarza</th><th>Data przesłania</th><th>komentarz do tweeta </th></tr>

       <?php
     foreach ($commentUserLoadPreProper as $value) {
       $selectedTweetID = $value->getTweetId();
       $sql="SELECT text FROM tweet WHERE id=$selectedTweetID";
       $result = $conn->query($sql);
       $row=$result->fetch_assoc();
       echo "<tr>";
       echo "<td>".$value->gettext()."</td>";
       echo "<td>".$value->getCreationDate()."</td>";
       echo "<td>".$row['text']."</td>";
       echo "</tr>";
     }
       ?>
       </table>
     <br>
       </body>
   </body>
 </html>
