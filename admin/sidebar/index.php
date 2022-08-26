<?php
require_once ('C:/xampp/htdocs/php-master/connection.php');
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>admin panel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Electronic Management System</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Sales</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Home</a>
                    
                </li>
              
              
                <li>
                    <a href="#">About</a>
                </li>
              
              
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                          
                            <li class="nav-item">
                                <a class="nav-link" href="C:/xampp/htdocs/php-master/admin/logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 align="center"><?php echo $_SESSION['success']; ?></h1>
	<h2 align="center">Welcome to the home page <b style="color:green;"><?php echo $_SESSION['username'];?></b></h2>
	
       <hr>
 
            <h2>SALES</h2>
            <?php
require_once ('C:/xampp/htdocs/afizaproject/db/config.php');
$sql="select * from users_items ";
$res=mysqli_query($con,$sql);
?>
<hr>					
<table class="products-table">
  <thead>
    <tr>
      <th>#</th>
      <th>ID</th>
      <th>items_id</th>
      <th>status</th>
     
 
    </tr>
  </thead>
						 <tbody>
             
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							 
							   <td><?php echo $row['user_id']?></td>
                               <td><?php echo $row['item_id']?></td>
							   <td><?php echo $row['status']?></td>
							   <td>
    <tr>
    
   
    <?php } ?>
  </tbody>
</table>

          
            
    </div>

              </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <style>
    
table.products-table {
  border-collapse: separate;
  border-radius: 10px;
  border-spacing: 0;
  box-shadow: 0 0 25px #aaa;
  margin: 4rem 0;
  width: 100%;
}

th {
  background-color: #fff;
  font-weight: normal;
  border-bottom: 1px solid #d1d1d1;
}

th,
td {
  line-height: 1.5;
  padding: 0.75em;
  text-align: center;
}

td {
  background-color: white;
}

td:first-child {
  font-weight: bold;
  text-align: left;
}

tbody tr:nth-child(odd) td {
  background-color: #f6f6f6;
}

thead th:first-child {
    border-top-left-radius: 10px;
    text-align: left;
}

thead th:last-child {
    border-top-right-radius: 10px;
}

tbody tr:last-child td:first-child {
  border-bottom-left-radius: 10px;
}

tbody tr:last-child td:last-child {
  border-bottom-right-radius: 10px;
}

/* Stack rows vertically on small screens */
@media (max-width: 30rem) {
  /* Hide column labels */
  thead tr {
    position: absolute;
    top: -9999rem;
    left: -9999rem;
  }

  tbody tr td {
    border-radius: none;
    text-align: left;
  }

  tbody tr:first-child td:first-child {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  tbody tr:last-child td:last-child {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  /* Leave a space between table rows */
  tr + tr td:first-child {
    border-top: 1px solid #d1d1d1;
  }

  /* Get table cells to act like rows */
  tr,
  td {
    display: block;
  }

  td {
    border: none;
    /* Leave a space for data labels */
    padding-left: 50%;
  }

  /* Data labels */
  td:before {
    content: attr(data-label);
    display: inline-block;
    font-weight: bold;
    line-height: 1.5;
    margin-left: -100%;
    width: 100%;
  }
}

        </style>
</body>

</html>