<?php

namespace model\AbstractsClass ;



class AbstractsMapping
{

    public function __construct(array $tab){
           $this->hydrate($tab);
    }

    /**
     * creation of our hydration, starting from an associative array and its keys, we'll regenerate the names of existing setters
     * @param array $assoc
     * @return void   the value
     */
    protected function hydrate(array $assoc){
        foreach ($assoc as $key => $valeur){
            $name = "set". str_replace("_","",ucfirst($key));
            if(method_exists($this,$name)){
                $this->$name($valeur);
            }
        }
    }



}