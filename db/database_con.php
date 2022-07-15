<?php
function OpenCon()
{
    /*
     *  $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "webdb";
         $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
     */


    $OwnerID = $_POST['OwnerID'];
    $Phone = $_POST['Phone'];
    $Property = $_POST['Property'];
    $Location = $_POST['Location'];
    $Description = $_POST['Description'];
    $uploadf = $_POST['upload'];

    // Database connection
    $conn = new mysqli('localhost','root','','webdb');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO products(UserID, Phone, `Property ID`, Location,Description, upload)
        values($OwnerID,$Phone,$Property,$Location,$Description,$uploadf)");
        $stmt->bind_param("sssssi", $OwnerID, $Phone, $Property, $Location, $Description, $uploadf);
        $execval = $stmt->execute();
        echo $execval;
        echo "Data inserted successfully...";
        $stmt->close();
        $conn->close();
    }

}

?>


