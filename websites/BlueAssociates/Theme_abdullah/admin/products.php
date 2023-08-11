<?php
session_start();
if(isset($_SESSION['loginperson'])){
    $user = $_SESSION['loginperson'];
}else{
    header('Location: login.php');
}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
                include 'blade-navbar.php';
            ?>
        <div id="layoutSidenav">
        <?php
                include 'blade-sidebar.php';
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Package</th>
                                            <th>Price</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Package</th>
                                            <th>Price</th>
                                            <th>Operation</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                        include "dbconn.php";
                                            $orders = "SELECT * from pakages ";
                                            $r_orders = $conn->query($orders);

                                            // $pkgs = "SELECT * from pakages";
                                            // $r_pkgs = $conn->query($pkgs); 


                                            if ($r_orders->num_rows > 0) {
                                                // output data of each row
                                                while($row = $r_orders->fetch_assoc()) {
                                                //   echo "id: " . $row["cntry_id"]. " - Name: " . $row["countryName"].  "<br>";
                                                echo '
                                                <tr>
                                                    <td>'. $row["pkgName"].'</td>
                                                    <td>'. $row["pkgPrice"].'</td>';
                                                    // echo '<td><a class="btn btn-danger" href="update_vinorder.php?id='.$row["pkg_id"].'">Delete</a><a class="btn btn-success" href="update_vinorder.php?id='.$row["pkg_id"].'">Edit</a></td>';
                                                    echo '<td><a class="btn btn-danger">Delete</a><a class="btn btn-success" >Edit</a></td>';
                                                    
                                                echo '</tr>';
                                                
                                                }
                                            }
                                        ?>
                                            
                                       
                                    </tbody>
                                </table>
                                <?php
                                    echo '<td><a class="btn btn-primary" >Add New Product</a></td>';
                                    // echo '<td><a class="btn btn-primary" href="update_vinorder.php?id='.'">Add New Product</a></td>';
                                ?>
                                <?php
                                // session_destroy();
                                $conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; AutoDataRecords 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
