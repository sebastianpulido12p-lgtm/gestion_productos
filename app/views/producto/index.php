<h1> Listado Producto </h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria Producto</th>
        <th>Proveedor</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['producto_nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['producto_categoria'] ?></td>
                <td><?= $producto['proveedor_nombre'] ?></td>
            </tr>
        <?php endforeach; ?>


</table>