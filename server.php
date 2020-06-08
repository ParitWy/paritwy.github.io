<style type=”text/css”>
.header{
    font-size: 50px;
}
body{
    background-image: url('photo-1579546929518-9e396f3cc809.jpg');
    background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
    height: 100%;
    text-align: center;
    font-family: 'Roboto',sans-serif;
}
</style>
<?php
$pseudo = $_POST('gmail')
echo "<h1 class = 'header'>Bienvenue ".$pseudo."</h1>"
?>