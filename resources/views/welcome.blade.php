<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Within</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header -->


<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="nav_img" src="img/worldswithin.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Buy Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Trailer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sample</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Discord</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="app">
    <world-component></world-component>
</div>



<script src="{{ asset('js/app.js') }}"></script>

<script>

    function colaps(){
        var com = document.getElementById("traitsxyzhahaha");
        var mar = document.getElementById("mobilemain");
        var icn = document.getElementById("angle");



        if(com.style.display === "none"){
            com.style.display = "block";
            mar.style.marginTop = "1050px";
            icn.classList.add("fa-angle-up");
            icn.classList.remove("fa-angle-down");
        }else{
            com.style.display = "none";
            mar.style.marginTop = "630px";
            icn.classList.add("fa-angle-down");
            icn.classList.remove("fa-angle-up");
        }
    }
</script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
