    <?php 
      $title = ' While Do While';
      include 'includes/header.php';
     ?>
    <h1>While Do While Statements</h1>

    <?php 
        echo '<p> While Statement</p>';

        $grade = 0;
        while($grade<10){
            echo '<p> I am'. $grade .'</p>';
            $grade++;
        }
        
    ?>

    <?php 
        echo '<p> Do While Statement</p>';
        $grade =0;
        do{
            echo '<p> This is the do While :'.$grade.'</p>';
            $grade++;
        }while($grade<10);
        
    ?>


<?php 
      require 'includes/footer.php';
    ?>