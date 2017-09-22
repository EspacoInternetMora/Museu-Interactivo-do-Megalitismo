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
</head>
<body>

    <header>
        <div id="navegacao">
            <a href="index.php"><img src="imagens/logo.jpg" alt="Logotipo do Museu do Megalitismo"></a>
            <nav>
                <ul>
                    <li><a href="index.php#museu"><span data-hover="O Museu">O Museu</span></a></li>
                    <li><a href="index.php#megalitismo"><span data-hover="Megalitismo">Megalitismo</span></a></li>
                    <!--<li><a href="index.php#actividades"><span data-hover="Actividades">Actividades</span></a></li>-->
                    <li><a href="educacao.php"><span data-hover="Educação">Educação</span></a></li>
                    <li><a href="index.php#horario"><span data-hover="Horário">Horário</span></a></li>
                    <li><a href="index.php#precario"><span data-hover="Preçário">Preçário</span></a></li>
                    <li><a href="index.php#galeria"><span data-hover="Galeria">Galeria</span></a></li>
                    <li><a href="index.php#ondeEstamos"><span data-hover="Onde Estamos">Onde Estamos</span></a></li>
                    <li><a href="index.php#contactos"><span data-hover="Contactos">Contactos</span></a></li>
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

    <section id="educacao">

        <h1>Educação</h1>
        <div id="educacaoWrapper">
            <nav>
                <ul>
                    <li><a href="educacao.php?esc=PreEscolar#educacao">Pré-Escolar (3 aos 5 anos)</a></li>
                    <li><a href="educacao.php?esc=1CEB#educacao">1º CEB (6 aos 10 anos)</a></li>
                    <li><a href="educacao.php?esc=2CEB#educacao">2º CEB (10 aos 12 anos)</a></li>
                    <li><a href="educacao.php?esc=3CEB#educacao">3º CEB (12 aos 15 anos)</a></li>
                    <li><a href="educacao.php?esc=Secundario#educacao">Ensino Secundário</a></li>
                    <li><a href="educacao.php?esc=Oficinas#educacao">Oficinas</a></li>
                    <li><a href="educacao.php?esc=ActividadesArLivre#educacao">Actividades ao ar livre</a></li>
                </ul>
            </nav>

            <div id="actividadesEducativasContainer">

                <?php
                    if(isset($_GET['esc']) && !empty($_GET['esc']))
                    {
                        $file = "data/educacao.json";
                        $rawData = file_get_contents($file);
                        $data = json_decode($rawData, true);

                        switch($_GET['esc'])
                        {
                            case "PreEscolar" :
                                $actividadesData = $data['PreEscolar'];
                                break;
                            case "1CEB" :
                                $actividadesData = $data['1CEB'];
                                break;
                            case "2CEB" :
                                $actividadesData = $data['2CEB'];
                                break;
                            case "3CEB" :
                                $actividadesData = $data['3CEB'];
                                break;
                            case "Secundario" :
                                $actividadesData = $data['Secundario'];
                                break;
                            case "Oficinas" :
                                $actividadesData = $data['Oficinas'];
                                break;
                            case "ActividadesArLivre" :
                                $actividadesData = $data['ActividadesArLivre'];
                                break;
                            default: 
                                $actividadesData = null;
                                break;
                        }

                        $numActividades = count($actividadesData);

                        if($numActividades > 0) {
                ?>
                            <h4 class="escalaoActividades"><?php echo $actividadesData['nome']; ?></h4>
                <?php
                            if(count($actividadesData['actividades']) > 0) {
                                foreach($actividadesData['actividades'] as $actividade) {    
                ?>
                                    <div class="actividadeWrapper">
                                        <p class="nomeActividade"><?php echo $actividade['nome']; ?></p>
                                        <p class="descricaoActividade"><?php echo $actividade['descricao']; ?></p>
                                        <p class="duracaoActividade"><strong>Duração:</strong> <?php echo $actividade['specs']['duracao']; ?></p>
                                    </div>

                <?php
                                }
                            } else {
                                echo "<p>Não existem actividades para este escalão.</p>";
                            }
                        }
                    } else {
                ?>

                        <h4 class="escalaoActividades">Projecto Pedagógico</h4>

                        <p><strong>Pedra a Pedra, um conto narrado nunca antes imaginado</strong></p>
                        <p>O Museu Interactivo do Megalitismo de Mora abriu as suas portas ao público no dia 15 de Setembro de 2016.</p>
                        <p>Com o propósito de garantir uma evolução sustentada ao longo do tempo, elegemos como prioridade, logo desde o início, o desenvolvimento do Projecto Educativo, que, numa perspectiva de complementaridade, abordasse, nomeadamente, o programa escolar da disciplina de História e Geografia dos 5º e 7º anos na parte que respeita à Pré-História. Pretendemos, deste modo, facultar aos professores ferramentas que, de forma prática, possam complementar a matéria leccionada.</p>
                        <p>Neste sentido, recriámos algumas actividades do quotidiano pré-histórico, que poderão, por exemplo, ensinar a talhar, a produzir cerâmicas ou a caçar. Com o objectivo de abranger outros públicos-alvo, desenvolvemos ainda actividades para crianças do pré-escolar e do primeiro ciclo, bem como para os alunos do secundário.</p>
                        <p>No que concerne os visitantes mais novos, procuramos incentivar a criatividade. Aos adolescentes, propomos-lhes algumas actividades que, directa ou indirectamente, estão ligadas às profissões relacionadas com a Arqueologia.</p>
                        <p>De um modo geral, a todas as faixas etárias, apresentamos, através de actividades ao ar livre, de oficinas, de colóquios e palestras, a riqueza e diversidade do valioso Património Cultural existente no Concelho de Mora.</p>
                        <p>Em estreita parceria, Museu Interactivo do Megalitismo de Mora e Fluviário de Mora oferecem a possibilidade de aquisição de bilhetes conjuntos para grupos e particulares, mas também actividades relacionadas com a temática da água. Enquanto o Fluviário de Mora, através da actividade “Marca d’Água”, procura sensibilizar para a importância da água ao longo da História, o Museu Interactivo do Megalitismo de Mora com a oferta da actividade “Peça d’Água”, procura fazer a ligação com as actividades do quotidiano das populações do Neolítico.</p>
                        <p>Independentemente da idade e escolaridade, todos os visitantes encontrarão certamente actividades feitas à sua medida, respondendo assim às expectativas e interesses de cada um.</p>
                        <p>Foi neste sentido que o Serviço Educativo do Museu Interactivo do Megalitismo de Mora elaborou um programa pedagógico com um diversificado leque de actividades adaptadas aos diversos públicos-alvo.</p>
                        <p>O nosso principal objectivo é oferecer diversas actividades geradoras de reflexão e que favoreçam a troca de experiências em torno de estratégias pedagógicas sobre o património cultural, e que respondam de forma qualificada à exigência dos diversos públicos-alvo.</p>

                        <a href="docs/ProjectoPedagogico-Museu_Megalitismo_Mora.pdf" class="pdfDownload">Projecto Pedagógico - Pedra a Pedra, um conto narrado nunca antes imaginado</a>

                <?php
                    }
                ?>
                
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
