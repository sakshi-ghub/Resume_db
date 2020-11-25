<?php
 if(isset($_POST['Name']))
 {
 $connect=mysqli_connect('localhost','root','','resume_form');
  $insert=false;
 //check connection
  if(mysqli_connect_errno($connect))
  {
     echo 'Failed to connect to database: '.mysqli_connect_error();
 }
 else
     echo 'Connected Successfully!!';

    $Name = $_POST['Name'];
    $Roll = $_POST['Roll'];
    $DOB=$_POST['DOB'];
    $Address=$_POST['Address'];
    $Mob = $_POST['Mob'];
    $Email = $_POST['Email'];
    $sgpa1=$_POST['sgpa1'];
    $sgpa2=$_POST['sgpa2'];
    $sgpa3=$_POST['sgpa3'];
    $sgpa4=$_POST['sgpa4'];
    $sgpa5=$_POST['sgpa5'];
    $sgpa6=$_POST['sgpa6'];
    $sgpa7=$_POST['sgpa7'];
    $sgpa8=$_POST['sgpa8'];
    $cgpa=$_POST['cgpa'];
    $Hobbies = $_POST['Hobbies'];
    $Hosteller = $_POST['Hosteller'];
    $References=$_POST['References'];
    $sql = "INSERT INTO `resume_form`.`resume_table` (`Name`, `RollNumber`, `DOB`, `Address`, `Mobile Number`, `E-mail ID`,`sgpa1`,`sgpa2`,`sgpa3`,`sgpa4`,`sgpa5`,`sgpa6`,`sgpa7`,`sgpa8`,`CGPA`,`Hobbies`,`Hosteller`,`References`)     
    VALUES ('$Name', '$Roll', '$DOB', '$Address', '$Mob', '$Email','$sgpa1','$sgpa2','$sgpa3','$sgpa4','$sgpa5','$sgpa6','$sgpa7','$sgpa8','$cgpa','$Hobbies','$Hosteller','$References' );";
    // echo $sql;

    //Execute the query
    if($connect->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        $result='<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Form</strong> Suceesfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    else{
        echo "ERROR: $sql <br> $connect->error";
    }

    // Close the database connection
    $connect->close();
 }
?>
