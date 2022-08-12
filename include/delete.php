<?php require_once "../database.php"; ?>

<?php 
 if (isset($_GET['delete'])){
     $delete_id = $_GET['delete'];

     $delete = "DELETE FROM enquiry WHERE id = $delete_id";
     mysqli_query($connect, $delete);
     header("location:../viewpost.php");
 }
?>

