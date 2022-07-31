
        <div class="content-contact">
        
            <!-- Topo da página -->
            <div class="topo-pagina-contact">
                <h1 class="titulo"><strong>CONTATO</strong></h1>
                <h4>Entre em contato e solicite seu orçamento.</h4>
            </div>
            
            <!--  -->
            <div class="contact row">
                <div class="col-12">

                    <form action="./email_sending/send_email.php" name="form-contato" method="post">
                        <input class="input-texto input1" type="text" name="nome" maxlength="40" placeholder="NOME" required/><br>
                        <input class="input-texto input1" type="email" name="email" maxlength="30" placeholder="EMAIL" required/><br>
                        <textarea class="input-texto input2" name="msg"  placeholder="MENSAGEM" required></textarea><br>
                        <input class="input-botao" type="submit" value="Enviar"/>
                    </form>

                    <?php         
                        if(isset($_GET['status'])):
                            if ($_GET['status']=="sucesso"):
                                echo "<p class='msg-sucess'>Email enviado com sucesso!</p>";
                            elseif ($_GET['status']=="falha"):
                                echo "<p class='msg-fail'>Falha ao enviar o email.</p>";
                            endif;
                        endif;
                    ?>

                </div>
            </div>
        </div>