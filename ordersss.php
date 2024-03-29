<?php
// Memulai session
session_start();


// Periksa apakah pengguna telah index
if (!isset($_SESSION['username'])) {
    // Jika belum index, arahkan kembali ke halaman index.php
    header("location: index.html");
    exit();

}


// Jika pengguna sudah index, tampilkan konten dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title> Dashboard</title>
</head>
<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text"> Selamat Datang, <?php echo $_SESSION['username']; ?></span>
        </a>
        <ul class="side-menu top">
            <li >
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li >
                <a href="menu.php">
                    <i class='bx bxs-shopping-bag-alt' ></i>
                    <span class="text">Menu</span>
                </a>
            </li>
            <li class="active">
                <a href="ordersss.php">
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li>
                <a href="reportt.php">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Report</span>
                </a>
            </li>
            
        </ul>
        <ul class="side-menu">
            
            <li>
                <a href="logout.php" class="logout" > 
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            
            
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Orders</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Orders</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        
                    </ul>
                </div>
            
            </div>

            

            <div class="table-data">
                
                <div class="todo">
                    <div class="head">
                        <h3>Orders</h3>
                        <i class='bx bx-plus' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <ul class="todo-list">
                        <li class="completed">
                            <p>Orders List</p>
                            <i class='bx bx-dots-vertical-rounded' ></i>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    

    <script src="script.js"></script>
</body>
</html>
