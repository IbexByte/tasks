<?php 

class route {
    public $get = [] ; 
    public $post = [] ; 

    public static function make(){
      
       $route = new self;
       return $route;
    }

    public function get($key, $route){
       $this->get[$key] = $route;
       return $this; 
    }
    public function post($key, $route){
        $this->post[$key] = $route;
        return $this; 
    }

    public function resolve($uri , $method){
         
        if (array_key_exists($uri,$this->{$method})) {
          $action =   $this->{$method}[$uri] ;
          $this->callAction(...$action);
        }else{
            throw new Exception("page not found");
        }
    }

    public function callAction($controller , $action ){
         $controller = new $controller;
         $controller->{$action}(); 
    }
}