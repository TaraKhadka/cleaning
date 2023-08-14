<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cleaning Service Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <!-- <script src="../js/script.js"></script> -->

    <style>
        body {
            background-image: url(../img/login_background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <script src="../js/script.js">
        // function validate() {
        //     let email = document.forms["myForm"]["email"].value;
        //     if (email == "") {
        //         alert("email is required!");
        //         return false
        //     }
        //     else{
        //         return true; 
        //     }
            
        // }
    </script>
</head>

<body>
    <!-- <body style="background: url(../img/login_background.jpg); background-size: cover; background-repeat: no-repeat; opacity: .5;"> -->
    <div class="container  col-sm-5 my-5 ">
        <div class="border p-1 col-sm-12 cont-wid clr mx-auto text-primary rounded font-10 font-weight-bold ">
            <h1 class="text-center">Welcome</h1>
            <hr>

            <form action="../index.php" method="post" name="myForm" onsubmit="return validate()" class="">
                <div class="email">
                    <label id="" class="text-left h4">Email Or Phone</label>
                    <input id="email" name="email" type="text" placeholder="email or number" class="w-100 form-control h-2">
                    <label for="email" id="emailError" class="text-danger"></label>
                </div>

                <div class="pass col">
                    <div class="text inline-block">
                        <label class="w-auto inline1 float-left h4">Password</label>
                        <h6 class="w-auto inline2 text-left float-right"> <a href="../html/forget.html">Forgot Password</a></h6>
                    </div>
                    <input id="password" name="password" type="password" placeholder="**********" class="w-100  h-2 form-control">
                    <label for="password" id="passwordError"></label>
                </div>

                <div>
                    <!-- <button type="submit" onclick="" class="btn btn-primary w-100 btn-grid" value="Submit">Login</button> -->

                    <input type="submit" id="submit" name="submit" onclick="hello()" class="btn btn-primary w-100">

                    <h6>Don't Have An Account ? <a href="../php/create.php">Sign Up</a></h6>
                </div>

            </form>
        </div>

    </div>


    < <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <!-- <script type="text/javascript" src="../js/script.js">
        alert ("Hello")
        function validate() {
            let password = document.getElementById("password").value;
            let email = document.getElementById("email").value;
            if (password == "" || email == "") {
                alert("Invalid passwored");
                return false;
            } else {
                alert("valid");
                return true;
            }
        }

        function hello() {
            alert("hello");
            console.log("Hello console");
        } -->
        </script>

</body>

</html>