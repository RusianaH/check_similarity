<!-- Sidebar -->
<ul class="sidebar navbar-nav">


            <li class="nav-item ">
            <a class="nav-link" href="index.php">
            <h4><i class="fab fa-ello"></i></h4>
            <span>Halo, <?php echo $_SESSION['role']; ?></b></spn>
            </a>
            </li>
            <li class="nav-item ">
             <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</spn>
            </a>
            </li>
    <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-folder-open"></i>
            <span>File</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="tambah_judul.php" >New File</a>
            <a class="dropdown-item" href="list.php" >List Files</a>
        </div>
        
    </li>
    <li class="nav-item">
        <a class="nav-link" href="search-admin.php">
            <i class="fa fa-check-circle"></i>
            <span>Deteksi plagiat</span></a>
    </li>
    
    

    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="logout.php" >Logout</a>
    </li>
</ul>
