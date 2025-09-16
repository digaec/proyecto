<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        // productos es la página por defecto si ya está logueado
        if (session()->get('logueado')) {
            return redirect()->to('/productos');
        }
        
        return view('login');
    }
    
    public function auth()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();
        
        if ($usuario && password_verify($password, $usuario['password'])) {
            // Crear sesión
            session()->set([
                'id' => $usuario['id'],
                'email' => $usuario['email'],
                'nombre' => $usuario['nombre'],
                'tipo' => $usuario['tipo'],
                'logueado' => true
            ]);
            
            return redirect()->to('/productos')->with('success', 'Ingreso exitoso');
        }
        
        return redirect()->back()->with('error', 'Clave o usuario incorrecto');
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logout');
    }
}