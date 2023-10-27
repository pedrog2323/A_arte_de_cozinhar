<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content"><strong>Bolo De Cenoura:</strong>
      <br>
      | 4.7 / 5 14422 avaliações |
      <br>
      <br>
      <strong>Bolo de cenoura:</strong> um clássico que nunca sai de moda
      O bolo de cenoura é um clássico da culinária brasileira. É um bolo doce e úmido, com um sabor irresistível. É perfeito para um café da manhã, um lanche ou uma sobremesa.

      Nossa receita de bolo de cenoura é simples e fácil de fazer. Você vai precisar de apenas alguns ingredientes básicos, que você provavelmente já tem em casa.

      O resultado é um bolo perfeito, com um sabor delicioso e uma textura irresistível.

      Acesse nossa receita agora mesmo e aprenda a fazer um bolo de cenoura que vai deixar todos os seus convidados com água na boca.</p>
      <br>

      <p class="post-content">
      <br>
      <strong>Ingredientes (8 porções): </strong>
      <br>
      Massa
      óleo
      1/2 xícara (chá) de óleo
      cenoura
      3 cenouras médias raladas
      4 ovos
      açúcar
      2 xícaras (chá) de açúcar
      farinha de trigo
      2 e 1/2 xícaras (chá) de farinha de trigo
      fermento em pó químico
      1 colher (sopa) de fermento em pó
      Cobertura
      manteiga
      1 colher (sopa) de manteiga
      chocolate em pó
      3 colheres (sopa) de chocolate em pó
      açúcar
      1 xícara (chá) de açúcar
      leite
      1 xícara (chá) de leite
      <br>
      <br>
      <strong>Modo de preparo:</strong>
      <br>
      Modo de preparo : <strong>40min</strong>
      <br>
      1-
      Massa
      Em um liquidificador, adicione a cenoura, os ovos e o óleo, depois misture.
      <br>
      2-
      Acrescente o açúcar e bata novamente por 5 minutos.
      <br>
      3-
      Em uma tigela ou na batedeira, adicione a farinha de trigo e depois misture novamente.
      <br>
      4-
      Acrescente o fermento e misture lentamente com uma colher.
      <br>
      5-
      Asse em um forno preaquecido a 180° C por aproximadamente 40 minutos.
      <br>
      6-
      Cobertura
      Despeje em uma tigela a manteiga, o chocolate em pó, o açúcar e o leite, depois misture.
      <br>
      7-
      Leve a mistura ao fogo e continue misturando até obter uma consistência cremosa, depois despeje a calda por cima do bolo.</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
  include_once("templates/footer.php")
?>