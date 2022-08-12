<?php require_once  "../database.php"; ?>

<?php

if (isset($_GET['update'])){
    $update_id = $_GET ['update'];

    $sql = "SELECT * FROM enquiry WHERE id = '{$update_id}'";
    $result = mysqli_query($connect,$sql);

    while ($row = mysqli_fetch_assoc($result)){
        $id = $row ['id'];
        $name = $row ['name'];
        $number = $row ['phone_number'];
        $email =$row ['email'];
        $whatsapp = $row ['whatsapp'];
        $start_date = $row ['start_date'];
        $facebook = $row ['facebook'];
        $course = $row ['course'];
        $found_us = $row ['found_us'];
        $others = $row ['others'];
        $reg_no = $row ['reg_date'];

    }

}
       
     if (isset($_GET['update'])){
         $update = $_GET ['update'];
     }

     if (isset($_POST['submitupdate'])){
        $name= $_POST['name'];
        $course= $_POST['course'];
        $start_date= $_POST['start_date'];
        // $date= $_POST['date'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $others=$_POST['message'];
        $gen = $_POST['gen'];
        $facebook = $_POST['facebook'];
        $whatsapp= $_POST['whatsapp'];

        $update = "UPDATE enquiry SET";
        $update .= "name = '$name', ";
        $update .= "phone_number = '$number', ";
        $update .= "email = '$email', ";
        $update .= "whatsapp = '$whatsapp', ";
        $update .= "course = '$course', ";
        $update .= "start_date = '$start_date', ";
        $update .= "facebook = '$facebook', ";
        $update .= "found_us = '$gen', ";
        $update .= "others = '$others' ";
        $update .= "WHERE id = '$update_id'";

        if(!mysqli_query($connect,$update)){
            die("error updating data" . mysqli_connect_error($connect));
            exit();
        }else{
            echo "data successfully updated";
        }
     }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> UPDATE ENQUIRY FORM </title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/new.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1> ENQUIRY FORM</h1>
        <form action='' method="POST">
            <div class="row mt-3">
                <div class="col-md-5"> 
                NAMES:<br> <input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="names" required>
                </div>
                <div class="col-md-5"> 
                PHONE:<br> <input type="text" class="form-control" value="<?php echo $number ?>" name="number" placeholder="Phone number"  required>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-md-5"> 
                E-MAIL:<br> <input type="text" class="form-control" value="<?php echo $email ?>" name="email" placeholder="Email Address"  required>
                </div>
                <div class="col-md-5"> 
                WHATSAPP:<br> <input type="text" class="form-control" value="<?php echo $whatsapp ?>" name="whatsapp"  required placeholder="whatsapp number">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-5"> 
                STARTING DATE: <br> <input type="date" class="form-control" value="<?php echo $start_date ?>" name="start_date"  required placeholder="day/month/year">
                </div>
                <div class="col-md-5"> 
                   FACEBOOK:<br> <input type="text" class="form-control" value="<?php echo $facebook ?>" name="facebook"  required placeholder="Facebook">
                </div>
            </div> 
            <div class="col-md-5"> 
                    <h6> COURSES </h6>
                    <select name="course" class="form-select">
                        <option>Select course ... </option>
                        <option value="front end">Front End </option>
                        <option value="Full Stack with Python">Full Stack with Python </option>
                        <option value="Full Stack with Javescript"> Full Stack with Javescript </option>
                        <option value="Full Stack with Java"> Full Stack with Java </option>
                        <option value="Full Stack with PHP"> Full Stack with PHP </option>
                        <option value="Software Development"> Software Development </option>
                        <option value="Cloud Computing"> Cloud Computing </option>
                        <option value="Networking (N+)"> Networking (N+)</option>
                        <option value="Computer Repairs(A+)</"> Computer Repairs(A+)</option>
                        <option value="Ethical Hacking"> Ethical Hacking</option>
                        <option value="DevApps"> DevApps</option>
                        <option value="Web Design"> Web Design</option>
                        <option value="UI/UX"> UI/UX</option>
                        <option value="Mobile App Development"> Mobile App Development</option>
                        <option value="Digital Marketing"> Digital Marketing</option>
                        <option value="Animation"> Animation</option>
                        <option value="Graphic Designs"> Graphic Designs</option>
                        <option value="Computer Basics"> Computer Basics</option>
                        <option value="Advance Excell"> Advance Excell</option>
                        <option value="Database"> Database</option>
                        <option value="Data Science"> Data Science</option>
                        <option value="Video Editing"> Video Editing</option>

                        
                </select>
                <!-- COURSE: <br><input type="text" class="form-control" name="course" placeholder="course"> -->
                </div>
            

            <h3 class="mt-3"> How did you find out about us </h3>
            
            <input type="checkbox" name="gen" value="Email"> EMAIL
            <input type="checkbox" name="gen" value="Internet"> INTERNET
            <input type="checkbox" name="gen" value="Flyer"> FLYER
            <input type="checkbox" name="gen" value="Radio"> RADIO
            <input type="checkbox" name="gen" value="Television"> TELEVISION
            <input type="checkbox" name="gen" value="Friends"> FRIENDS
            <input type="checkbox" name="gen" value="Online-ADs"> ONLINE ADs
     

            
            <div class="row mt-3">
                <div class="col-md-7"> 
                OTHERS (please specify below):<br><input class="form-control" value="<?php echo $others ?>" name="message" >
                </div>
            </div>
           
                    
                    <input type="submit" name="submitupdate" class="btn btn-primary mt-2">
        </form>
</div> 
</body>
</html>