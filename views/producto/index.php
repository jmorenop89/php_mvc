<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Productos</title>
</head>
<body>
    <h1>Lista Productos</h1>
    <table border="1" width="50%">
        <tr>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Stock</td>
        </tr>
        <?php foreach($list as $val): ?>
        <tr>
           <td><?php echo $val['name'] ?></td>
            <td><?php echo $val['price'] ?></td>
            <td><?php echo $val['stock'] ?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>