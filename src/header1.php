<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">

        <title><?php echo $title; ?></title>
     
        <title>
            <?php if(isset($title) && !empty($title))
            {
                echo $title;
            }
            else
                {
                    echo "DEFAULT TITLE TAG";
                }
            ?>
        </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #f4f4f4;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1{
            padding-top: 20px; 
        }
        .container-fluid
        {
            background-color: #f4f4f4;
        }
        .bg-body-tertiary{
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index1.php">Brand Name</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./contact1.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about1.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./ex3.php">Login</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
</header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
