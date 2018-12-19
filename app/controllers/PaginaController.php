<?php

class Pagina extends Controller
{
    public function __construct()
    {
        // Aqui cargamos el modelo a usar
        // Ejemplo: $this->productModel = $this->model('Product');
       
    }

    public function index()
    {
        
        $data = [
            'titulo' => 'Bienvenido al mini Framework Php MVC'
        ];

        $this->view('modules/inicio', $data);
    }

}