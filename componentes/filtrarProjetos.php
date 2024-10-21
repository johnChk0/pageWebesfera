<?php
require_once('../dados/dadosProjetos.php');

$categoriaSelecionada = isset($_GET['categoria']) ? $_GET['categoria'] : 'todos';
$fadeUpTemp = 1; // Inicia em 1 segundo (1000 ms)

foreach ($projetos as $projeto) {
    if ($categoriaSelecionada === 'todos' || $projeto['categoria'] === $categoriaSelecionada) {
        echo '
          <div data-aos="zoom-in"
              data-aos-duration="'.($fadeUpTemp * 1000).'" class="projeto">
            <img src="'.$projeto['imagem'].'" alt="'.$projeto['nome'].'" class="imgProjeto">
            <div class="conteudoProjeto">
              <h2 class="titleProjeto">'.$projeto['nome'].'</h2>
              <p class="textProjeto">'.$projeto['descricao'].'</p>
              <button class="btnProjeto"><a href="'.$projeto['nome'].'">Visitar projeto</a></button>
            </div>
          </div>';
        $fadeUpTemp++; // Incrementa a duração em 1 segundo para o próximo projeto
    }
}
?>
