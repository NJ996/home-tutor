<?php

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $guardian_name = $_POST['guardian_name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $martial_status = $_POST['martial_status'];
    $address = $_POST['address'];
    $inst_name = $_POST['inst_name'];
    $subjects = $_POST['subjects'];
    $specialization = $_POST['specialization'];

    if(!empty($first_name)||!empty($last_name)||!empty($guardian_name)||!empty($email)
    ||!empty($date)||!empty($month)||!empty($year)||!empty($martial_status)
    ||!empty($address)||!empty($inst_name)||!empty($subjects)||!empty($specialization))
    {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "registeration";

        //create connections
        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error())
        {
            echo "connection error";
            die('Connect Error(' . mysqli_connect_errno(). ')' .mysqli_connect_error());
        }else
            {
                $SELECT = "SELECT email FROM teacherform WHERE email = ? LIMIT 1";
                $INSERT = "INSERT INTO teacherform(first_name,last_name,guardian_name,email,date,month,year,martial_status,work_address,inst_name,subjects,specialization)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

                //Prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if($rnum==0){
                    $stmt->close();

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssssiiisssss",$first_name,$last_name,$guardian_name,$email,$date,$month,$year,$martial_status,$address,$inst_name,$subjects,$specialization);
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