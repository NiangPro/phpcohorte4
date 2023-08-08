<!-- l'entete de page  -->
<?php 

session_start();

require_once("models/database.php");

$classes = getAllClasses();
require_once("partials/entete.php"); 
// <!-- le contenu de la page  -->
    if (isset($_GET["page"])) {
        // routeur 
        switch ($_GET['page']) {
            case 'profil':
                require_once("controllers/profilController.php");
                break;
            case 'eleve':
                require_once("controllers/eleveController.php");
                break;
            case 'login':
                require_once("controllers/loginController.php");
                break;
                case 'logout':
                    require_once("controllers/logoutController.php");
                    break;
            
            default:
                require_once("controllers/classeController.php");
                break;
        }
    }else{

        require_once("controllers/classeController.php");
    }
// <!-- le pied de page  -->
 require_once("partials/pied.php"); ?>