<?php
    class MyAutoloader{

        
        public static function ClassLoader($className)
        {
            if(file_exists(__APP__.'/models/' . $className . '.class.php')){
                include __APP__.'/models/' . $className . '.class.php';
            }

        }
        public static function LibraryLoader($className)
        {
            if(file_exists(__APP__.'/library/' . $className . '.class.php')){
                include __APP__.'/library/' . $className . '.class.php';
            }
        }
    }