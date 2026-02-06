 
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
    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>

        <!-- Your footer content goes here -->
    </footer>
    </html>