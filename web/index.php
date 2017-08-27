<!-- vymazani souboru index.html -->
<?php unlink('index.html'); ?>

<!-- stazeni souboru index.html-->
<?php error_reporting(E_ALL);?>

<?php

 $source = "https://raw.githubusercontent.com/bedjan/mamka/master/web/index.html";
 $destination = "index.html";

 $data = file_get_contents($source);
 $file = fopen($destination, "w+");
 fputs($file, $data);
 fclose($file);

?>

<!-- pripadne vytisteni znaku primo <?php echo '<p>Vitejte</p>'; ?> -->

<!-- zobrazeni souboru index.html-->
<?php require ('index.html'); ?>
