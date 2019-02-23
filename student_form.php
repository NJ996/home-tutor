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
        <h2>Student Application Form</h2>
        <form action="insert.php" method="POST" class="form needs-validation">
            <div class="form-group row">
                <label for="fname-form" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" size="20" maxlength="30" class="form-control" id="fname-form"
                        placeholder="First Name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="lname-form" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" size="20" maxlength="30" class="form-control" id="lname-form"
                        placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="class-form" class="col-sm-2 col-form-label">Class</label>
                <div class=" col-sm-10 form-group">
                    <select class="custom-select" id="class-form" name="class_option" required>
                        <option value="">Choose your class..</option>
                        <option value="1">1-5</option>
                        <option value="2">6-8</option>
                        <option value="3">9</option>
                        <option value="4">10</option>
                        <option value="5">11</option>
                        <option value="6">12</option>
                        <option value="7">Higher Study</option>
                    </select>
                    <div class="invalid-feedback">Invalid Input</div>
                </div>
            </div>

            <div class="form-group row">
                <label for="present_course" class="col-sm-2 col-sm-label">Present Course</label>
                <div class="col-sm-10">
                    <input class="form-control" id="present_course" rows="1" name="present_course">
                </div>

            </div>

            <div class="form-group row">
                <label for="address-form" class="col-sm-2 col-sm-label">Address</label>
                <div class="col-sm-10">
                    <textarea type="text" name="address" id="address-form" class="form-control" rows="2" required></textarea>
                </div>

            </div>
            <div class="form-group row">
                <label for="state-form" class="col-sm-2 col-sm-label">State</label>
                <div class="col-sm-10">
                    <select class="form-control custom-select" id="state-form" name="state_option" required>
                        <option value="">Choose your state..</option>
                        <option value="1">Kerala</option>
                        <option value="2">Bihar</option>
                        <option value="3">Uttar Pradesh</option>
                        <option value="4">Jharkhand</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="city-form" class="col-sm-2 col-sm-label">City</label>
                <div class="col-sm-10">
                    <select class="form-control custom-select" id="city-form" name="city_option" required>
                        <option value="">Choose your city..</option>
                        <option value="1">Ernakulam</option>
                        <option value="2">Kochi</option>
                        <option value="3">Patna</option>
                        <option value="4">Lucknow</option>
                        <option value="5">Gorakhpur</option>
                        <option value="6">Jamshedpur</option>
                        <option value="7">Ranchi</option>
                        <option value="8">Allepey</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="pincode-form" class="col-sm-2 col-sm-label">Pincode</label>
                <div class="col-sm-10">
                    <input type="text" name="pincode" id="pincode-form" class="form-control" pattern="[0-9]{6}"
                        minlength="6" maxlength="6" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-sm-label">Gender</label>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="gender" id="male" value="m" class="custom-control-input">
                        <label for="male" class="custom-control-label">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="gender" id="female" value="f" class="custom-control-input">
                        <label for="female" class="custom-control-label">Female</label>
                    </div>
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