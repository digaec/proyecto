<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password', 'nombre', 'tipo'];
    
    public function verificarUsuario($email, $password)
    {
        $usuario = $this->where('email', $email)->first();
        
        if ($usuario && password_verify($password, $usuario['password'])) {
            return $usuario;
        }
        
        return false;
    }
}