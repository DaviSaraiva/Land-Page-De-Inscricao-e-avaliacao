<?php
//Variáveis
$nome= $_POST['nome']; 
$opiniao = $_POST['opniao'];
$experiencia= $_POST['experiencia'];
$recomendacao = $_POST['reco'];
$equipe = $_POST['equipe'];
$satisfeifacao = $_POST['sati'];
$aprendizados  = $_POST['aprend'];
$espaco = $_POST['espaco'];

$Informeostemas= $_POST['temas'];
$trescoisasboas1 = $_POST['coisasboas1'];
$trescoisasboas2= $_POST['coisasboas2'];
$trescoisasboas3 = $_POST['coisasboas3'];
$coisasruins = $_POST['coisasruins'];
$dicas= $_POST['dicas'];


$corpo = "Questionario do Curso". "\r\n";
$corpo .="Nome: ". $nome."\r\n" ;
$corpo .= "Opiniao sobre o curso:  ".$opiniao. "\r\n" ;
$corpo .= "Experiencia do curso: ". $experiencia. "\r\n";
$corpo .= "Recomendação: ". $recomendacao. "\r\n";
$corpo .= "O que achou da equipe: ". $equipe. "\r\n";
$corpo .= "Esta safistfeito com o evento: ". $satisfeifacao. "\r\n";
$corpo .= "Gostou das aprendizagens do curso: ". $aprendizados. "\r\n";
$corpo .= "O que vc achou do espaço que foi o curso: ". $espaco. "\r\n";

$corpo .= "Quais temas você quer para o proximo curso: ". $Informeostemas. "\r\n";
$corpo .= "1 coisa boa do curso: ". $trescoisasboas1. "\r\n";
$corpo .= "2 coisa boa do curso: ". $trescoisasboas2. "\r\n";
$corpo .= "3 coisa boa do curso: ". $trescoisasboas3. "\r\n";
$corpo .= "Algo ruim do curso: ". $coisasruins. "\r\n";
$corpo .= "Algumas dicas para a proxima: ". $dicas."\r\n";


 $emailenviar = "agtopmidiaadm@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $headers,$corpo);
  
?>