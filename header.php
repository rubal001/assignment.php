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
            color: white;
            margin: 0px;
            padding: 0px;
            background: url(imgs/.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .header{
            background-color: black;
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
            color: white;
            text-decoration: none;
            padding: 30px 20px;
        }

        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: pink;
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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="AddStudent.php">Add a Student</a></li>
                <li><a href="ViewStudents">All Students</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <!-- right box for buttons -->
        <div class="right">
         
        </div>
    </header>
  
</body>

</html>