<?php
    namespace app\routes;

use app\helpers\Request;
use app\helpers\Uri;
use Exception;

    class Router{

        const CONTROLLER_NAMESPACE = 'app\\controllers';

        public static function load(string $controller, string $method){

            $controllerNamespace = self::CONTROLLER_NAMESPACE.'\\'.$controller;
            try{
                if(!class_exists($controllerNamespace)){
                    throw new Exception("O Controller {$controller} não existe");
                }

                $controllerInstance = new $controllerNamespace;

                if(!method_exists($controllerInstance, $method)){
                    throw new Exception("O método {$method} não exite no Controller {$controller}");
                }

                $controllerInstance->$method((object)$_REQUEST);

            }catch (\Throwable $th){
                echo $th->getMessage();
            }

        }

        public static function routes():array{
            return [
                'get' => [
                    '/' => fn() => self::load('HomeController', 'index'),
                    '/usuarios' => fn() => self::load('UsuariosController', 'index'),
                ],

                'post' => [
                    '/usuarios' => fn() => self::load('UsuariosController', 'store'),
                ],

                'put' => [
                    '/usuarios' => fn() => self::load('UsuariosController', 'update'),
                ],

                'delete' => [

                ]
            ];
        }

        public static function execute(){
            try{
                $routes = self::routes();
                $request = Request::get();
                $uri = Uri::get('path');       
                
                if(!isset($routes[$request])){
                    throw new Exception("A Rota não exite");
                }

                if(!array_key_exists($uri, $routes[$request])){
                    throw new Exception("A Rota não exite");
                }

                $router = $routes[$request][$uri];

                if(!is_callable(($router))){
                    throw new Exception("Route {$uri} is not callable");
                }

                $router();

            } catch (\Throwable $th){
                echo $th->getMessage();
            }
        }
    }