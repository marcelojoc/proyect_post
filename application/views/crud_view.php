<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <title>crud Inicial</title>
</head>
<body>


<?php
echo $output;
?>
</body>
</html>