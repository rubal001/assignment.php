<?php include 'header.php'; 
include 'database.php' ?>

<html>
<head> 
 
<title>students</title>   
<link href="Bootstrap/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    
 <div class="container-fluid">
 <div class="container mt-3">
      
 <div class="row"> 
    
   
    
   <div class="col-md-12">
   <h1 class="text-center mb-3 text dark">Student List</h1><br>
   <div class="table responsive">
        <table class="table table-striped table-bordered table-hover" style="text-align:center;">
            
          <tr style="background-image:linear-gradient(to bottom right,cadetblue,skyblue,aqua,cyan,pink);">

             <th>Student ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>About</th>
          
    
             
          </tr>


          <?php

          $sql="select* from addstudent order by studentId DESC";
          $result=$conn->query($sql);
          if($result->num_rows>0)
          {
            while($row=$result->fetch_assoc())
            {  
              $sid=$row['sid'];
              echo "<tr>";
              echo "<td>".$row['studentId']."</td>";
              echo "<td>".$row['fname']."</td>";
              echo "<td>".$row['lname']."</td>";
              echo "<td>".$row['about']."</td>";
    
              echo "</tr>";
            }
          } 
          else
          {
            echo "<script>window.alert('No student found');</script>";
          }



          

        ?>
            
      </table>
      </div>
      </div>  
     
  
    
 </div>
     
 </div>
 </div>
    <br><br><br><br><br><br><br>
</body>
</html>

<?php include 'footer.php';?>