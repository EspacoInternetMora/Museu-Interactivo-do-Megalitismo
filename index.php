<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Museu Interactivo do Megalitismo</title>
    <meta content="Museu Interactivo do Megalitismo" name="description">
	<meta content="Museu Interactivo do Megalitismo, Museu Megalitismo, Megalitismo, Museu Interactivo, Menir, Anta, Pedras de Xisto, Turismo" name="keywords">
	<meta content="Museu Interactivo do Megalitismo" name="application-name">
	<!--<link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">-->
    <link rel="stylesheet" href="estilos/estilos.css">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90876733-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>

    <header>
        <div id="navegacao">
            <a href="index.php"><img src="imagens/logo.jpg" alt="Logotipo do Museu do Megalitismo"></a>
            <nav>
                <ul>
                    <li><a href="#museu"><span data-hover="O Museu">O Museu</span></a></li>
                    <li><a href="#megalitismo"><span data-hover="Megalitismo">Megalitismo</span></a></li>
                    <!--<li><a href="#actividades"><span data-hover="Actividades">Actividades</span></a></li>-->
                    <li><a href="educacao.php#educacao"><span data-hover="Educação">Educação</span></a></li>
                    <li><a href="#horario"><span data-hover="Horário">Horário</span></a></li>
                    <li><a href="#precario"><span data-hover="Preçário">Preçário</span></a></li>
                    <li><a href="#galeria"><span data-hover="Galeria">Galeria</span></a></li>
                    <li><a href="#ondeEstamos"><span data-hover="Onde Estamos">Onde Estamos</span></a></li>
                    <li><a href="#contactos"><span data-hover="Contactos">Contactos</span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="slider-wrapper">
        <div id="slider-images">
            <img src="imagens/slideshow/slide1.jpg" alt="Exterior do Museu" class="active-slider-img">
            <img src="imagens/slideshow/slide2.jpg" alt="Gruta">
            <img src="imagens/slideshow/slide3.jpg" alt="Mapa do Megalitismo">
            <img src="imagens/slideshow/slide4.jpg" alt="Cromoleque das Fontaínhas">
        </div>

        <div id="hover-back-arrow">
            <img src="imagens/back.svg" alt="Anterior" id="back">
        </div>

        <div id="hover-next-arrow">
            <img src="imagens/next.svg" alt="Próximo" id="next">
        </div>
    </div>

    <section id="museu">
        <h1>Museu Interactivo do Megalitismo</h1>
        <div class="texto">
            <p><strong>Missão:</strong> A missão do Museu Interactivo do Megalitismo consiste na valorização e divulgação do património megalítico do Concelho de Mora e na afirmação da memória histórico-cultural do seu povo.</p>
            <p><strong>Visão:</strong> Através da valorização e divulgação do nosso património megalítico, o Museu Interactivo do Megalitismo pretende contribuir para o enriquecimento social, cultural e económico do Concelho de Mora, e para a sua afirmação como referência nacional e internacional do megalitismo.</p>
            <p>Localizado praticamente no centro da vila de Mora, a escassos quilómetros do Fluviário, o Museu do Megalitismo, único a nível nacional, é a concretização de um sonho antigo da autarquia, no sentido da valorização do vasto e riquíssimo património megalítico existente no Concelho.</p>
            <p>Inaugurado a 15 de Setembro de 2016, o Museu integra e reabilita a antiga Estação de Mora, e ainda dois novos edifícios destinados ao núcleo museológico e à área de cafetaria.</p>
            <p>A estrutura antiga acolhe espaços de lazer para os jovens e crianças, com uma sala de internet e biblioteca, cujo acesso é livre, mais uma sala de actividades com diversos jogos interactivos, que, de forma lúdica, alargam o nosso conhecimento.</p>
            <p>Construído de raiz, o espaço museológico de 750 metros quadrados acompanha a modelação do terreno, e integra três espaços representativos do quotidiano das populações: a Vida, a Morte e a Contemplação. Aqui, o visitante é acolhido por um filme em 3D, que retrata a vida num povoado neolítico, e nos faz viajar no tempo. As diferentes mesas interactivas permitem ao visitante aceder à informação sobre as peças expostas, algumas com mais de seis mil anos, descobrir como se fazem as escavações e partir à descoberta do maravilhoso mundo do megalitismo. No percurso, o visitante ter-se-á deixado surpreender pela presença inusitada de um homem em tamanho real a fazer placas de xisto…</p>
            <p>As várias centenas de peças expostas, cedidas maioritariamente pelo Museu Nacional de Arqueologia, são provenientes das dezenas de escavações arqueológicas, que, no Concelho de Mora, tiveram início em 1914, com Vergílio Correia, de que resultou a obra <strong>El Neolítico de Pavía</strong>, editada em 1921.</p>
            <p>Os quatro edifícios do Museu estão interligados por um corredor protegido com placas metálicas cujas pequenas aberturas simbolizam o geometrismo das placas de xisto.</p>
            <p>Sejam, pois, bem-vindos!</p>
        </div>
        <div id="valencias">
            <figure>
                <img src="imagens/salaExposicao.jpg" alt="Sala de Exposição">
                <figcaption>Espaço Museológico</figcaption>
            </figure>
            <figure>
                <img src="imagens/salaActividades.jpg" alt="Sala de Actividades">
                <figcaption>Sala de Actividades</figcaption>
            </figure>
            <figure>
                <img src="imagens/espacoLeitura.jpg" alt="Espaço de Leitura">
                <figcaption>Centro de Documentação</figcaption>
            </figure>
            <figure>
                <img src="imagens/espacoInternet.jpg" alt="Espaço Internet">
                <figcaption>Espaço Internet</figcaption>
            </figure>
        </div>
    </section>

    <section id="megalitismo">
        <h1 class="yellowText">Megalitismo</h1>
        <div class="texto">
            <p>No concelho de Mora, arqueologia é quase sinónimo de megalitismo. Antas, sepulturas protomegalíticas, menires e conjuntos de menires fazem efectivamente parte integrante da identidade paisagística deste concelho. A própria geografia da investigação, em Portugal, colocou precocemente o concelho no topo da lista das grandes regiões megalíticas europeias, graças ao trabalho de Vergílio Correia.</p>
            <p>[...] Convém desde já adiantar que, no seu conjunto, o Alentejo Central foi uma região particularmente fértil em monumentos megalíticos, estando contabilizados, actualmente, perto de um milhar de registos, de diferentes tipologias, dimensões e estados de conservação.</p>
            <p>Neste âmbito, o concelho de Mora ocupa um lugar muito especial, por razões que [...] se prendem com o caracter único de alguns monumentos e contextos.</p>
            <p>[...] Na verdade, a reputação do megalitismo de Mora, nos meios científicos internacionais, tem um curioso contraponto no reconhecimento, por parte das populações locais, da importância destes monumentos: Essa valorização traduz-se no facto da Vila de Pavia ostentar, como distintivo heráldico, o desenho de uma anta e o próprio povoado ter crescido em torno de um dos exemplares mais extraordinários da região, a Anta-Capela de S. Dinis.</p>
            <p>[...] A investigação arqueológica no concelho de Mora inicia-se, basicamente, na segunda década do séc. XX, com os trabalhos de Vergílio Correia (Correia, 1921).</p>
            <p>Anteriormente, temos alguns trabalhos, avulsos, de inventários de sítios e/ou escavações. [...] As primeiras referências, arqueológicas, conhecidas, remontam ao séc. XVII, altura em que Manuel Severim de Faria alude à Anta-Capela de S. Dinis. Mas é através dos trabalhos de recolha de Leite de Vasconcelos que nos chegam mais referências a este concelho, centrando-se essencialmente nos testemunhos mais perceptíveis na paisagem, os monumentos megalíticos.</p>
            <p>Fonte: <strong>Tempo das Pedras - Carta Arqueológica de Mora (2012)</strong></p>
        </div>
    </section>
    
    
    <?php
    
        $file = "data/postais.json";
        $conteudos = file_get_contents($file);
        //$conteudos = utf8_encode($conteudos);
        $postaisData = json_decode($conteudos, true);
        $postaisData = $postaisData["postais"];
        $numPostais = count($postaisData);
    
        if($numPostais > 0)
        {
            
    ?>
    
    <section id="postais">
        <h1>"Postais"</h1>
        <div id="postaisContainer">
            <div id="postaisWrapper">
                <ul>
                    
                    <li class="clone">
                        <?php
                            $ultimoPostal = $postaisData[$numPostais-1];
                        ?>
                        <img src="imagens/postais/<?php echo $ultimoPostal["imagem"]; ?>" alt="<?php echo $ultimoPostal["nome"]; ?>">
                        <div class="descricaoPostais">
                            <p><strong>Classificação:</strong> <?php echo $ultimoPostal["classificacao"]; ?></p>
                            <p><strong>Freguesia:</strong> <?php echo $ultimoPostal["freguesia"]; ?></p>
                            <p><strong>Itinerário:</strong> <?php echo $ultimoPostal["itinerario"]; ?></p>
                            <p><strong>Acessibilidade:</strong> <?php echo $ultimoPostal["acessibilidade"]; ?></p>
                            <p><strong>Descrição:</strong> <?php echo $ultimoPostal["descricao"]; ?>
                            
                            <?php
                                if(count($ultimoPostal["fonte"]) > 0 && $ultimoPostal["fonte"] != null) {  
                            ?>
                            <br>
                            <small><strong>Fonte: </strong>             
                              
                            <?php
                                   foreach($ultimoPostal["fonte"] as $fonte) {
                                       echo $fonte . "<br>";
                                   } 
                            ?>
                              
                            </small>        
                            <?php 
                                }
                            ?>
                            
                            </p>
                            <p><strong>Coordenadas:</strong> <?php echo $ultimoPostal["coordenadas"]; ?></p>
                        </div>
                    </li>
                    
                    
                    <?php
                        foreach($postaisData as $postal) {  
                    ?>
                         
                    <li>
                        <img src="imagens/postais/<?php echo $postal["imagem"]; ?>" alt="<?php echo $postal["nome"]; ?>">
                        <div class="descricaoPostais">
                            <p><strong>Classificação:</strong> <?php echo $postal["classificacao"]; ?></p>
                            <p><strong>Freguesia:</strong> <?php echo $postal["freguesia"]; ?></p>
                            <p><strong>Itinerário:</strong> <?php echo $postal["itinerario"]; ?></p>
                            <p><strong>Acessibilidade:</strong> <?php echo $postal["acessibilidade"]; ?></p>
                            <p><strong>Descrição:</strong> <?php echo $postal["descricao"]; ?>
                            
                            <?php
                                if(count($postal["fonte"]) > 0 && $postal["fonte"] != null) {  
                            ?>
                            <br>
                            <small><strong>Fonte: </strong>             
                              
                            <?php
                                   foreach($postal["fonte"] as $fonte) {
                                       echo $fonte . "<br>";
                                   } 
                            ?>
                              
                            </small>        
                            <?php 
                                }
                            ?>
                            
                            </p>
                            <p><strong>Coordenadas:</strong> <?php echo $postal["coordenadas"]; ?></p>
                        </div>
                    </li>
                               
                    <?php 
                            
                        }

                    ?>
                    
                    <li class="clone">
                        <?php
                            $primeiroPostal = $postaisData[0];
                        ?>
                        <img src="imagens/postais/<?php echo $primeiroPostal["imagem"]; ?>" alt="<?php echo $primeiroPostal["nome"]; ?>">
                        <div class="descricaoPostais">
                            <p><strong>Classificação:</strong> <?php echo $primeiroPostal["classificacao"]; ?></p>
                            <p><strong>Freguesia:</strong> <?php echo $primeiroPostal["freguesia"]; ?></p>
                            <p><strong>Itinerário:</strong> <?php echo $primeiroPostal["itinerario"]; ?></p>
                            <p><strong>Acessibilidade:</strong> <?php echo $primeiroPostal["acessibilidade"]; ?></p>
                            <p><strong>Descrição:</strong> <?php echo $primeiroPostal["descricao"]; ?>
                            
                            <?php
                                if(count($primeiroPostal["fonte"]) > 0 && $primeiroPostal["fonte"] != null) {  
                            ?>
                            <br>
                            <small><strong>Fonte: </strong>             
                              
                            <?php
                                   foreach($primeiroPostal["fonte"] as $fonte) {
                                       echo $fonte . "<br>";
                                   } 
                            ?>
                              
                            </small>        
                            <?php 
                                }
                            ?>
                            
                            </p>
                            <p><strong>Coordenadas:</strong> <?php echo $primeiroPostal["coordenadas"]; ?></p>
                        </div>
                    </li>
                    
                   
                    <!--<li class="clone">
                        <img src="imagens/postais/cartao_fontainhas_frente-1.png" alt="">
                        <div class="descricaoPostais">
                            <p><strong>Classificação:</strong> Monte de pedras no meia da Vila</p>
                            <p><strong>Freguesia:</strong> Pavia</p>
                            <p><strong>Itinerário:</strong> Meio da Vila</p>
                            <p><strong>Acessibilidade:</strong> Não vai lá ninguém</p>
                            <p><strong>Descrição:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget nunc felis. Sed aliquet risus est, vel facilisis ipsum iaculis ut. Nam non luctus tortor, nec venenatis nibh. Vestibulum maximus lorem ultrices justo interdum mattis. Integer et diam rhoncus, posuere nisi id, luctus tellus. Donec interdum ex diam, aliquet tristique mauris rhoncus quis. Suspendisse ullamcorper quam eu diam euismod, eu hendrerit nulla vestibulum. Suspendisse faucibus neque velit, eget blandit metus molestie id.</p>
                            <p><strong>Coordenadas:</strong> Aqui e ali</p>
                        </div>
                    </li>-->
                </ul>
            </div>

            <div id="postais-back-arrow">
                <img src="imagens/arrow-left.svg" alt="Anterior" id="postaisBack">
            </div>

            <div id="postais-next-arrow">
                <img src="imagens/arrow-right.svg" alt="Próximo" id="postaisNext">
            </div>
        </div>
    </section>
    
    <?php
        }
    ?>
    
    <!--<section id="actividades">
        <h1 class="whiteText">Actividades</h1>
        <div id="listaActividades">

            <figure>
                <img src="imagens/actividades_verao_2017.jpg" alt="Actividades de Verão 2017">
            </figure>
        
        </div>
    </section>-->
    
    <!--<section id="sugestao">
        <h1 class="whiteText">Sugestão para o fim-de-semana</h1>
        <p></p>
    </section>-->
    

    <section id="horario">
        <h1 class="whiteText">Horário</h1>
        <div id="horarioFuncionamento">
            <div id="aberto">
                <img src="imagens/sun.png" alt="Verão">
                <p><strong>Horário de Verão</strong><br>10h00 às 19h00</p>
            </div>
            <div id="fechado">
                <img src="imagens/rain.png" alt="Inverno">
                <p><strong>Horário de Inverno</strong><br>10h00 às 17h00</p>
                
            </div>
        </div>
        <div id="infoHorario">
            <p>Encerra à 2ª Feira (excepto Feriados)</p>
            <p>O Museu encontra-se encerrado ao público nos dias 25 de Dezembro e 1 de Janeiro (parte da manhã).<br>No dia 1 de Janeiro estamos abertos ao público da parte da tarde das 13h00 às 17h00.</p>
        </div>
    </section>

    <section id="precario">
        <h1 class="yellowText">Preçário</h1>

        <div id="bilheteira">
            <!--  PREÇOS VISITA AO MUSEU -->
            <div id="visitaMuseu">
                <h3><u>Visita ao Museu</u></h3>
                <table border="1" id="museuVisitaLivre">
                    <caption>Visita Livre</caption>
                    <tr>
                        <th></th>
                        <th>Normal</th>
                        <th>Grupo (mais de 20 pessoas)</th>
                    </tr>
                    <tr>
                        <td>Portador de Deficiência</td>
                        <td>-50%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Criança (0-2 anos)</td>
                        <td>Grátis</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Criança (3-12 anos)</td>
                        <td>2,50€</td>
                        <td>2,00€</td>
                    </tr>
                    <tr>
                        <td>Adulto (13-64 anos)</td>
                        <td>5,00€</td>
                        <td>4,50€</td>
                    </tr>
                    <tr>
                        <td>Sénior (65+ anos)</td>
                        <td>3,50€</td>
                        <td>3,00€</td>
                    </tr>
                    <tr>
                        <td>Família (Pais e filhos dos 3 aos 12 anos)</td>
                        <td>Menos 0,50€ por cada</td>
                        <td></td>
                    </tr>
                </table>
                <table border="1" id="museuVisitaGuiada">
                    <caption>Visita Guiada</caption>
                    <tr>
                        <th></th>
                        <th colspan="2">Grupo (menos de 20 pessoas)</th>
                        <th colspan="2">Grupo (mais de 20 pessoas)</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Bilhete</td>
                        <td>Guia</td>
                        <td>Bilhete</td>
                        <td>Guia</td>
                    </tr>
                    <tr>
                        <td>Criança (3-12 anos)</td>
                        <td>2,50€</td>
                        <td rowspan="3" class="grupo">+20€ p/Grupo</td>
                        <td>2,00€</td>
                        <td rowspan="3" class="grupo">+1€ p/Pessoa</td>
                    </tr>
                    <tr>
                        <td>Adulto (13-64 anos)</td>
                        <td>5,00€</td>
                        <td>4,50€</td>
                    </tr>
                    <tr>
                        <td>Sénior (65+ anos)</td>
                        <td>3,50€</td>
                        <td>3,00€</td>
                    </tr>
                </table>
            </div>

            <!--  PREÇOS VISITA CONJUNTA -->
            <div id="visitaConjunta">
                <h3><u>Visita ao Museu e ao Fluviário</u> <small>(Bilhete Conjunto)</small></h3>
                <table border="1" id="museuFluviarioVisitaLivre">
                    <caption>Visita Livre</caption>
                    <tr>
                        <th></th>
                        <th>Normal</th>
                        <th>Grupo (mais de 20 pessoas)</th>
                    </tr>
                    <tr>
                        <td>Portador de Deficiência</td>
                        <td>-50%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Criança (0-2 anos)</td>
                        <td>Grátis</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Criança (3-12 anos)</td>
                        <td>7,00€</td>
                        <td>6,00€</td>
                    </tr>
                    <tr>
                        <td>Adulto (13-64 anos)</td>
                        <td>10,00€</td>
                        <td>9,50€</td>
                    </tr>
                    <tr>
                        <td>Sénior (65+ anos)</td>
                        <td>8,00€</td>
                        <td>7,50€</td>
                    </tr>
                    <tr>
                        <td>Família (Pais e filhos dos 3 aos 12 anos)</td>
                        <td>Menos 0,50€ para cada</td>
                        <td></td>
                    </tr>
                </table>
                <table border="1" id="museuFluviarioVisitaGuiada">
                    <caption>Visita Guiada</caption>
                    <tr>
                        <th></th>
                        <th colspan="2">Grupo (menos de 20 pessoas)</th>
                        <th colspan="2">Grupo (mais de 20 pessoas)</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Bilhete</td>
                        <td>Guia</td>
                        <td>Bilhete</td>
                        <td>Guia</td>
                    </tr>
                    <tr>
                        <td>Criança (3-12 anos)</td>
                        <td>7,00€</td>
                        <td rowspan="3">+50€ p/Grupo</td>
                        <td>6,00€</td>
                        <td rowspan="3">+3€ p/Pessoa</td>
                    </tr>
                    <tr>
                        <td>Adulto (13-64 anos)</td>
                        <td>10,00€</td>
                        <td>9,50€</td>
                    </tr>
                    <tr>
                        <td>Sénior (65+ anos)</td>
                        <td>8,00€</td>
                        <td>7,50€</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    
    <section id="galeria">
        <h1>Galeria</h1>
        <div id="galeriaWrapper">
            <?php

                $file = "data/galeria.json";
                $conteudos = file_get_contents($file);
                $galeriaDataImages = json_decode($conteudos, true);
                $galeriaImgens = $galeriaDataImages["imagens"];

                $numImagens = count($galeriaImgens);

                if($numImagens > 0)
                {
                    foreach($galeriaImgens as $imagem) {
                        echo '<div class="imgThumb"><img src="imagens/galeria/'.$imagem.'" class="item"></div>';
                    }
                }
            ?>
        </div>
        <div id="galeriaOverlay">
            <img src="imagens/arrowLeft-overlay.png" alt="Imagem Anterior" id="backArrow-overlay">
            <img src="imagens/galeria/IMG_8908.jpg" alt="" id="imagem-overlay">
            <img src="imagens/arrowRight-overlay.png" alt="Próxima Imagem" id="nextArrow-overlay">
            <img src="imagens/close-overlay.png" alt="Fechar Imagem" id="close-overlay">
            
        </div>
    </section>

    <section id="ondeEstamos">
        <h1 class="whiteText">Onde Estamos</h1>
        <div id="mapaLocalizacao"></div>
        <script>
          function initMap() {
            var uluru = {lat: 38.946870, lng: -8.161086};
            var map = new google.maps.Map(document.getElementById('mapaLocalizacao'), {
              zoom: 17,
              center: uluru,
              scrollwheel: false
            });
            map.setCenter({lat: 38.946870, lng: -8.161086});
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
        </script>
    </section>

    <section id="contactos">
        <h1 class="yellowText">Contacte-nos</h1>
        <div id="listaContactos">
            <div class="morada">
                <h2>Museu Interactivo do Megalitismo</h2>
                <p>Largo dos Caminhos de Ferro, 1<br>
                  7490-220 Mora<br><br>
                  Tel: 266 439 074<br>
                  Email: <a href="mailto:geralmegalitismo@cm-mora.pt">geralmegalitismo@cm-mora.pt</a></p>
                <p>Coordenadas GPS: Lat 38.946870, Long -8.161086</p>
                <a href="https://www.facebook.com/museumegalitismo/" target="_blank"><img src="imagens/facebook.jpg" alt="Facebook"></a>
            </div>
            <div id="formularioContacto">
                <?php
                    session_start();
                
                    if(isset($_SESSION["erros"][5]))
                    {
                        echo '<div class="mensagem erro">'.$_SESSION["erros"][5].'</div>';
                    }
                
                    if(isset($_SESSION["sucesso"]))
                    {
                        echo '<div class="mensagem sucesso">'.$_SESSION["sucesso"].'</div>';
                    }
                ?>
                <form action="scripts/enviaEmail.php" method="post">
                    <?php
                    
                        if(isset($_SESSION["erros"][0]))
                        {
                            echo "<span>".$_SESSION["erros"][0]."</span><br>";
                        }
                    ?>
                    <input type="text" name="nome" required placeholder="Nome*" size="50" <?php if(isset($_SESSION["erros"])) echo 'value="'.$_SESSION["erros"]["contactInfo"][0].'"'; ?>>
                    <br>
                    <?php
                    
                        if(isset($_SESSION["erros"][1]))
                        {
                            echo "<span>".$_SESSION["erros"][1]."</span><br>";
                        }
                    ?>
                    <input type="email" name="email" required placeholder="E-mail*" size="50" <?php if(isset($_SESSION["erros"])) echo 'value="'.$_SESSION["erros"]["contactInfo"][1].'"'; ?>>
                    <br>
                    <?php
                    
                        if(isset($_SESSION["erros"][2]))
                        {
                            echo "<span>".$_SESSION["erros"][2]."</span><br>";
                        }
                    ?>
                    <input type="text" name="telefone" placeholder="Telefone" size="50" <?php if(isset($_SESSION["erros"])) echo 'value="'.$_SESSION["erros"]["contactInfo"][2].'"'; ?>>
                    <br>
                    <?php
                    
                        if(isset($_SESSION["erros"][3]))
                        {
                            echo "<span>".$_SESSION["erros"][3]."</span><br>";
                        }
                    ?>
                    <textarea name="mensagem" id="mensagem" cols="50" rows="6" placeholder="Mensagem*"><?php if(isset($_SESSION["erros"])) echo 'value="'.$_SESSION["erros"]["contactInfo"][3].'"'; ?></textarea>
                    <br>
                    <div id="captchaEnvBtn">
                      <div id="captchaWrapper">
                        <img src="scripts/captcha.php" alt="Captcha" id="captcha">
                        <?php
                    
                            if(isset($_SESSION["erros"][4]))
                            {
                                echo "<span>".$_SESSION["erros"][4]."</span><br>";
                            }
                        ?>
                        <input type="text" name="captcha" required size="24" placeholder="Digite o texto da imagem*" id="captchaText">
                      </div> 
                      <input type="submit" name="submit" value="ENVIAR MENSAGEM">
                      </div>
                    <input type="hidden" name="enviado" value="true">
                    
                    <?php
                        if(isset($_SESSION["erros"]))
                        {
                            unset($_SESSION["erros"]);
                            unset($_SESSION["sucesso"]);
                        }
                    ?>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div id="logosInstitucionais">
            <a href="http://www.cm-mora.pt" target="_blank"><img src="imagens/cmmora_logo.jpg" alt="Logotipo da Câmara Municipal de Mora"></a>
            <a href="http://www.fluviariomora.pt" target="_blank"><img src="imagens/fluviario_logotipo_transparente.gif" alt="Logotipo do Fluviário de Mora"></a>
            <a href="http://www.museuarqueologia.pt" target="_blank"><img src="imagens/museuarqueologia.png" alt="Logotipo do Museu Nacional de Arqueologia"></a>
        </div>
    </footer>
    <script src="scripts/jquery-3.1.1.min.js"></script>
    <script src="scripts/main.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4sciudjQxavw9NnmO7iHR-HFJ3QK1cIw&callback=initMap">
    </script>
</body>
</html>
