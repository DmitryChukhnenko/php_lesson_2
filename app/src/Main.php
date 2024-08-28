<?php

use Request\Request;
use Routing\Route;

class Main {
    private Route $route;
    private Request $request;

    public function Main() : void {
        $this->init();

        $namespace = $this->route->getParent();
        $base = $this->route->getBase();
        if ($base) {            
            $ar = [];
            foreach ($namespace as $str) {
                $str_ar = explode('-', implode('', explode('_', $str)));
                $res = '';
                for ($i=0; $i < count($str_ar); $i++) { 
                    $res = $res . ucfirst($str_ar[$i]); 
                }
                array_push($ar, $res);
            }            

            $class = 'Controllers\\' . implode('\\', $ar) . '\\' . $base[0];
            $object = new $class();
            
            if ($this->request->getServer()->isGet()) {
                $object->getRequest($this->request->getGet());
            }
            elseif ($this->request->getServer()->isPost()) {
                $object->postRequest($this->request->getPost());
            }
        }
    }

    private function init() : void {
        include 'Autoload.php';
        Autoload::registrate();

        $this->request = new Request();
        $this->route = new Route($_SERVER['REQUEST_URI']);
    }
}