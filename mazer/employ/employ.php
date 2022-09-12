<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Afoakwa Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <link rel="stylesheet" href="../dboard/dashboard.css">
    <link rel="stylesheet" href="../dboard/bootstrap.css">
    <link rel="stylesheet" href="../dtables/datatable.css">



</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo" style="width: 100%;">
                            <a href="../index.html" style="font-size: 22px; text-decoration: none;"><img src="../images/logo/logo.png" alt="" srcset="">Lad Brothers</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="../index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>


                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Databases</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="../userdb/user.php" style="text-decoration: none;">Users Database</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../formdb/form.php" style="text-decoration: none;">Forms Database</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="employ.php" style="text-decoration: none;">Employees DB's
                                    </a>
                                </li>

                            </ul>
                        </li>





                        <li class="sidebar-item  ">
                            <a href="ui-file-uploader.html" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>CreateUser</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="ui-file-uploader.html" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>Log Out</span>
                            </a>
                        </li>


                        <li class="sidebar-item  " style="bottom: 40px;width: 80%;position: absolute;">
                            <a href="ui-file-uploader.html" class='sidebar-link'>
                                <img src="../images/faces/1.jpg" alt="" style="width: 10%;">
                                <span>Admin Afoakwa</span>
                            </a>
                        </li>

                        
                    </ul>
                </div>

            </div>
        </div>









        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    

                    
                    <i class="bi bi-justify fs-3" style="float: right; margin-top:8px"></i>
                    
                </a>


            </header>

            <div class="page-heading" style="margin-top: -5px;">
                <h3>Application History</h3>
            </div>

            
            <div class="page-content">


                <div class="table-container" style="background-color: #fff; padding:30px">

                    <div style="text-align: center;">
                        <h4>Users Database History</h4>
                    </div>




                    <table id="example" class="display nowrap" style="width:100%; font-size:14px; margin-top:20px">
                        <thead style="background-color: #435ebe; color:#fff">
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Extn.</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger</td>
                                <td>Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                                <td>5421</td>
                                <td>t.nixon@datatables.net</td>
                            </tr>
                            <tr>
                                <td>Garrett</td>
                                <td>Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                                <td>8422</td>
                                <td>g.winters@datatables.net</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>















        </div>
    </div>












    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js" integrity="sha512-Tkt/sYlAym9X81DPqqbCjU6bMl9HmsehhtxjnZu0K1TN9Ygu8h2D7jZbn59lbDNbbIG7DUukGkjKJbp/wDpKGg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../dboard/dashboard1.js"></script>
    <script src="../dboard/dashboard2.js"></script>

    <script src="../dtables/datatable.js"></script>




    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>
</body>

</html>