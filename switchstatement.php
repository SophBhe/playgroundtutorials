    <?php 
      $title = ' Switch Statement';
      include 'includes/header.php';
     ?>
    <h1>Switch Statements</h1>

    <?PHP
        $grade = 'A';

        switch ($grade) {
            case 'A':
                echo '<h2 style="color:green"> You are a super star</h2>';
                break;
            case 'B':
                 echo '<h2 style="color:blue"> You did well!!</h2>';
                 break;
            default:
                echo '<h2 style="color:red"> Work Smarter you have failed</h2>';
                break;
        }
    
    ?>
<?php 
      require 'includes/footer.php';
    ?>