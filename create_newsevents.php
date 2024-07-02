<html>

<?php
session_start();
include 'connectalliedmedixdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Type = $_POST['newsevents'];
    $CreateDate = $_POST['currDate'];
    $Title = $_POST['title'];
    $ImageLink = $_POST['image'];
    $Description = $_POST['description'];

    $insertNewsEventsQuery = "INSERT INTO NewsAndEvents (Type, CreateDate, Title, ImageLink, Description) 
                                VALUES ('$Type', NOW(), '$Title', '$ImageLink', '$Description')";
    if (mysqli_query($conn, $insertNewsEventsQuery))
         ECHO "Your post was successfully saved!";
    else
         ECHO "There was an error saving your post. Please try again later.";
        
   
}
?>

</html>