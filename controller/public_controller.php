<?php

// include menu dans toute la page
if (isset($_GET['view'])) {
    switch ($_GET['view']) {
        case 'homepage':
            include "../view/public_view/homepage.php";
            break;
        case 'asbl':
            include "../view/public_view/asbl.php";
            break;
        case 'actions':
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
        case 'formations':
            include "../view/public_view/formation.php";
            break;
        case 'admin':
            include "../view/public_view/admin.php";
            break;
        default:
            include_once "../view/public_view/homepage.php";
            break;
    }
} else {
    include_once "../view/public_view/homepage.php";
}

?>


