
function getCategoriaFromUrl() {
    const params = new URLSearchParams(window.location.search);
    return params.get('categoria') || 'todos';
}

window.onload = function() {
    var categoria = getCategoriaFromUrl();
    filtrarProjetos(categoria);
};

function filtrarProjetos(categoria) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './componentes/filtrarProjetos.php?categoria=' + categoria, true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('containerComProjetos').innerHTML = xhr.responseText;
        } else {
            console.error('Erro ao carregar os Projetos');
        }
    };

    xhr.send();
};

window.onscroll = function() {
    var header = document.querySelector('.header');
    
  
    if (window.pageYOffset > 50) {
      header.style.backgroundColor = "rgba(255, 255, 255, 0.87)"; 
      header.style.paddingTop = '30px'
       header.style.paddingBottom = '10px'
    } else {
      header.style.backgroundColor = "transparent"; 
    }
  };
  document.querySelectorAll('a').forEach(function(link) {
    link.style.textDecoration = 'none';
});

