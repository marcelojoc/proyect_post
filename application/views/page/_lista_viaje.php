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

<?php echo form_open('articulos/lista/valor');?>

<?php echo form_label('Nombre', 'username');?>

<?php 
$data = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => 'johndoe',
        'maxlength'     => '50',
        'size'          => '50',
        'style'         => 'width:20%'
);

echo form_input($data);
?>
<input type="text">
<?php echo form_submit('elnombre', 'enviar');?>

<?php echo form_close();?>
</body>
</html>