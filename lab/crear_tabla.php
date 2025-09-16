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
    

    $conn->exec($sql);
    

    
    // Insertar algunos datos de ejemplo
    /*$sqlInsert = "INSERT INTO productos (nombre, descripcion, codigo, precio, stock) VALUES 
        ('Laptop HP Pavilion', 'Laptop con 8GB RAM, 256GB SSD, Intel Core i5', 'LP-HP-001', 899.99, 15),
        ('Smartphone Samsung Galaxy', 'Teléfono Android con 6.5 pulgadas, 128GB', 'SS-GAL-002', 499.99, 25),
        ('Auriculares Sony', 'Auriculares inalámbricos con cancelación de ruido', 'AU-SON-003', 199.99, 40),
        ('Monitor LG 24 pulgadas', 'Monitor Full HD con panel IPS', 'MON-LG-004', 179.99, 12),
        ('Teclado Mecánico RGB', 'Teclado gaming con retroiluminación RGB', 'TEC-MEC-005', 89.99, 30)";
    
    $conn->exec($sqlInsert);*/

    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() ;
}

$conn = null;
?>