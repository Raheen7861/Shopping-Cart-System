<?php
    
    require 'connection.php';
  
   ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Id</th><th>user_id</th><th>item_id</th><th>status</th>
                        </tr>
                       <?php 
                       $sql ="SELECT * FROM users_items";
                        $res=mysqli_query($con,$sql) or die(mysqli_error($con));
                       
                     
                       while($row=mysqli_fetch_array($res)){
                           
                         ?>
                        <tr>
                            <th><?php echo $row['id'] ?></th><th><?php echo $row['user_id']?></th><th><?php echo $row['item_id']?></th><th><?php echo $row['status']?></th>
                           
                        </tr>
                       <?php }?>
                        <tr>
                            

                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="">Projectworlds</a> Store. All Rights Reserved.</p>
                   <p></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
