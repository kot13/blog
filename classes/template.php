<?php

Class Template {

        private $registry;

        private $vars = array();

        function __construct($registry) {
                $this->registry = $registry;
        }
        
		function set($varname, $value, $overwrite=false) {
        if (isset($this->vars[$varname]) == true AND $overwrite == false) {
                trigger_error ('Не удалось установить Var `' . $varname . '`. Уже установлен, и замены не допускаются.', E_USER_NOTICE);
                return false;
        }
            $this->vars[$varname] = $value;
            return true;
        }

        function remove($varname) {
            unset($this->vars[$varname]);
            return true;
        }
		
		function show($name) {
        $path = site_path . 'views' . DIRSEP . $name . '.php';
        if (file_exists($path) == false) {
                trigger_error ('Шаблон `' . $name . '` не определён.', E_USER_NOTICE);
                return false;
        }
        // Load variables
        foreach ($this->vars as $key => $value) {
                $$key = $value;
        }
        include ($path); 		
        }

}