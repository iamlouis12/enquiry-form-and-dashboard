<?php require_once "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
</head>
<body>
<?php include_once "include/nav.php" ?>
   

        <div class= "container"> 

                <h1> READ ALL PHONE NOs OF PEOPLE THAT FOUND US THROUGH INTERNET</h1>
                <table class="table table-bordered table-hover"> 
                    <tr>
                        <th> ID </th>
                        <!-- <th> NAME </th> -->
                        <th> PHONE NUMBER </th>
                        <!-- <th> E-MAIL </th>
                        <th> WHATSAPP </th>
                        <th> START DATE </th>
                        <th> FACEBOOK </th>
                        <th> COURSE </th> -->
                        <th> HOW YOU FOUND US </th>
                        <!-- <th> OTHERS </th>
                        <th> REGISTRATION DATE </th> -->
                        <th> UPDATE </th>
                        <th> DELETE </th>
                    </tr>

                    <?php 
            $sql = "SELECT id, phone_number, found_us FROM enquiry WHERE found_us = 'internet' ";
            $query= mysqli_query($connect,$sql);
            while ($row = mysqli_fetch_assoc($query)){
              $id = $row ['id'];
            //   $name = $row ['name'];
              $phone_number = $row ['phone_number'];
            //   $email = $row ['email'];
            //   $whatsapp = $row ['whatsapp'];
            //   $start_date = $row ['start_date'];
            //   $facebook = $row ['facebook'];
            //   $course = $row ['course'];
              $found_us = $row ['found_us'];
            //   $others = $row ['others'];
            //   $reg_date = $row ['reg_date'];
           
            ?>

           <tr>
              <td> <?= $id ?></td>
              
              <td> <?= $phone_number ?> </td>
             
              <td> <?= $found_us ?> </td>
              
              <td> <a href="" class="btn btn-success btn-sm">UPDATE </a>
              <td> <a href="./include/delete.php?delete=<?= $id;?>" class= "btn btn-danger btn-sm"> DELETE </a>
              
          </tr>
          <?php  } ?>

        </table>

        </div>   
    
    
    <?php include_once "include/footer.php" ?> 
</body>
</html>