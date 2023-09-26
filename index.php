<?php include('includes/conn.php');

if(isset($_GET['delid'])) 
{
  $delid=$_GET['delid'];

  $sql="delete from media where id='".$delid."'";

  $result=mysqli_query($conn,$sql);


  if($result) 
{
  echo "deleted";
  header('location:index.php');
}

else
{
  echo "error";
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
  <table class="table">
    <thead>
      <tr>
        <th>Image</th>
        <th>add</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="select * from media";
      $result=mysqli_query($conn,$sql);
      while ($data=mysqli_fetch_array($result)) {
           

      ?>
      <tr>

        <td><img src="uploads/<?php echo $data['doc'];?>" style="height: 100px";></td>
        <td><a href="add.php">add</a></td>
       <td><a href="edit.php?editid=<?php echo $data['id'];?>">edit</a></td>

        <td><a href="index.php?delid=<?php echo $data['id'];?>">delete</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>



</body>
</html>
