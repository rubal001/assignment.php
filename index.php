<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhais&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset */
        body {
            font-family:Baloo Bhai, cursive;
            color: black;
            margin: 0px;
            padding: 0px;
        
        
        }

        .left {
            position: absolute;
            left: 60px;
            top: 20px;
            /* border: 2px solid red; */
            display: inline-block;
        }

        .left img {
            width: 100px;
            filter: invert(100%);
            /* to convet black image into white*/
        }

        .left div {
            line-height: 40px;
            font-size: 18px;
            text-align: center;
        }

        .mid {
            display: block;
            width: 46%;
            margin: 29px auto;
            /* border: 2px solid rgb(49, 206, 127); */
        }

        .right {
            position: absolute;
            right: 34px;
            top: 36px;
            /* border: 2px solid yellow; */
            display: inline-block;
        }

        .navbar {
            display: inline-block;
        }

        .navbar li {
            display: inline-block;
            font-size: 17px;
        }

        .navbar li a {
            font-weight:bold;
            color: black;
            text-decoration: none;
            padding: 34px 23px;
        }

        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: orange;
        }
        .btn{
            font-family:Baloo Bhai, cursive;
            margin: 0px 9px;
            background-color: black;
            color: orange;
            padding: 4px 14px;
            border: 2px solid gray;
            border-radius: 10px;
            font-size: 20px;
            cursor: pointer;

        }
        .btn:hover{
            background-color: rgb(83, 78, 78);
        }
        .container img{
        
        max-width:100%;
       max-height:100%;
           background-repeat: no-repeat;
            background-size: cover;
        }

        
    </style>
</head>

<body>
    <header class="header">
        <!-- left box for logo -->
        <div class="left">
            <img src="imgs/logo.jpg" alt="">
        </div>
        <!-- mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="AddStudent.php">Add a Student</a></li>
                <li><a href="ViewStudents">All Students</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- right box for buttons -->
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
    <img src="imgs/students.jpg">
    </div>
</body>

</html>
<?php include 'footer.php';?>