<?php
namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
        // Verificar login
        if (!session()->get('logueado')) {
            return redirect()->to('/login')->with('error', 'sesión no iniciada');
        }
        
        $productosModel = new ProductosModel();
        $data['productos'] = $productosModel->findAll();
        
        echo view('header');
        echo view('navbar');
        echo view('productos/productos', $data);
        echo view('footer');
    }
    
    public function detalle($id = null)
    {
        // Chequear login
        if (!session()->get('logueado')) {
            return redirect()->to('/login')->with('error', 'Sesión no iniciada');
        }
        
        $productosModel = new ProductosModel();
        $producto = $productosModel->find($id);
        
        if (!$producto) {
            return redirect()->to('/productos')->with('error', 'id de producto inexistente');
        }
        
        $data = [
            'producto' => $producto,
            'esAdministrador' => session()->get('tipo') === 'admin'
        ];
        
        echo view('header');
        echo view('navbar');
        echo view('productos/detalle', $data);
        echo view('footer');
    }
    public function nuevo()
    {
        // Se chequean permisos de admin
        if (!session()->get('logueado')) {
            return redirect()->to('/login')->with('error', 'Sesión no iniciada');
        }
        
        if (session()->get('tipo') !== 'admin') {
            return redirect()->to('/productos')->with('error', 'Se requieren permisos de administrador');
        }
        
        echo view('header');
        echo view('navbar');
        echo view('productos/nuevo');
        echo view('footer');
    }
    
    public function guardar()
    {
        
        if (!session()->get('logueado')) {
            return redirect()->to('/login')->with('error', 'Sesión no iniciada');
        }
        
        if (session()->get('tipo') !== 'admin') {
            return redirect()->to('/productos')->with('error', 'Se requieren permisos de admin');
        }
        
        // Validación de datos
        $reglas = [
            'nombre' => 'required|min_length[3]|max_length[100]',
            'descripcion' => 'required|min_length[10]',
            'codigo' => 'required|is_unique[productos.codigo]',
            'precio' => 'required|decimal',
            'stock' => 'required|integer'
        ];
        
      
        
        $productosModel = new ProductosModel();
        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'codigo' => $this->request->getPost('codigo'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock')
        ];
        
        if ($productosModel->insert($datos)) {
            return redirect()->to('/productos')->with('success', 'Producto agregado correctamente');
        } else {
            return redirect()->back()->withInput()->with('error', 'Error al agregar el producto');
        }
    }

    public function eliminar($id = null)
    {
        
        if (!session()->get('logueado')) {
            return redirect()->to('/login')->with('error', 'Sesión no iniciada');
        }
        
        if (session()->get('tipo') !== 'admin') {
            return redirect()->to('/productos')->with('error', 'Se requiren permisos de admin');
        }
        
        $productosModel = new ProductosModel();
        
        
        if ($productosModel->delete($id)) {
            return redirect()->to('/productos')->with('success', 'ok');
        } else {
            return redirect()->to('/productos')->with('error', 'Error al eliminar el producto');
        }
    }
    
        
}