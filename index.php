<?php 

//Dao 
require_once('./model/data/ClienteDao.php');
require_once('./model/data/ArquitetoDao.php');
require_once('./model/data/EstradaDao.php');
require_once('./model/data/PredioDao.php');


//Objetos 
require_once('./model/Objects/Cliente.php');
require_once('./model/Objects/Endereco.php');
require_once('./model/Objects/Arquiteto.php');
require_once('./model/Objects/Estrada.php');
require_once('./model/Objects/Predio.php');


//Instancias
$endereco = new Endereco("Uige","Belas","Frente ao Kero","945186405");
$cliente = new Cliente(2,"Divina Paulina","Femenino",$endereco,true);
$clienteDao = new ClienteDao();
$arquitetoDao = new ArquitetoDao();
$estradaDao = new EstradaDao();
$predioDao = new PredioDao();



//Cliente
// $clienteDao->create($cliente);
// $clienteDao->read();
// $clienteDao->update($cliente);
//$clienteDao->delete($cliente);


//Arquiteto
$arquiteto = new Arquiteto(2,"Elisio Bikuma","Masculino",$endereco,10);
//$arquitetoDao->create($arquiteto);
//$arquitetoDao->read();
//$arquitetoDao->update($arquiteto);
//$arquitetoDao->delete($arquiteto);



//Estrada
// $estrada =new Estrada(1,"Estrada de Luanda","Estrada de Catete",$cliente,"20 milhoes","000FR11",
// "20/03/2022","4 meses",$arquiteto,"10%","Estrada","20 KM",false);
// $estradaDao->create($estrada);
//$estradaDao->read();
//$estradaDao->update($estrada);
//$estradaDao->delete($estrada);




//Predio
$predio = new Predio(2,"Toree da Liga da Justica","Lixo",$cliente,"20 milhoes","000FR11",
"20/03/2022","4 meses",$arquiteto,"10%","Estrada",$endereco,"Escritorio");

//$predioDao->create($predio);
//var_dump($predioDao->read());
$predioDao->update($predio);























//
//define ("path", $_SERVER["DOCUMENT_ROOT"] );
//$url = $_SERVER ['REQUEST_URI'];

/*

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


*/




















































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