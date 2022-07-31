
        <!-- Rodapé -->
        <div class="footer" <?php if($pagina=='about'||$pagina=='where'){ echo 'style="background-color:black;color:white;"';} ?>>
            <div class="row">
                <div class="col-6">
                    <p>número de contato<br><br>endereço</p>
                </div>
                <div class="footer-direito border-left col-6">
                    <p>redes</p>
                </div>
            </div>
        </div>
    </div> 

<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
    function removeMensagem(){
        setTimeout(function(){ 
            document.getElementById('msg-result').remove(); 
        }, 5000);
    }

    document.onload = () => {
        if (document.readyState === 'complete') {
        // toda vez que a página carregar, vai limpar a mensagem (se houver) 
        // após 5 segundos
            removeMensagem(); 
        }
    };
</script>

</body>

</html>