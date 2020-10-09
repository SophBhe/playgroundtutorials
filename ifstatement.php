<?php 
      $title = ' If Statments';
      include 'includes/header.php';
     ?>
<h1>If Statements</h1>

    <?php
        echo '<h1> If Statement </h1>';
        $grade = 30;
        
        if($grade >=50){
            echo '<h3 style="color:green"> you have passed!!! </h3>';
        }
        else{
            echo '<h3 style="color:red"> you have failed, work smarter </h3>';
        }

    ?>
<?php 
      require 'includes/footer.php';
    ?>