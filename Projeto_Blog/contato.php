<?php
  include_once("templates/header.php");
?>
<br>
  <h1 align='center'>Página de contato</h1>
  <br>
  <p align='center'>Seja bem-vindo à nossa página de contato! Estamos entusiasmados em ouvir de você e estamos à disposição para responder a perguntas, receber feedback ou colaborar em projetos incríveis relacionados à culinária. Sua opinião é valiosa para nós e estamos sempre buscando maneiras de melhorar e atender às suas necessidades.</p>
        <br>
        <br>
  <h1 align='center'>Formulário de contato</h1>
  <p align='center'>Por favor, preencha o formulário abaixo para entrar em contato conosco. Certifique-se de incluir suas informações de contato corretas para que possamos responder prontamente.</p>
  <br>
  <form>
    <div class="formcontato">
        <input type="text" id="name" name="name" placeholder="Nome">
        <input type="email" id="email" name="email" placeholder="E-mail">
        <input type="text" id="message" name="message" placeholder="Mensagem">
        <input type="submit" id="submit" value="Enviar">
    </div>
        <br>
        <br>
  </form>

<?php
  include_once("templates/footer.php")
?>


<style>
  body {
    padding-bottom:;
  }

  p {
    margin-left: 100px;
    margin-right: 100px;
  }

  form{
    /* Centralizar o formulário na pagina */
  margin: 0 auto;
  width: 400px;
  }

  input {
    margin-bottom: 4px;
  }

  #message {
    height: 100px;
    border-radius: 3px;
  }

  #name {
    height: 30px;
    border-radius: 3px;
  }

  #email {
    height: 30px;
    border-radius: 3px;
  }

  .formcontato{
    display: flex;
    flex-direction: column;
    overflow: auto;
  }


</style>