<script src="editor/ckeditor.js"></script>
<?php include 'header.php'; 
include 'database.php' ?>

<html>
<head>
    
    <title> Add New Student</title>
    <link href="Bootstrap/bootstrap.min.css" rel="stylesheet"> 
    
</head> 
<body> 
 
        <div class="container-fluid">
        <div class="container mt-5">

        <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8  p-3"><br>
        
        <h2 class="text-center mb-3 text-dark">ADD NEW STUDENT</h2><br>
        <form method="POST" autocomplete="off"  enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="studentId" class="form-control" placeholder="Student ID" required>
            </div>
            <div class="form-group">
              <input type="text" name="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="2" name="editor" id="editor" placeholder="Other Information" required></textarea>   
            </div>
         
            <div class="form-group">
              <input type="submit" name="add" class="btn btn-control  btn-outline-dark" value="Add">
              <input type="reset" name="clear" class="btn btn-control  btn-outline-dark" value="Clear">
            </div>

       </form>

       <?php

         if(isset($_POST['add']))
         {
            
            
             $txt=addslashes($_POST['editor']);
            $sql="insert into addstudent(studentId,fname,lname,about)values('$_POST[studentId]','$_POST[fname]','$_POST[lname]','$txt');";
            if($conn->query($sql)===TRUE)
            {
              echo "<script> window.alert('New Student added successfully');</script>";
            }
            else
            {
              echo "ERROR".$sql."<br>".$conn->error;
            }
          }
        

       ?>
            
    </div>

    <div class="col-md-2">
      
    </div>

    

    </div>

    </div>
    </div>

</body>
</html>
<script> CKEDITOR.replace('editor');</script>

<?php include 'footer.php';?>

