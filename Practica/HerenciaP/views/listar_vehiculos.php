<!DOCTYPE html>
<html>
<head>
    <title>Velocity C.A - Lista de Vehículos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Vehículos - Velocity C.A</h1>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio Base</th>
            <th>Impuesto</th>
        </tr>
         <?php foreach ($vehiculos as $vehiculo): 
            $vehiculoData = $vehiculo->mostrarDetalles();?>
            
        <tr>
           <td><?php echo $vehiculoData['tipo'] ?></td>
           <td><?php echo $vehiculoData['marca'] ?></td>
           <td><?php echo $vehiculoData['modelo'] ?></td>
           <td><?php echo $vehiculoData['precio'] ?></td>
           <td><?php echo $vehiculoData['descuento'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>