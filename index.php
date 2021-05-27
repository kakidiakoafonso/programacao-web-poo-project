<?php 
define ("path", $_SERVER["DOCUMENT_ROOT"] );
$url = $_SERVER ['REQUEST_URI'];

//Requies
require_once('./controller/IndexController.php');
if ($url=="/pw/" || $url=="/pw/index.php" ) 
{
    # code...
    $home = new IndexController();
    $home->IndexView();
}
else
{
    echo "Pagina nao encontrada";
}





















































/*

require_once("model/Arquiteto.php");
require_once("model/Endereco.php");
require_once("model/Cliente.php");
require_once("model/Projetos.php");


$Arquiteto = new Arquiteto("Pedro Vicente","Masculino",10);
$Endereco = new Endereco("Luanda","Belas","Palanca","99");
$Cliente = new Cliente("Flora Macaia","Femenino",$Endereco,false);
$projeto = new Projeto("Reabilitacao", "Reabilitacao da estrada do cazenga",$Cliente,"20 milhoes de KZ","000FLMC","20/07/2021","2 Meses", $Arquiteto,"10%");

var_dump($projeto);
*/
?>