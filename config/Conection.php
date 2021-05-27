<?php 
    class Conexao 
    {
        private static $conexao;
        function getConexao()
        {
            if(!isset($conexao)):
                self::$conexao = new PDO("mysql:host=localhost;dbname=scpce","root","");
            else:
                return self::$conexao;
            endif;
        }
    }
?>