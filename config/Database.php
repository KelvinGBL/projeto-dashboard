<?php
  
    namespace config;

    use mysqli;

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root'); 
    define('DB_PASSWORD', '');
    define('DB_NAME', 'projeto_dashboard');


    class Database {
        private static $connection;

        private function __construct() {
            // O construtor é privado para prevenir a instanciação direta.
        }

        public static function getConnection() {
            if (!self::$connection) {
                self::$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

                if (self::$connection->connect_error) {
                    die("Connection failed: " . self::$connection->connect_error);
                }
            }

            return self::$connection;
        }
    }
?>