<!doctype html>
<html>
    <head>
    <?php include "navbaradmin.php";
            include "../loginlog.php";
            include "productsDisplay.php";
           if(empty($_SESSION['username'])){
               header("Location:index.php");

           }
        ?>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style>
             img {
    width: 200px; 
    height: 200px;
    object-fit: cover;
}
         </style>
         
         <title>Products</title>

    </head>
    <body>
    <div class="container">
    <a class="btn btn-primary float-right mt-5" href="addproducts.php">Add products</a>
       
         <table class="table table-bordered table-dark mt-5">
             <tr>
                 <th>Product_ID</th>
                 <th>Name</th>
                 <th>Category</th>
                 <th>Price</th>
                 <th>Description</th>
                 <th>Image</th>
                 <th>Actions</th>
             </tr>
             <?php if($checkResults>0){
            while($row=mysqli_fetch_assoc($results)){
                echo "<tr>";

                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['productName']."</td>";
                echo "<td>".$row['Category']."</td>";
                echo "<td>".$row['Price']."</td>";
                echo "<td>".$row['Description']."</td>";
                echo "<td><img src='../img/{$row['Image']}'></td>";
                
                
                echo "<td><a class='btn btn-warning btn-sm ml-2' href='Edit.php?id=".$row['id']."'>Edit</a><a class='btn btn-danger btn-sm ml-2' href='deleteproduct.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";  
            }
        }
        else{
            echo "Database empty.No products found ! ";
        }
        ?>
         </table>
        
                
               
                   
                
                

              

          
        
      
         
    
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
        
    </body>
</html>