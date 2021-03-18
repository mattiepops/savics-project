<?php
  include_once('connection.php');

  $answer = $bdd -> query('SELECT first_name, last_name, gender, age, city, country FROM records ORDER BY ID DESC LIMIT 0, 10');

?>

<div class='table-records'>

    <h2>List of Medical Records</h2>

    
            <?php
                while ($data = $answer -> fetch()){
                    echo "<p>" . strip_tags($data['first_name']) . " " . strip_tags(strtoupper($data['last_name'])) . " (" . strip_tags($data['gender']) . "), ". strip_tags($data['age']). " - ". strip_tags($data['city'])."(". strip_tags($data['country']).")</p>";
                }
            ?>
    
</div>