<div class="container-fluid text-light p-3 d-flex align-items-center justify-content-between sticky-top" style="background:#191975;">
    <h3 class="mb-0 h-font">Taj Hotel</h3>
    <a href="logout.php" class="btn btn-light btn-sm" style="color: white; background-image: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);">LOG OUT</a>
</div>
<div class=" hj col-lg-2  border-top border-3 border-secondary" style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2 text-light">ADMIN PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <!-- <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="settings.php">Settings</a>
                    </li>

                </ul>
            </div> -->
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" style="color: white; background-image: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);"id="adminDropdown">
                <ul class="nav nav-pills flex-column custom-nav-pills"style="color: white; background: linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);">
                    <li class="nav-item">
                        <a class="nav-link text-white border-bottom" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white border-bottom" href="#" style="color: #191975;;">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white border-bottom" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white border-bottom" href="settings.php">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 </div> 
 <style>
    .hj{
        color: white; 
        background-image: "linear-gradient(to top, #aa7938, #aa7938 33%, #d29751)";
    }
    #dashboard-menu{
        color: white; 
    background: "linear-gradient(to top, #aa7938, #aa7938 33%, #d29751)";
    }
    .custo
    m-nav-pills .nav-link {
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    transition: background-color 0.2s ease-in-out;
}

.custom-nav-pills .nav-link:hover {
    background-color: #191975;
}

.custom-nav-pills .nav-item {
    margin-bottom: 0.25rem;
}

.custom-nav-pills .nav-item:last-child {
    margin-bottom: 0;
}
.nav-link.text-white.border-bottom {
    color: #191975; 
    color: white; 
    background: "linear-gradient(to top, #aa7938, #aa7938 33%, #d29751);"/* Change this to the desired color */
}
</style>
