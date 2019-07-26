<!doctype html>
<html>
<head>
    <?php
    
    include "navbaradmin.php";
    include "upload.php"?>
    
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add products</title>
</head>
    <body class="bg-light">
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2 text-center">Add products</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" action="addproducts.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    
                                    <input type="text" class="form-control col-6" name="inputName" placeholder="name of the product" required="" value="">
                                </div>
                                <select name="Category" class="custom-select">
                                <option selected>Choose Category</option>
                                <option value="cellphones">Cellphones</option>
                                <option value="Laptops">Laptops</option>
                                <option value="tv">TV</option>
                                </select>
                                

                                <div class="form-group">
                                    
                                    <input type="text" class="form-control col-3 mt-3" name="price" placeholder="Enter price"  required="">
                                </div>
                                <div class="form-group">
                                <input type="hidden" name="size" value="1000000">
                                <input type="file" name="image" >
                                <textarea name="description" cols="40" rows="4" placeholder="Describe product"></textarea>
                            
                                </div>
                                     
                                <button type="submit" class="btn btn-dark btn-lg float-right mt-2" name="upload-btn">Add product</button>
                               </div>
                               </form>
                                                            
                           
                        </div>
                    </div>
                </div>
            </div>
           

        </div>
        
    </div>
  
</div>
                               
                                
                                
  
                                                          
  
                                
                                
                            

   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                           
                                 
                               
                            
                           
                                
                               
                               
                                
                               
           
        
    </body>
</html>
