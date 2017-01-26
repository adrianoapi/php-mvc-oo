<?php

class Autoloader
{

    static public function loader($className)
    {
        $filename = "Controller/" . str_replace('\\', '/', $className) . ".php";
        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } elseif (file_exists($filename = "Model/" . str_replace('\\', '/', $className) . ".php")) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } elseif (file_exists($filename = "Service/" . str_replace('\\', '/', $className) . ".php")) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } elseif (file_exists($filename = "Interface/" . str_replace('\\', '/', $className) . ".php")) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } elseif (file_exists($filename = "classes/" . str_replace('\\', '/', $className) . ".php")) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

}

spl_autoload_register('Autoloader::loader');
