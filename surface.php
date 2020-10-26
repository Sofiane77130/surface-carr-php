<?php
$longueur= $_POST['longueur'];
$largeur= $_POST['largeur'];
$surface= $longueur * $largeur;
echo $surface;
?>
<!-- calcul de la surface -->

<!-- L'utilisateur rentre ses distances afin de calculer la surface -->
<form  action="surface.php" method="Post">
Longueur: <input type="number" name="longueur"><br>
Largeur: <input type="number" name="largeur"> <br>
<input type="submit" value="calcul">
</form>