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
        <input type="text" name="name" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="message" name="message" placeholder="Mensagem">
        <input type="submit" value="Enviar">
        <br>
        <br>
  </form>
  <h1 align='center'>Nossos Canais de Mídia Social</h1>
  <p align='center'>Siga-nos nas redes sociais para ficar atualizado com nossas últimas receitas, dicas culinárias e notícias emocionantes sobre o mundo da gastronomia. Não hesite em nos enviar mensagens através dessas plataformas também.</p>
<?php
  include_once("templates/footer.php")
?>
<style>
  form{
    /* Centralizar o formulário na pagina */
  margin: 0 auto;
  width: 400px;
    

  }
</style>