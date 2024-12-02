<?php
    namespace app\controllers;

    class UsuariosController extends Controller{

        public function index(){
            $this->view('usuarios');
        }

        public function store($params){
            var_dump($params->email);
        }

        public function update(){
            var_dump('update usuarios testeeee');
        }
    }