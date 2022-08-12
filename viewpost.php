
   <?php require_once "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Dashboard</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
</head>
<body>

<?php include_once "include/nav.php" ?>

<div class="container"> 
    <div class="row">
    
    
        <!-- <div class= "col-md-10">  -->
                <h1> READ ALL POST  </h1>
                <table class="table table-bordered table-hover"> 
                    <tr>
                        <th> ID </th>
                        <th> NAME </th>
                        <th> PHONE NUMBER </th>
                        <th> E-MAIL </th>
                        <th> WHATSAPP </th>
                        <th> START DATE </th>
                        <th> FACEBOOK </th>
                        <th> COURSE </th>
                        <th> HOW YOU FOUND US </th>
                        <th> OTHERS </th>
                        <th> REGISTRATION DATE </th>
                        <th> UPDATE </th>
                        <th> DELETE </th>
                    </tr>

                    <?php 
                    
                            $sn=0;
                            $sql = "SELECT * FROM enquiry ";
                            $query= mysqli_query($connect,$sql);
                            while ($row = mysqli_fetch_assoc($query)){
                            $id = $row ['id'];
                            $name = $row ['name'];
                            $phone_number = $row ['phone_number'];
                            $email = $row ['email'];
                            $whatsapp = $row ['whatsapp'];
                            $start_date = $row ['start_date'];
                            $facebook = $row ['facebook'];
                            $course = $row ['course'];
                            $found_us = $row ['found_us'];
                            $others = $row ['others'];
                            $reg_date = $row ['reg_date'];
                            $sn++;
                        
                    ?>

           <tr>
              <td> <?= $sn ?></td>
              <td> <?= $name ?> </td>
              <td> <?= $phone_number ?> </td>
              <td> <?= $email ?> </td>
              <td> <?= $whatsapp ?> </td>
              <td> <?= $start_date ?> </td>
              <td> <?= $facebook ?> </td>
              <td> <?= $course ?> </td>
              <td> <?= $found_us ?> </td>
              <td> <?= $others ?> </td>
              <td> <?= $reg_date ?> </td>
              <td> <a href="./include/update.php?update=<?=$id;?>" class="btn btn-success btn-sm">UPDATE </a>
              <td> <a href="./include/delete.php?delete=<?=$id;?>" class= "btn btn-danger btn-sm"> DELETE </a>
              
          </tr>
          <?php  } ?>

        </table>

        </div>   
    <!-- </div> -->

    </div>
    <?php include_once "include/footer.php" ?> 


 
</body>
</html>