<?php

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $class = $_POST['class_option'];
    $present_course = $_POST['present_course'];
    $address = $_POST['address'];
    $state = $_POST['state_option'];
    $city = $_POST['city_option'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];

    if(!empty($first_name)||!empty($last_name)||!empty($class)||!empty($present_course)
    ||!empty($address)||!empty($state)||!empty($city)||!empty($pincode)
    ||!empty($gender))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "registeration";

        //create connections
        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error(' . mysqli_connect_errno(). ')' .mysqli_connect_error());
        }else
            {
                $SELECT = "SELECT address FROM studentform WHERE address = ? LIMIT 1";
                $INSERT = "INSERT INTO studentform(first_name,last_name,class,present_course,address,state,city,pincode,gender)VALUES 
                (?,?,?,?,?,?,?,?,?)";

                //Prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$address);
                $stmt->execute();
                $stmt->bind_result($address);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if($rnum==0){
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("sssssssis",$first_name,$last_name,$class,$present_course,$address,$state,$city,$pincode,$gender);
                    $stmt->execute();
                    echo "New Record Inserted Successfully";
                }else{
                    echo "Someone already registered using this address";
                }
                $stmt->close();
                $conn->close();
            }
    }else{
        echo "All Fields are mandatory";
        die();
    }

?>