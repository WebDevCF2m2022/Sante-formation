<?php
namespace model;

class Autoloader
{
   static function register(){
       spl_autoload_register(array(__CLASS__,'autoload'));
   }

    /**
     * returns a class name as an argument and then includes the file containing the corresponding class
     * @param $class_name
     * @return void
     */
   static function autoload($class_name)
   {
       if (strpos($class_name, __NAMESPACE__ . '\\') === 0) {
           $class_name = str_replace(__NAMESPACE__ . '\\', '', $class_name);
           $class_name = str_replace('\\', '/', $class_name);
           require 'model/' . $class_name . '.php';
       }
   }

}