
<?php 
$nome=$_POST['nome'];// pegar o campo nome via POST
$email=$_POST['email'];//pega campo email via POST
$assunto=$_POST['assunto'];//pega campo assunto via POST
$mensagem=$_POST['mensagem'];///pega textarea mensagem via POST
global$email;//função padrão do PHP para envio de e-mail
mail("seuemail@provedor.com","$assunto",//e-mail de destino e assunto vem logo em seguida, para aparecer como assunto do email
"Nome : $nome
E-mail : $email
Assunto : $assunto
Mensagem : $mensagem",
"From: $email"//a variável e-mail aqui possibilita responder o e-mail diretamente clicando em responder no seu e-mail.
);
echo" <body bgcolor=#021446><p align=center><font size=+2 color=#FFFFFF>$nome!Sua mensagem foi enviada com sucesso <br>
 Em breve entraremos em contato</font></p></body>";//aqui é apenas uma mensagem de confirmação de envio do e-mail, pode ser personalizada
/*Desenvolvido por: Filipi A. de Arruda*/
?>
