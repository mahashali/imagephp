<?php include('includes/conn.php');
if (isset($_POST['submit'])) 
{
  $filename=$_FILES['doc']['name'];
  $tempname=$_FILES['doc']['tmp_name'];
  move_uploaded_file($tempname,'uploads/'.$filename);
$sql ="insert into media (doc) VALUES('".$filename."')";
$result=mysqli_query($conn, $sql);
if($result)
{
  echo "data insert";
}
else
{
  echo 'error';
}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>image upload</h2>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">image upload:</label>
      <input type="file" class="form-control" id="email" placeholder="Enter image" name="doc">
    </div>
   
   
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
