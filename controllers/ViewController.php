<?php

    class ViewController
    {
        private static $viewPath = './views/';

        public function loadView($nameView)
        {   
            require_once(self::$viewPath.'header.php');
            require_once(self::$viewPath.$nameView.'.php');
            require_once(self::$viewPath.'footer.php');
        }
    }
    

?>