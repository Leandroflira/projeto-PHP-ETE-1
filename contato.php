<div class="container">
        <header class="header">
            <a class="logo" href="<?=constant('URL_LOCAL_SITE_PAGINA').'principal'?>">InfoSports</a>
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
        <section>
        <div class="box-content">
            <!-- <div class="container"> -->
                <!-- <div class="title"> -->
                    <!-- </div> -->
                    
                    <form method="POST" action="#">
                    <h1>Contate-nos</h1>
                
                    <div class="email">
                        <!-- <div class="input-box"> -->
                            <div class="email">
                            <label for="nome"></label>
                            <input type="text" placeholder="Nome" id="nome" name="nome" >
                            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="input-box"> -->
                        <div class="email">
                            <label for="nome"></label>
                            <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" >
                            <p id="nome-ajuda" class="msg-ajuda" style="display:none;">Mín. 3 caracteres</p>
                        </div>
                            <!-- <input name="sobrenome" type="text" id="sobrenome" placeholder="Sobrenome"> -->
                        <!-- </div> -->

                        <!-- <div class="input-box"> -->
                            <div class="email">
                            <label for="email"></label>
                            <input type="text" placeholder="Email" id="email" name="email">
                            <p id="email-ajuda" class="msg-ajuda" style="display:none;">Insira um email válido. Ex: abc@abc.com</p>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="input-box"> -->
                            <div class="telefone">
                            <label for="telefone"></label>
                            <input type="text" placeholder="Telefone" id="telefone" name="telefone">
                            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Insira um telefone válido. (11 números)</p>
                        </div>
                        <!-- </div> -->

                        <!-- <div class="input-box"> -->
                        <div class="email">
                            <label for="Digite aqui sua mensagem"></label>
                            <!-- <input type="textarea" placeholder="Digite aqui sua mensagem" id="telefone" name="telefone"> -->
                            <textarea class="telefone" name="mensagem" id="mensagem" placeholder="Digite aqui sua mensagem"></textarea>
                            <p id="tel-ajuda" class="msg-ajuda" style="display:none;">Mín. 255 caracteres</p>
                        </div>
                        <!-- </div> -->

                    </div>
                        <button value="Enviar" class="btn-concluir" id="btnEnviar">Enviar</button>
                </form>
            </div>
    </section>
        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
        </div>