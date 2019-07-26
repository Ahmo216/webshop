<!DOCTYPE html>
<html>
<head>
<?php include "navbaruser.php";
require '../connDB.php';
            include "../loginlog.php";
            include "productsDisplay.php";
           if(empty($_SESSION['username'])){
               header("Location:index.php"); }
               ?>
	<title>Searchresults</title>
	
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="container">
  <h1 class="text-center">Search Results</h1>
		<hr>
  <div class="row">

<?php



$output='';
if(isset($_POST['search'])){
    $searchkey= $_POST['search'];
    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);

    $query = mysqli_query($conn,"SELECT * FROM products WHERE productName LIKE '%$searchkey%'") or die("Could not search!");
    $count = mysqli_num_rows($query);

    if($count == 0){?>
      <div class="alert-danger">
      <h5 class="text-center"><?php echo "No products found !"?></h5>
       </div>
    <?php }
    else{
        while($row=mysqli_fetch_array($query)){
          ?>
          <div class="col-md-4 product-grid">
          <div>
            <a href="#">
               <?php echo '<img src="../img/'.$row["Image"].'" class="img-fluid fit-image">'?>
            
            </a>
          </div>
          
          <h5 class="text-center"><?php echo  $row['productName']?></h5>
          <h6 class="text-center"><?php echo  $row['Description']?></h5>
          
  
          <h5 class="text-center">EUR <?php echo $row['Price']?></h5>
          <div class="card-body">
          <button class="btn buy">BUY</button>
          </div>
        </div>
        
<?php
        }
    }
}
?>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</body>
</html>