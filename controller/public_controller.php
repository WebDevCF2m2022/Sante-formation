<?php

require_once '../view/public_view/homepage.php';

//include menu dans toute le page

if(isset($_GET['view'])){
    switch($_GET['view']){
        case 'accueil':
                include "../view/public_view/homepage.php";
                break;
        case 'action':
                include "../view/public_view/action.php";
                break;
        case 'agenda':
                include "../view/public_view/agenda.php";
                    break;       
        case 'contact':
                include "../view/public_view/contact.php";
                    break;
        case 'donation':
                include "../view/public_view/donation.php";
                    break;
        case 'formation':
                 include "../view/public_view/formation.php";
                    break;
        
        default:
           include_once "../view/public_view/homepage.php";
    }
}



