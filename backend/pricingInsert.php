 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pricing</title>
  <style>
textarea {
  resize: none;
}
button{
  margin: 20px;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <button><a href="pricingIndex.php">Back </a></button>
<form action="pricingInsert.php" method="POST" enctype='multipart/form-data'>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!-- /flutter/backend/display.php -->

<?php
include 'connect.php';
// if (!$con)
//   {
//   die('Could not connect: ' . mysql_error());
// } else {
//     echo 'Connected';
// }

if (isset($_POST['done'])) {

  $name = $_FILES['file']['name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if (in_array($imageFileType, $extensions_arr)) {
    // Upload file
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name)) {
      // Insert record

   


    // $id = $_GET['id'];
    $jewelry = $_POST['jewelry'];
    $weight = $_POST['weight'];
    // $imageupload = $_POST['imageupload'];
    $price = $_POST['price'];
    $description = $_POST['description'];

  
    // $filename = $_FILES["fileToUpload"]["name"];
    // $tempname = $_FILES["fileToUpload"]["tmp_name"];  
    // $folder = "uploads/".$filename;  

    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $que = 'INSERT INTO `pricing`( `jewelry`, `weight`, `imageupload`, `price`,`description`) VALUES ("'.$jewelry.'","'.$weight.'", "'.$name.'" ,"'.$price.'","'.$description.'")';
    $query = mysqli_query($con, $que);
  if ($query) {
    echo '<script>alert("Data Submitted Successfully")</script>';
    // header("Location: pricingInsert.php");

      } else {
        echo "";
      }
}
}
}
?>     

<h1>Insertion</h1>
<div class="card">
    <div class="card-header" style="background-color:powderblue;'">
           <label>Jewelry Name</label>
          <input type="text" class="jewelry" id="jewelry" name="jewelry" placeholder="Enter jewelry name" required></br>
          <label>Weight</label>
          <input type="text" class="weight" id="weight" name="weight" placeholder="Enter jewelry weight" required></br>
          <label>Price</label>
          <input type="text" class="price" id="price" name="price" placeholder="Enter jewelry price" required></br>
          <label>Image </label>
          <?php include('imageUpload.php'); ?><br>     
          <label>Description:</label>     
         <textarea type="text" placeholder="Add Description"  cols="40" rows="4" class="description" id="description" name="description" placeholder="Enter jewelry description" required></textarea><br>
          <button class="btn btn-success" type="submit" name="done" id="done">Submit</button>
    </div>      
</div> 
</form>  

</body>
</html>