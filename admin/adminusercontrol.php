<!doctype html>
<html>
    <head>
        <?php
        include "adminuserlog.php"; 
        include "navbaradmin.php";
        include "../loginlog.php";

        if(empty($_SESSION['username'])){
            header("Location:index.php");

        }
        
          
        ?>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="design\css\style.css">
         <title>Users</title>

    </head>
    <body>
    <div class="container">
     
         <table class="table table-bordered table-dark mt-5 ">
             <tr>
                 <th>User_ID</th>
                 <th>Username</th>
                 <th>Email</th>
                 <th>User_Type</th>
                 <th>Actions</th>
             </tr>
             <?php if($checkResults>0){
            while($row=mysqli_fetch_assoc($results)){
                echo "<tr>";

                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['user_type']."</td>";
                if($row['user_type']=='user'){
                echo "<td><a class='btn btn-info btn-sm ml-2' href='makeuseradmin.php?id=".$row['id']."'>Make admin</a><a class='btn btn-danger btn-sm ml-2' href='deleteuser.php?id=".$row['id']."'>Delete user</a></td>";
                  
                }
                else{
                    echo "<td><a class='btn btn-warning btn-sm ml-2' href='regularuserswitch.php?id=".$row['id']."'>Switch to regular user</a></td>";
                }
                

                echo "</tr>";

            }
        
        }
        else{
            echo "Database empty.No users found ! ";
        }
        ?>
         </table>
        
    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>
</html>