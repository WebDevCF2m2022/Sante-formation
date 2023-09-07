<?php
 use model\ManagerClass\AsblManager;

 $categorieAsbl =new AsblManager();
 $cat = $categorieAsbl->getOneById(1);
 $catALL=$categorieAsbl->getAll();

 var_dump($categorieAsbl, $catALL);
