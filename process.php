<?php require_once "database.php"; ?>

<?php 
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $course= $_POST['course'];
        $start_date= $_POST['start_date'];
        // $date= $_POST['date'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $gen = $_POST['gen'];
        $facebook = $_POST['facebook'];
        $whatsapp= $_POST['whatsapp'];
        $random = rand(10, 100);

        //echo $name, $course, $start_date, $number, $email phone whatsapp then everything, $message, $whatsapp, $facebook, $gen  ;
        $sql = "INSERT INTO enquiry (name,phone_number,email,whatsapp,start_date,facebook,course,found_us,others,random_no) 
        VALUES ('$name','$number','$email','$whatsapp','$start_date','$facebook','$course','$gen','$message','$random')";
        mysqli_query($connect,$sql);
       
        // $select = mysqli_query($connect, "SELECT 'email' FROM 'enquiry' WHERE 'email' = '".$_POST['email']."'") or exit (mysqli_error($connect));
        // if (mysqli_num_rows($select)){
        //     exit('This email already being used');
        // }

    }
    ?>