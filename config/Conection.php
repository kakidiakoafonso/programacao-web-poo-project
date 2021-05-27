<?php 
    class Conexao 
    {
        private static $conexao;
        public static function getConexao()
        {
            if(!isset($conexao)):
                self::$conexao = new \PDO("mysql:host=localhost;dbname=scpce","root","");
            endif;
            return self::$conexao;
        }
    }
?>