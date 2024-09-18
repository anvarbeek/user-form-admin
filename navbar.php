<?php include "header.php"; ?>
<div class="navbar navbar-light bg-color d-flex justify-content-around">
    <div class="m-2">
        <h1 class="text-primary ">Uz <span class="text-secondary">Coder</span></h1>
    </div>
    <div class="navbar nav-pills "> 
        <ul class="nav gap-5">
            <li class="nav-item"><a href="index.php" class="text-decoration-none text-dark fs-3">Home</a></li>
            <li class="nav-item"><a href="about.php" class="text-decoration-none text-dark fs-3">About</a></li>
            <li class="nav-item"><a href="services.php" class="text-decoration-none text-dark fs-3">Services</a></li>
            <li class="nav-item"><a href="contact.php" class="text-decoration-none text-dark fs-3">Contact</a></li>
        </ul>
    </div>
    <div class="btn ">
        <a href="login.php" class="btn btn-outline-primary ">LOG IN</a>
        <a href="registration.php" class="btn btn-primary ">SIGN UP</a>
    </div>
</div>

<?php
include "footer.php"; ?>