<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cleaning";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    echo "Connect Successflul";
}
else{
    echo "Err Connection ";
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="../css/create.css">
    <title>Cleaning Service Sign Up page</title>
</head>

<body class="">
    <div class="my-2  container rounded col-md-7 bg">
        <form action="../php/create.php" name="myForm" onsubmit="validate()" method="post" class="was-validate"> 
            <div class="form pb-1">
                <h2 class="text-center text-primary">Create Account</h2>
                <hr>
                <div class="row ">
                    <div class="col-md">
                        <label class="h5 text-primary mb-0">First Name <label class="text-danger">*</label></label>
                        <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name" >
                    </div>
                    <div class="col-md mb-1">
                        <label class="h5 text-primary mb-0">Middle Name </label>
                        <input id="mname" name="mname" type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md mb-1">
                        <label class="h5 text-primary mb-0">Last Name<label class="text-danger">*</label></label>
                        <input id="lname" name="lname" type="text" class="form-control" placeholder="Last Name" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-1">
                        <label class=" h5 text-primary mb-0">Phone<label class="text-danger">*</label></label>
                        <input id="phone" name="phone" type="Number" class="form-control mb-2" >

                    </div>
                    <div class="col-md mb-1">
                        <label class=" h5 text-primary mb-0">Email<label class="text-danger">*</label></label>
                        <input id="email" name="email" type="email" class="form-control mb-2" >

                    </div>
                </div>
                <div class="row">
                    <div class="col-md mb-1">
                        <label class=" h5 text-primary mb-0">Password<label class="text-danger">*</label></label>
                        <input id="pass" type="password" class="form-control mb-2" >

                    </div>
                    <div class="col-md mb-1">
                        <label class=" h5 text-primary mb-0">Confirm Password<label
                                class="text-danger">*</label></label>
                        <input id="pass2" type="password" class="form-control mb-2" >

                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label class=" h5 text-primary">Address<label class="text-danger">*</label></label>
                        <input id="address" type="text" class="form-control mb-2" >

                    </div>
                    <div class="col-md">
                        <label class="h5 text-primary">Profile Image</label>
                        <input id="profile" type="file" accept="image/*" class="form-control">
                    </div>
                </div>

                <div class="col-md">
                    <button type="submit" name="submit" value="Submit" class="btn btn-lg col-3 btn-primary">Submit</button>
                </div>
                <p>Already Have Account <a href="./login.php">Log in</a></p>
            </div>
        </form>
    </div>
    </div>
    <script src="../js/script.js">

        // function validate() {
        //     var returnvalue = true;

        //     // var name = document.forms['myForm'] ['fname'].value;
        //     var name = document.getElementById('fname').value;
        //     console.log(name);

        //     // return returnvalue;
        // }
    </script>
</body>

</html>

<?php 


?>