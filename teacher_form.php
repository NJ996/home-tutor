<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:comp_login/indexlogin.php");
}

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h2>Teacher Application Form</h2>
        <form action="" method="POST" class="form needs-validation">
            <!--first name-->
            <div class="form-group row">
                <label for="fname-form" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" size="20" maxlength="30" class="form-control" id="fname-form"
                        placeholder="First Name" required>
                </div>
            </div>
            <!--last name-->
            <div class="form-group row">
                <label for="lname-form" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" size="20" maxlength="30" class="form-control" id="lname-form"
                        placeholder="Last Name" required>
                </div>
            </div>
            <!--father's name-->
            <div class="form-group row">
                <label for="gardian-form" class="col-sm-2 col-form-label">Father's Name/Husband's name</label>
                <div class="col-sm-10">
                    <input type="text" name="gardian_name" size="20" maxlength="30" class="form-control" id="gardian-form"
                        placeholder="Gardian Name" required>
                </div>
            </div>
            <!--email-->
            <div class="form-group row">
                <label for="email-form" class="col-sm-2 col-sm-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email-form" class="form-control" placeholder="name@example.com"
                        required>
                </div>
            </div>
            <!--DOB-->
            <div class="form-group row">
                <label for="dob-form" class="col-sm-2 col-sm-label">DOB</label>
                <div class="col-sm-10">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Date</label>
                            <input type="text" class="form-control mb-2" id="dob-form" placeholder="Date" pattern="[0-9]{2}"
                                minlength="1" maxlength="2" required>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Month</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">/</div>
                                </div>
                                <input type="text" class="form-control" id="dob-form" placeholder="Month" pattern="[0-9]{2}"
                                    minlength="1" maxlength="2" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Year</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">/</div>
                                </div>
                                <input type="text" class="form-control" id="dob-form" placeholder="Year" pattern="[0-9]{4}"
                                    minlength="4" maxlength="4" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Martial status-->
            <div class="form-group row">
                <label for="martial-status" class="col-sm-2 col-sm-label">Martial-status</label>
                <div class="col-auto">
                    <label for="martial-status" class="sr-only">Married</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="martial-status" id="married" value="married" class="custom-control-input">
                        <label for="married" class="custom-control-label">Married
                        </label>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="martial-status" class="sr-only">Unmarried</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="martial-status" id="unmarried" value="unmarried" class="custom-control-input">
                        <label for="unmarried" class="custom-control-label">Unmarried</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="address-form" class="col-sm-2 col-sm-label">Work Address</label>
                <div class="col-sm-10">
                    <textarea type="text" name="address" id="address-form" class="form-control" rows="2" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="study-form" class="col-sm-2 col-sm-label">School/college(If Studying)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inst-name" id="study-form" placeholder="School/College Name">
                </div>
            </div>

            <!--subjects to teach-->
            <div class="form-group row">
                <label for="subect-from" class="col-sm-2 col-sm-label">Subjects to teach</label>
                <div class="col-sm-10">
                    <input type="text" name="subjects" id="subject-form" placeholder="Enter subjects separated by comma"
                        class="form-control" required>
                </div>
            </div>
            <!--Specialization-->
            <div class="form-group row">
                <label for="specialization" class="col-sm-2 col-sm-label">Specialization</label>
                <div class="col-sm-10">
                    <input type="text" name="specialization" id="specialization" placeholder="Specialization subject"
                        class="form-control" required>
                </div>
            </div>
            <input type="checkbox" class="from-check-input" required>
            <label class="form-check-label">Agree to terms and conditions</label><br><br>
            <button type="submit" class="btn btn-success">Submit</button><br><br><br>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>