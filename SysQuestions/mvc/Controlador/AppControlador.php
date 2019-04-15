<?php
namespace Controlador;

class AppControlador extends Controlador
{
    public function index()
    {
        $this->visao('inicial/index.php');
    }

    public function contato()
    {
        $this->visao('inicial/contato.php');
    }

    public function login()
    {
        $this->visao('inicial/login.php');
    }


    //Templates

    public function menu()
    {
        $this->visao('templates/menu.php');
    }

    public function footer()
    {
        $this->visao('templates/footer.php');
    }
}
