<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];

        $file = './userdata.csv';
        $handle =fopen($file, "a");
        fwrite($handle, $name);
        
        fwrite($handle, $email);
        
        fwrite($handle, $DOB);
        
        fwrite($handle, $gender);
        
        fwrite($handle, $country);
        
        fclose($handle);

        print_r($_POST);

        echo "Your details have been submitted. $name ";
    
        echo "click to go back";
?>