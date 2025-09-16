<?php
if (!function_exists('es_admin')) {
    function es_admin()
    {
        return session('tipo_usuario') === 'admin';
    }
}

if (!function_exists('esta_logueado')) {
    function esta_logueado()
    {
        return session('logged_in') === true;
    }
}

if (!function_exists('requerir_admin')) {
    function requerir_admin()
    {
        if (!es_admin()) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Acceso no autorizado');
        }
    }
}