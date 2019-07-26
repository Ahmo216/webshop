<!DOCTYPE html>
<html>
<head>
<?php include "navbaruser.php";
            include "../loginlog.php";
            include "UserproductDisplay.php";
           if(empty($_SESSION['username'])){
               header("Location:../index.php"); }
               ?>
	<title>TV Shop</title>
	
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center">TV shop</h1>
		<hr>

		<div class="row">
                <?php if($checkResults>0){
		  
                    while($row=mysqli_fetch_assoc($results))
                    {
                        if($row['Category']==='tv'){
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
	 }     ?>
		</div>

	</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
   
</body>
</html>