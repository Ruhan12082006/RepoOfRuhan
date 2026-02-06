<!DOCTYPE html>
   <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    $md = "Use an appropriate md";
    $title = "contact page";
    include 'header1.php'; 
    ?>
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
    <main>
        <div class="textconatct">
        <h1>Contact Us</h1>
        <p>Telephone: +12345678</p>
        <p>Email: xyz@gmail.com</p>
        <div>
    </main>
<?php include 'footer1.php'; ?>