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

    <?php foreach ($detalleProductos as $producto): ?>
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



<h1>Listado Producto</h1>

<table border="1">
    <tr>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>Categoria Nombre</th>
        <th>Proveedor</th>
    </tr>

    <?php if (!empty($productos)): ?>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['producto_nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['categoria_nombre'] ?></td>
                <td><?= $producto['proveedor_nombre'] ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>


<h1>Detalle del producto</h1>

<table border="1">
    <tr>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>ID Categoría</th>
        <th>Categoría Nombre</th>
        <th>ID Proveedor</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($detalleProductos as $producto): ?>
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




