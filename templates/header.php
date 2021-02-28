<?php

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_MySQL</title>
   
    <!-- Bootswatch CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/yeti/bootstrap.min.css" integrity="sha384-mLBxp+1RMvmQmXOjBzRjqqr0dP9VHU2tb3FK6VB0fJN/AOu7/y+CAeYeWJZ4b3ii" crossorigin="anonymous">

    <style>
        h1,h2,h3,h4,h5 {
            margin: 1rem 0;
        }
        .btn, li, a, p {
            font-size: 15.5px;
            font-weight: 400;
        }
        .btn {
            border-radius: 0.25rem;
        }
    </style>
</head>
<body>

<!-- Main nav -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary ">
    
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="index.php"><h1>PHP & MySQL</h1></a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target" aria-controls="nav-target" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse show" id="nav-target" >
        
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_user.php">Add User</a>
                </li>
            </ul>
    </div>

    </div>

</nav>