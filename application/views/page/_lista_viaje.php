<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>con datos de la Bd</title>
</head>
<body>
    
    <ul>

 <?php foreach ($datos as $item) { ?>


        <li><?=$item->nombre ."-". $item->lugar ."-". $item->prueba?></li>

<?php }; ?>

</ul>
</body>
</html>