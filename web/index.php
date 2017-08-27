<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Advokátní Kancelář JUDr. Zdenky Bednářové v Rychnově n.K.</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 </head>
 <body>

<!-- stazeni souboru -->
<?php error_reporting(E_ALL);?>

<?php

 $source = "https://raw.githubusercontent.com/bedjan/mamka/master/web/obsah.html";
 $destination = "obsah.html";

 $data = file_get_contents($source);
 $file = fopen($destination, "w+");
 fputs($file, $data);
 fclose($file);

?>

<!-- pripadne vytisteni znaku primo <?php echo '<p>Vitejte</p>'; ?> -->

<!-- zobrazeni souboru -->
<?php require ('obsah.html'); ?>



 </body>
</html>



