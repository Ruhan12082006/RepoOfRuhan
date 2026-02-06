<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <?php include 'header1.php';  ?>
</head>
<body>
    <form action="./formprint.php" method="post">
<main class="form-signin w-100 m-auto"> 
    <form> <img class="mb-4" src="./amd.svg" alt="" width="72" height="57"> 
    <h1 class="h3 mb-3 fw-normal">Please Enter Your Name</h1> 
    <div class="form-floating"> <input  class="form-control" name="name1"> 
    <label >First Name</label> 
    </div> 
        <div class="form-floating"> 
            <input class="form-control" name="name2"> 
            <label >Last Name</label>
        </div> 

    <button type="submit">Submit</button>
</form> 
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>