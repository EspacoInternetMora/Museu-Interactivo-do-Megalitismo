<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Museu do Megalitismo</title>
    <!--<meta content="www.tembo-alentejo.com" name="description">
	<meta content="Tembo, Turismo Rural, Turismo, Alentejo, Pavia, Vimieiro, Natureza, Alojamento, Fim de Semana" name="keywords">
	<meta content="Tembo" name="application-name">
	<link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="scripts/main.js" type="text/javascript"></script>
</head>
<body>

  <header>
      <img src="imagens/museuLogotipo.png" alt="Logotipo do Museu do Megalitismo">
      <nav>
          <ul>
              <li><a href="#museu">O Museu</a></li>
              <li><a href="#megalitismo">Megalitismo</a></li>
              <li><a href="actividades">Actividades</a></li>
              <li><a href="#horario">Horário</a></li>
              <li><a href="#precario">Preçário</a></li>
              <li><a href="#ondeEstamos">Onde Estamos</a></li>
              <li><a href="#contactos">Contactos</a></li>
          </ul>
      </nav>
  </header>

  <div id="slider-wrapper">
      <div id="slider-images">
          <img src="imagens/edificioExterior.JPG" alt="Exterior do Museu" class="active-slider-img">
          <img src="imagens/exposicaoPeca.JPG" alt="Vaso do Megalitismo">
          <img src="imagens/exposicaoMapa.JPG" alt="Mapa do Megalitismo">
      </div>

      <div id="hover-back-arrow">
          <img src="imagens/back.svg" alt="Anterior" id="back">
      </div>

      <div id="hover-next-arrow">
          <img src="imagens/next.svg" alt="Próximo" id="next">
      </div>
  </div>

  <section id="actividadesWrapper">

    <nav id="menuActividades">
      <ul>
          <li class="expandable"><a href="#">Escolas</a>
              <ul>
                  <li><a href="#">Pré-Escolar</a></li>
                  <li><a href="#">Ensino Básico (1º ciclo)</a></li>
                  <li><a href="#">Ensino Básico (2 e 3º ciclo)</a></li>
                  <li><a href="#">Ensino Secundário</a></li>
              </ul>
          </li>
          <li><a href="#">Famílias</a></li>
          <li><a href="#">Adultos</a></li>
          <li><a href="#">Séniores</a></li>
          <li><a href="#">Datas Especiais</a></li>
      </ul>
    </nav>
    
    <div id="listaActividades">
        
        <div>
            <h4>Actividades de Natal</h4>
        </div>
        
        <div class="actividade">
        <h5>Um anjinho vou criar…*</h5>
        <p>Uma pinha eu vou pintar e num anjinho a vou transformar.</p>
        <p>Cria o teu enfeite de Natal para a tua sala enfeitar.</p>
        </div>
        
    </div>

  </section>

</body>
</html>
