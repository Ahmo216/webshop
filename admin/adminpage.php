<!doctype html>
<html>
    <head>
        <?php include "navbaradmin.php";
            include "../loginlog.php";
            if(empty($_SESSION['username'])){
                header("Location:index.php");
 
            }
        ?>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="stylesheet" href="design\css\style.css">

    </head>
    <body>
    <div class="container">
    <div class="jumbotron text-center mt-5">
    <h1>Welcome <?php echo $_SESSION['username']; ?>! <br> </h1>
    <h4> You have <?php echo $_SESSION['type']?> privileges </h4>
    </div>
    </div>
        
    </body>
</html>