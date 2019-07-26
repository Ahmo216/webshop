<!doctype html>
<html>
    <head>
        <?php include "navbaruser.php";
            include "../loginlog.php";
            include "UserproductDisplay.php";
           if(empty($_SESSION['username'])){
               header("Location:index.php"); }
               ?>
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<link rel="stylesheet"  href="style.css">
		
         
         <title>Products</title>
        
	</head>
	<body>
	
	<div class="container">
	<div class="container">
    <div class="jumbotron text-center mt-5">
    <h1>Welcome <?php echo $_SESSION['username']; ?>! <br> </h1>
    <h4> You have <?php echo $_SESSION['type']?> privileges </h4>
    </div>
    </div>
			   
			  
				
				

			 
			 

	  </div>
           
        
       
         
   
	 

			
			
			   
			   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>




     











     
      

        
      
      

       
       
 
