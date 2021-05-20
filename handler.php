<?php

$con = mysqli_connect('localhost', 'deb', 'Debabrata@123', 'form');

if ($con){
    // echo "done";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name_valid = "/^[A-Za-z]+$/";
    $pass_valid = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,15}$/";
    
    $fname = $_POST['first_name'];
    $lname = $_POST['last_Name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $lang = $_POST['language'];
    $lang = implode("," , $lang);
    $gender = $_POST['radio'];


    $file = $_FILES['file'];
    $filename= $file['name'];
    $filepath = $file['tmp_name'];
    $fileerr = $file['error'];
    $filesize = $file['size'];
    $filetype = $file['type'];

    
    // echo $lang;
    // print_r($file);
    // echo $gender;


    


    
    
    
    
    // $insertquery = "insert into user (first_name, last_name, email, mobile, password, language, Gender, image) 
    // values ('$fname', '$lname', '$email', '$mobile', '$hash', '$lang', '$gender', 'image')";
    //  $insert = mysqli_query($con, $insertquery);
    

        // Name validation
    if(strlen($fname) > 2){
        if(strlen($fname) < 20){
            if(preg_match($name_valid, $fname)){
                if(strlen($lname) > 2){
                    if(strlen($lname) < 20){
                        if(preg_match($name_valid, $lname)){
                            if(strlen($mobile) >= 10){
                                if(strlen($mobile) <= 12){
                                    $sql = "select * from user where email = '$email'";
                                    $result = mysqli_query($con, $sql);
                                    $numrows = mysqli_num_rows($result);

                                    if($numrows < 1 ){
                                        if(preg_match($pass_valid, $pass)){
                                            if($pass == $cpass){
                                                $hash = password_hash($pass, PASSWORD_DEFAULT);
                                                // echo $hash;
                                                if(!empty($lang)){
                                                    if(!empty($gender)){
                                                        
                                                            if($filesize < 500000){
                                                                $filedest = 'uploads/'. $filename;

                                                                move_uploaded_file($filepath, $filedest);
                                                                if(isset($_POST['submit'])){
                                                                    $insertquery = "insert into user (first_name, last_name, email, mobile, password, language, gender, image) 
    values ('$fname', '$lname', '$email', '$mobile', '$hash', '$lang', '$gender', '$filedest')";
      $insert = mysqli_query($con, $insertquery);

                                                                }
                                                               
                            
                                                                
                                                            }
                                                            else{
                                                                echo "use less than 500KB";
                                                            }

                                                        
                                                    }
                                                    else{
                                                        echo "Select Gender";
                                                    }

                                                }
                                                else{
                                                    echo "Select language";
                                                }
                                                
                                            }
                                            else{
                                                echo "confirm password should be same as password";
                                            }
                                            
                                        }
                                        else {
                                            echo "Password Should be 8 to 16 charecter, Must contain one uppercase, one lowercase, one special character";
                                        }

                                    }
                                    else{
                                        echo "Email id already exist";
                                    }
                        
                                }
                                else{
                                    echo "use less thn 12 digit Number";
                                }
                            }
                            else{
                                    echo "use 10 digit Number";
                            }
                            
                        }
                        else{
                            echo "Use only charecter in last name and do not use space";
                        }
                    }
                    else{
                        echo "last_Name should be less thn 20 charecter";
                    }
                }
                else{
                    echo "last_Name should be more than 2 charecter";
                    // exit();
                }
            
               

            }
            else{
                echo "Use only charecter in first_name and do not use space";
                // exit();
            }
        }
        else{
            echo "Name should be less thn 20 charecter";
            // exit();
        }
    }
    else{
        
        echo "Name should be more than 2 charecter";
        // exit();
    }

    // last name validation
    

    


}



?>

