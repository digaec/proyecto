<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body { 
            font-family: Arial; 
            max-width: 400px; 
            margin: 100px auto; 
            padding: 20px; 
            background-color: #f5f5f5;
        }
        .register-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .error { 
            color: #d32f2f; 
            margin: 10px 0; 
            padding: 10px;
            background-color: #ffebee;
            border-radius: 4px;
            border: 1px solid #ffcdd2;
        }
        .success { 
            color: #388e3c; 
            margin: 10px 0; 
            padding: 10px;
            background-color: #e8f5e8;
            border-radius: 4px;
            border: 1px solid #c8e6c9;
        }
        input { 
            width: 100%; 
            padding: 12px; 
            margin: 8px 0; 
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button { 
            background: #388e3c; 
            color: white; 
            padding: 12px; 
            border: none; 
            width: 100%; 
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background: #2e7d32;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        .login-link a {
            color: #1976d2;
            text-decoration: none;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Crear Cuenta</h2>
        
        <?php if (session('error')): ?>
            <div class="error"><?= session('error') ?></div>
        <?php endif; ?>
        
        <?php if (session('success')): ?>
            <div class="success"><?= session('success') ?></div>
        <?php endif; ?>
        
        <form action="<?= base_url('registro/crear') ?>" method="post">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        
        <div class="login-link">
            <p>¿Ya tienes cuenta? <a href="<?= base_url('login') ?>">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>