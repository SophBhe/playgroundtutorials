<?php 
      $title = ' For Loop';
      include 'includes/header.php';
     ?>
    <h1>For Loop</h1>

    <?php 
        for($count =0; $count <10; $count++){
            echo '<p>hello  you there </p>';
        }

        for($count =0; $count <10; $count++){
            echo "<p> Count is equal to : $count </p>";

        }


    ?>
    <?php 
      require 'includes/footer.php';
    ?>