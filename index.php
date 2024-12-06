<?php

include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");

$nome = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['nome'])) ? $_POST['nome'] : null;

$email = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['email'])) ? $_POST['email'] : null;

$peso = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['peso'])) ? $_POST['peso'] : null;

$altura = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['altura'])) ? $_POST['altura'] : null;

$telefone = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;

$sobrenome = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['sobrenome'])) ? $_POST['sobrenome'] : null;

$mensagem = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['mensagem'])) ? $_POST['mensagem'] : null;

$login = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['login'])) ? $_POST['login'] : null;

@$senha = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['senha'])) ? $_POST['senha'] : null;

$titulo = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['titulo'])) ? $_POST['titulo'] : null;

$descricao = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['descricao'])) ? $_POST['descricao'] : null;

$imagem = ($_SERVER["REQUEST_METHOD"] == "POST"
 && !empty($_POST['imagem'])) ? $_POST['imagem'] : null;

 $categoria = ($_SERVER["REQUEST_METHOD"] == "POST"
&& !empty($_POST['categoria'])) ? $_POST['categoria'] : null;

 $resposta = 0;
 
 $resposta = calcularImc($peso, $altura);
 $classificacao = classificarImc($resposta);
 cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
 registrar($nome,$email,$telefone,$login,$senha);
 contato($nome,$sobrenome,$email,$telefone,$mensagem);
 criptografia($senha);
 registrarnoticia($titulo,$descricao,$imagem);
//  buscarlogin($loginBd);
 
//  var_dump($senha);die; 
 timeZone();
  $data = dataAtual();
  $tituloDoSite = "BEM VINDO A INFOSPORTS!";
  $subTituloDoSite = "Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
  preferido. <br>".$data;

if($_GET && isset($_GET['pagina'])){
  $paginaUrl = $_GET['pagina'];
}else{
  $paginaUrl = null;
}

if($paginaUrl === "principal"){
  cadastrar($nome,$email,$peso,$altura,$resposta,$classificacao);
}elseif($paginaUrl === "registrar"){
  registrar($nome,$email,$telefone,$login,$senha);
}elseif($paginaUrl === "contato"){
  contato($nome,$sobrenome,$email,$telefone,$mensagem);
}elseif($paginaUrl === "registrarnoticia"){
  registrarnoticia($titulo,$descricao,$imagem);
}elseif($paginaUrl === "cadastrar-categoria"){
  if(!verificarCategoriaDuplicada($categoria)){
    cadastrarCategoria($categoria,$data);
  }
}elseif($paginaUrl === "login"){
  $usuarioCadastrado = verificarLogin($login);
  if(
    $usuarioCadastrado &&
    validaSenha($senha, $usuarioCadastrado['senha'])
  ){
    registrarAcessoValido($usuarioCadastrado);
  }
}elseif($paginaUrl === "sair"){
  limparSessao();
}elseif($paginaUrl === "sair"){
  limparSessao();
}elseif($paginaUrl === "detalhe"){
  if($_GET && isset($_GET['id'])){
    $idNoticia = $_GET['id'];
  }else{
    $idNoticia = 0;
  }
  $noticia = buscarNoticiaPorId($idNoticia);
}





include_once("header.php");
  if($paginaUrl === "principal"){
    include_once("principal.php");
  }elseif($paginaUrl === "contato"){
    // protegerTela();
    include_once("contato.php");
  }elseif($paginaUrl === "login"){
    include_once("login.php");
    var_dump($login,$senha);
  }elseif($paginaUrl === "registro"){
    include_once("registro.php");
  }elseif($paginaUrl === "cadastrar-categoria"){
    // protegerTela();
    include_once("categoria.php");
  }elseif($paginaUrl === "registrarnoticia"){
    // protegerTela();
    include_once("registrarnoticia.php");
  }elseif($paginaUrl === "cadastrar-noticia"){
    // protegerTela();
  }else{
    echo "404 Página não existe!";
  }

include_once("footer.php");
?>
