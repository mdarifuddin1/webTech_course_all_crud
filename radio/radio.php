<?php 

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php 
                
                if (isset( $_SESSION['status'])) {
                    
                    echo "<h3>".$_SESSION['status']."</h3>:";
                    unset( $_SESSION['status']);
                }
                
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Insert Radio button valu into database</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post" >
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <input type="radio" name="gander" value="Male"/> Male
                                <input type="radio" name="gander" value="Female"/> Female
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger mt-3 " type="submit" name="save_radio" >Save data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>