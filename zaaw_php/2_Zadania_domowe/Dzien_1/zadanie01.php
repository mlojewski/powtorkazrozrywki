<?php


class AutoLoadFunction {
    
    //Function autoload
    
    //end 
    
    public function getClient(){
        return new Client();
    }
    
    public function getAdmin(){
        return new Admin();
    }
    
}