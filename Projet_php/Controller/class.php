<?php

class Router {
    private $routes = [];

    public function verification($url, $handler) {
        $this->routes[$url] = $handler;
    }

    public function handle_request($url) {
        if (isset($this->routes[$url])) {
            call_user_func($this->routes[$url]);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
        }
    }
}

class controller {
    public function index() {
        $model = new model();
        $data = $model->getData();
        $this->renderView('home', $data);
    }

    private function view($view, $data) {
        extract($data);
        include "views/$view.php";
    }
}

class model {
    public function getData() {
        return [
            'title' => 'Accueil',
            'content' => 'Bienvenue !'
        ];
    }
}