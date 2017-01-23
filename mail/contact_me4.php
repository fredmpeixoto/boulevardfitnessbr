<?php

$quebra_linha ="\n";
$emailsender = "contato@boulevardfitness.com.br";
$nomeremetente = $_POST['name'];
$emaildestinatario = "contato@boulevardfitness.com.br";
$assunto = "Contato Site";
$mensagem = $_POST['message'];
$telefone = $_POST['phone'];

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers.="Content-type: text/html; charset=iso-8859-1\r\n".$quebra_linha;
$headers.="\n Enviado de".$quebra_linha.$emailsender.$quebra_linha;
//$headers.="Return-Path:".$quebra_linha.$_POST['email'].$quebra_linha;
$headers.="\n Responder para:".$quebra_linha.$_POST['email'].$quebra_linha;

mail($emaildestinatario,$assunto,$mensagem.$quebra_linha.$telefone,$headers,"-r".$emailsender);


echo "Deu certo";

?>