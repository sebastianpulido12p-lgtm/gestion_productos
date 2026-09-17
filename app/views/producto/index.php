<h1>Listado Producto</h1>

<table border="1">
    <tr>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>ID Categoría</th>
        <th>Categoría</th>
        <th>ID Proveedor</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['producto_nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['id_categoria'] ?></td>
            <td><?= $producto['categoria_nombre'] ?></td>
            <td><?= $producto['id_proveedor'] ?></td>
            <td><?= $producto['proveedor_nombre'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>


<h1>Producto Consultado</h1>

<table border="1">
    <tr>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>ID Categoría</th>
        <th>Categoría</th>
        <th>ID Proveedor</th>
        <th>Proveedor</th>
    </tr>

    <?php if (!empty($detalleProducto)): ?>
        <tr>
            <td><?= $detalleProducto['producto_nombre'] ?></td>
            <td><?= $detalleProducto['precio'] ?></td>
            <td><?= $detalleProducto['id_categoria'] ?></td>
            <td><?= $detalleProducto['categoria_nombre'] ?></td>
            <td><?= $detalleProducto['id_proveedor'] ?></td>
            <td><?= $detalleProducto['proveedor_nombre'] ?></td>
        </tr>
    <?php endif; ?>
</table>

