<?php  
require 'vendor/autoload.php';  
// Creating Connection  
$con = new MongoDB\Client("mongodb+srv://vercel-admin-user:1H1Di7ZJrWFgCMOi@cluster0.2pxbf5w.mongodb.net/admin");  
// Creating Database  
$db = $con->arkcreanosha;  
// Creating Document  
$collection = $db->user;  
// Insering Record  
if(ISSET($_POST['save']))
{
    $insert = array(
        'firstname'=> $_POST['fname'],
        'lastname'=> $_POST['lname'],
        'email'=> $_POST['femail'],
        'password'=> $_POST['fpassword'],
        'cpassword'=> $_POST['fcpassword'],
    );
    $collection->insertOne($insert);  

        echo "<script>alert('Successfully inserted data!')</script>";
        echo "<script>window.location='index.php'</script>";
}
?>  