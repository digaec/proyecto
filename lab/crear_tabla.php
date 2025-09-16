<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    tipo ENUM('user', 'admin') DEFAULT 'user',
    activo TINYINT(1) DEFAULT 1,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP
)";
  /*  // Crear la tabla productos
    $sql = "CREATE TABLE IF NOT EXISTS productos (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        descripcion TEXT,
        codigo VARCHAR(50) NOT NULL UNIQUE,
        precio DECIMAL(10, 2) NOT NULL,
        stock INT(11) NOT NULL DEFAULT 0,
        fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";*/
    
    // Ejecutar la consulta
    $conn->exec($sql);
    
    echo "<div class='success-message'>✅ Tabla 'productos' creada exitosamente.</div>";
    
    // Insertar algunos datos de ejemplo
    /*$sqlInsert = "INSERT INTO productos (nombre, descripcion, codigo, precio, stock) VALUES 
        ('Laptop HP Pavilion', 'Laptop con 8GB RAM, 256GB SSD, Intel Core i5', 'LP-HP-001', 899.99, 15),
        ('Smartphone Samsung Galaxy', 'Teléfono Android con 6.5 pulgadas, 128GB', 'SS-GAL-002', 499.99, 25),
        ('Auriculares Sony', 'Auriculares inalámbricos con cancelación de ruido', 'AU-SON-003', 199.99, 40),
        ('Monitor LG 24 pulgadas', 'Monitor Full HD con panel IPS', 'MON-LG-004', 179.99, 12),
        ('Teclado Mecánico RGB', 'Teclado gaming con retroiluminación RGB', 'TEC-MEC-005', 89.99, 30)";
    
    $conn->exec($sqlInsert);*/
    echo "<div class='success-message'>✅ Datos de ejemplo insertados correctamente.</div>";
    
} catch(PDOException $e) {
    echo "<div class='error-message'>❌ Error: " . $e->getMessage() . "</div>";
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Tabla Productos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 30px;
            width: 90%;
            max-width: 800px;
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border-left: 5px solid #dc3545;
        }
        
        .info-box {
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
        
        .info-box h3 {
            margin-top: 0;
            color: #495057;
        }
        
        .code-block {
            background-color: #2d3e50;
            color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: monospace;
            margin: 15px 0;
        }
        
        .table-structure {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .table-structure th, .table-structure td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }
        
        .table-structure th {
            background-color: #f8f9fa;
            color: #495057;
        }
        
        .table-structure tr:nth-child(even) {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Creación de Tabla Productos</h1>
        
        <?php
        // El código PHP anterior se ejecuta aquí
        ?>
        
        <div class="info-box">
            <h3>📋 Estructura de la tabla creada:</h3>
            <table class="table-structure">
                <tr>
                    <th>Campo</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td>id</td>
                    <td>INT(11) UNSIGNED</td>
                    <td>Llave primaria autoincremental</td>
                </tr>
                <tr>
                    <td>nombre</td>
                    <td>VARCHAR(255)</td>
                    <td>Nombre del producto (no nulo)</td>
                </tr>
                <tr>
                    <td>descripcion</td>
                    <td>TEXT</td>
                    <td>Descripción detallada del producto</td>
                </tr>
                <tr>
                    <td>codigo</td>
                    <td>VARCHAR(50)</td>
                    <td>Código único del producto (no nulo)</td>
                </tr>
                <tr>
                    <td>precio</td>
                    <td>DECIMAL(10, 2)</td>
                    <td>Precio del producto (no nulo)</td>
                </tr>
                <tr>
                    <td>stock</td>
                    <td>INT(11)</td>
                    <td>Cantidad en inventario (valor por defecto: 0)</td>
                </tr>
                <tr>
                    <td>fecha_creacion</td>
                    <td>TIMESTAMP</td>
                    <td>Fecha de creación (automática)</td>
                </tr>
                <tr>
                    <td>fecha_actualizacion</td>
                    <td>TIMESTAMP</td>
                    <td>Fecha de última actualización (automática)</td>
                </tr>
            </table>
        </div>
        
        <div class="info-box">
            <h3>📝 Notas:</h3>
            <ul>
                <li>La tabla se crea en la base de datos <strong>ecom</strong></li>
                <li>El campo <strong>id</strong> es la llave primaria autoincremental</li>
                <li>El campo <strong>codigo</strong> es único para cada producto</li>
                <li>Se han insertado 5 productos de ejemplo</li>
                <li>Los campos de fecha se gestionan automáticamente</li>
            </ul>
        </div>
    </div>
</body>
</html>