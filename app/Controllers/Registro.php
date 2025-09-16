<?php
namespace App\Controllers;

use App\Models\UsuarioModel;

class Registro extends BaseController
{
    public function index()
    {
        // Chequeo de login y redirección
        if (session()->get('logueado')) {
            return redirect()->to('/productos');
        }
        
        return view('registro');
    }
    
    public function crear()
    {
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'tipo' => 'user' // tipo de usuario por defecto
        ];
        
        $usuarioModel = new UsuarioModel();
        
        try {
            $usuarioModel->insert($datos);
            return redirect()->to('/login')->with('success', 'Registro Ok.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'error de registro');
        }
    }
}