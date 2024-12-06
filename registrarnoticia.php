<div class="container">
    <header class="header">
      <a class="logo" href="index.php">InfoSports</a>
      <div class="headerBtnGroup">
      <?php include_once("menuTopo.php");?>
        <div>
          <input type="checkbox" class="check" id="chk" />
        
          <label class="label" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="bola"></div>
          </label>
        </div>
      </div>
      <div class="hamburguer-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </header>
    <section class="main">
      <div class="box-content">
        <form method="Post" action="#">
          <h1>Cadastrar Notícia</h1>
          <div class="name">
            <label for="nome"></label>
            <input type="text" placeholder="Título" id="titulo" name="titulo" >
            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
          </div>
          <div class="email">
            <label for="descricao"></label>
            <input type="text" placeholder="Descrição" id="descricao" name="descricao">
            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex: abc@abc.com</p>
          </div>
          <div class="telefone">
            <label for="imagem"></label>
            <input type="img" placeholder="Imagem" id="imagem" name="imagem">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div>
          <!-- <div class="telefone">
            <label for="login"></label>
            <input type="text" placeholder="Login" id="login" name="login">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div>
          <div class="telefone">
            <label for="senha"></label>
            <input type="password" placeholder="Senha" id="senha" name="senha">
            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
          </div> -->
          <button class="btn-concluir">Registrar</button>

        </form>
      </div>
    </section>
    <footer class="footer">
      <span>Info Sports</span>
      <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
    </footer>
  </div>