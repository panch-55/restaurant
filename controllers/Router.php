<?php

class Router
{
    public $url;

    public function __construct($url)
    {   
        if (!isset($_SESSION)) {
            # code...
            session_start([
                'use_only_cookies' => 1,
                'read_and_close' => true
            ]);
        }

        if (!isset($_SESSION['iniciada'])) {
            $_SESSION['iniciada'] = false;
        }

        if ($_SESSION['iniciada']) {
            
            $viewController = new ViewController();
            //si se ha iniciado sesion aqui ira la programacion de nuetra web app
            $this->url = isset($_GET["url"]) ? $_GET["url"]:"tables";

            switch ($this->url) {
                case 'tables':  
                    $viewController->loadView('tables');
                    break;
                    case 'pedidos':
                        $viewController->loadView('pedidos');
                        break;
                        case 'usuarios':
                            //$viewController->loadView('usuarios');
                           if( !isset( $_POST['url'] ) )  $viewController->loadView('usuarios');
                            else if( $_POST['url'] == 'user-add' )  $viewController->loadView('user-add');
                            else if( $_POST['url'] == 'user-edit' )  $viewController->loadView('user-edit');
                            else if( $_POST['url'] == 'user-delete' )  $viewController->loadView('user-delete');
                            
                            break;
                            case 'estatus':
                                $viewController->loadView('estatus');
                                break;
                                case 'salir':
                                    $user_session = new SessionController();
                                    $user_session->logOut();
                                    break;
                default:
                    //$viewController->load_view('error404');
                    break;
            }
            
        }else {
            //mostrar error de sesion
            if (!isset($_POST['user']) && !isset($_POST['pass'])) {
                # code...
                $viewController = new ViewController();

                $viewController->loadView('login');
            }
            else{
                //echo "estamos aca";
                $userSession = new SessionController();
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                
                $sesion = $userSession->login($user,$pass);

                //print_r($sesion);

                if (empty($sesion)) {
                    # code...
                    $viewController = new ViewController();

                    $viewController->loadView('login');
                    header('Location: ./?error=El usuario '.$user.' o la contrasena son incorrectos');
                }else{
                    session_start();
                    $_SESSION['iniciada'] = true;

                    foreach ($sesion as $row) {
                        $_SESSION['userName'] = $row['userName'];
                        $_SESSION['nombre'] = $row['nombre'];
                        $_SESSION['fechaRegristro'] = $row['fechaRegristro'];
                    }

                    header('Location: ./');
                    
                }

            }

        }
    }

}


?>