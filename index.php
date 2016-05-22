<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Diego Gadens</title>

<meta name="description" content="Diego Gadens - Mestre em Engenharia da Computação pela Universidade Presbiteriana Mackenzie de São Paulo/SP - Programador Web & Mobile - Engenheiro de Software - Professor" />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>

<!--Open Graph tags-->
<meta property="og:title" content="Diego Gadens" />
<meta property="og:site_name" content="Página pessoal de Diego Gadens"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.diegogadens.com" />
<meta property="og:image" content="http://www.diegogadens.com/_include/img/profile/profile-01-full.jpg" />
<meta property="og:description" content="Mestre em Engenharia da Computação pela Universidade Presbiteriana Mackenzie (SP), Diego atua como professor do ensino superior além de trabalhar com análise e especificação de requisitos, desenvolvimento de software e gerência de equipes e projetos." />
<meta property="og:locale" content="pt_BR" />

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="_include/img/favicon.ico">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Budget Selector -->
<script>

    function contactOptionsSelector(option){
        switch (option){
            case 'open':
                document.getElementById('detalhes_orcamento').style.display = 'block';
                break;
            case 'close':
                document.getElementById('detalhes_orcamento').style.display = 'none';
                break;
            default:
                document.getElementById('detalhes_orcamento').style.display = 'none';
                break;
        }
    }

</script>


<!-- Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66335603-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Analytics -->


<!-- Specifying my social profiles to Google -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Person",
  "name" : "Diego Gadens",
  "url" : "http://www.diegogadens.com",
  "sameAs" : [
    "http://www.facebook.com/diegogadens",
    "http://www.linkedin.com/in/diegogadens",
    "http://instagram.com/diegogadens",
    "http://twitter.com/diegogadens",
    "http://www.youtube.com/user/diegogadens",
    "http://plus.google.com/+DiegoGadens"
  ]
}
</script>
<!-- Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>

	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>

        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>

        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Diego Gadens | Desenvolvedor Web & Mobile | Engenheiro de Software | Professor">Diego Gadens</a>
        </div>

        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Início</a></li>
                <li><a href="#work">Portfólio</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Portfólio</h2>
                        <h3 class="title-description">Clique nas imagens abaixo, ou baixe meu portfólio <br>completo em alta resolução <a href="_include/docs/Portifolio_Diego_Gadens_HD.zip" target="_blank" download>clicando aqui</a></h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Tipos de trabalhos</li>
                        <li><a href="#filter" data-option-value="*" class="selected">Todos os tipos</a></li>
                        <li><a href="#filter" data-option-value=".webAndMobile">Web & Mobile</a></li>
                        <li><a href="#filter" data-option-value=".webOnly">Apenas Web</a></li>
                        <li><a href="#filter" data-option-value=".mobileOnly">Apenas Mobile</a></li>
                        <li><a href="#filter" data-option-value=".socialMedia">Mídias Sociais</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 webAndMobile">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="WeGO - <a class='zoom-portfolio-img' href='_include/img/work/full/wego.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/wego.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>

                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/wego.jpg" alt="Tecnologias: Node.js, Sails.js, Angular.js, Ember.js, Javascript, MongoDB, Java, Swift.">
                            </li>
                        	<!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 webAndMobile">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Big Esquenta do Rock - Jogos - <a class='zoom-portfolio-img' href='_include/img/work/full/bigesquentagame.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/bigesquentagame.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/bigesquentagame.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, Java, Objective-C, Flash.">
                            </li>
                        	<!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 webOnly">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Site Oficial Aécio Neves 2014 - <a class='zoom-portfolio-img' href='_include/img/work/full/aecio.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/aecio.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/aecio.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, Angular.js.">
                            </li>
                        	<!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 webOnly">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dieta Gourmet - <a class='zoom-portfolio-img' href='_include/img/work/full/dietagourmet.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/dietagourmet.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/dietagourmet.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, API PagSeguro.">
                            </li>
                            <!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 webOnly">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Fnac - <a class='zoom-portfolio-img' href='_include/img/work/full/fnac.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/fnac.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/fnac.jpg" alt="Tecnologias: HTML, CSS, Javascript.">
                            </li>
                        	<!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 webOnly">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Big Esquenta do Rock - Telão Copacabana - <a class='zoom-portfolio-img' href='_include/img/work/full/bigesquentatelao.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/bigesquentatelao.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/bigesquentatelao.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, APIs Instagram e Facebook.">
                            </li>
                            <!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 mobileOnly">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Sinal Verde - <a class='zoom-portfolio-img' href='_include/img/work/full/greenpeace.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/greenpeace.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/greenpeace.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, Java, Objective-C.">
                            </li>
                        	<!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 mobileOnly">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Copa Perdigão do Brasil 2013 - <a class='zoom-portfolio-img' href='_include/img/work/full/perdigao.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/perdigao.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/perdigao.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, Java, Objective-C.">
                            </li>
                        	<!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 mobileOnly">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Viapp - <a class='zoom-portfolio-img' href='_include/img/work/full/viapp.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/viapp.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/viapp.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript, Java, Objective-C.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Bem vindos imitadores - <a class='zoom-portfolio-img' href='_include/img/work/full/bemvindos.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/bemvindos.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/bemvindos.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dotz - <a class='zoom-portfolio-img' href='_include/img/work/full/dotz.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/dotz.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/dotz.jpg" alt="Tecnologias: HTML, CSS, Javascript, C# .NET, MS SQL Server.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Lollapalooza Second Screen - <a class='zoom-portfolio-img' href='_include/img/work/full/lollapalooza.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/lollapalooza.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/lollapalooza.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Festa de Natal D-Link - <a class='zoom-portfolio-img' href='_include/img/work/full/dlink.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/dlink.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/dlink.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dueto Fhom - <a class='zoom-portfolio-img' href='_include/img/work/full/fhom.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/fhom.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/fhom.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript.">
                            </li>
                            <!-- End Item Project -->

                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs span3 socialMedia">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Amigo da onça - <a class='zoom-portfolio-img' href='_include/img/work/full/gher.jpg' target='_blank'> (Zoom na imagem) </a>" href="_include/img/work/full/gher.jpg">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/gher.jpg" alt="Tecnologias: PHP, MySQL, HTML, CSS, Javascript.">
                            </li>
                            <!-- End Item Project -->
                        </ul>
                    </section>
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Um pouco sobre mim</h2>

                <h3 class="title-description">Veja meu currículo em detalhes no <a href="https://www.linkedin.com/profile/view?id=AAIAAAHtFkoB55q9q8cGj5Fi3ckLO5DNZECa0As" target="_blank">Linked-in</a></h3>


            </div>
        </div>
    </div>
    <!-- End Title Page -->

    <!-- People -->
    <div class="row">

        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                <a class="hover-wrap fancybox" title="Desenvolvimento" href="_include/img/profile/profile-01-full.jpg">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Desenvolvimento</span>
                </a>
                <!-- Thumb Image and Description -->
                <img src="_include/img/profile/profile-01.jpg" alt="Experiência de mais de 6 anos em desenvolvimento Web & Mobile">
            </div>
            <h3 class="profile-name">Programador Web & Mobile</h3>
            <p class="profile-description">Desde 2009 tenho trabalhado com projetos de software que tem a <a href="https://pt.wikipedia.org/wiki/Computa%C3%A7%C3%A3o_em_nuvem" target="_blank">nuvem </a> como principal plataforma de distribuição. Tenho grande exeriência em programação <span class="italic">Java</span> e <span class="italic">PHP</span>, mas mais recentemente o principal mix de tecnologias que utilizo contém <span class="italic">HTML, CSS</span> e <span class="italic">Javascript</span>. Dentre os principais frameworks e bibliotecas que tenho trabalhado/estudado estão: <span class="italic"><a href="https://jquery.com/" target="_blank">jQuery</a></span>, <span class="italic"><a href="https://nodejs.org/" target="_blank">Node.js</a></span>, <span class="italic"><a href="http://sailsjs.org/" target="_blank">Sails.js</a></span>, <span class="italic"><a href="https://angularjs.org/" target="_blank">Angular.js</a></span>, <span class="italic"><a href="http://emberjs.com/" target="_blank">Ember.js</a></span>. No âmbito do mobile, todas as tecnologias já citadas são também utilizadas para a construção de aplicativos híbridos (que contemplam Android, iOS, Windows Phone, etc, de uma só vez). Já no desenvolvimento específico para cada plataforma, o chamado desenvolvimento nativo, o foco das tecnologias fica em <span class="italic"><a href="https://developer.android.com/develop/index.html" target="_blank">Java</a></span> para o Android e <span class="italic"><a href="http://www.apple.com/swift/" target="_blank">Swift</a></span> para o iOS (iPhone). Atualmente vivo em Sydney-Australia, onde trabalho como desenvolvedor back-end com Node.js na <a href='https://www.tab.com.au/' target='_blank'>Tabcorp</a></p>
        </div>
        <!-- End Profile -->

        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                <a class="hover-wrap fancybox" title="Planejamento e gestão" href="_include/img/profile/profile-02-full.jpg">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Planejamento e gestão</span>
                </a>
                <!-- Thumb Image and Description -->
                <img src="_include/img/profile/profile-02.jpg" alt="Experiência de mais de 4 anos em análise de requisitos, modelagem e gerenciamento de projetos de software.">




            </div>
            <h3 class="profile-name">Engenheiro de Software</h3>
            <p class="profile-description">Nos <a href="http://diegogadens.com/#work">diversos trabalhos</a> que realizei ao longo de minha carreira, tive a oportunidade de atuar em todas as etapas do desenvolvimento de software, partindo dos primeiros passos, que incluem a análise, o mapeamento e a especificação de requisitos, passando pela arquitetura e modelagem do software bem como da infraestrutura necessária para sua execução. Por último, mas não menos importante, pude vivenciar diversas vezes o lançamento de produtos, entregas finais ao cliente, além de acompanhamento, suporte e manutenção nos períodos pós-venda. No decorrer destes trabalhos, tive também a oportunidade de atuar no gerenciamento dos projetos e na liderança de equipes multifuncionais, com programadores, DBAs, designers, entre outros.</p>
        </div>
        <!-- End Profile -->

        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                <a class="hover-wrap fancybox" title="Ensino" href="_include/img/profile/profile-03-full.jpg">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Ensino</span>
                </a>
                <!-- Thumb Image and Description -->
                <img src="_include/img/profile/profile-03.jpg" alt="Experiência de quase 2 anos como professor universitário">
            </div>
            <h3 class="profile-name">Professor M.Sc.</h3>
            <p class="profile-description">Concluí no ano de 2012 o meu Mestrado em Engenharia Elétrica, com ênfase em Engenharia da Computação na <a href="http://up.mackenzie.br/upm" target="_blank"> Universidade Presbiteriana Mackênzie</a> em São Paulo - SP. Durante o Mestrado, minha linha de pesquisa foi a <a href="https://pt.wikipedia.org/wiki/Computa%C3%A7%C3%A3o_natural" target="_blank">Computação Natural</a>, a qual forneceu a base para o desenvolvimento de um algoritmo de vida artificial baseado no modelo de <span class="italic"><a href="https://en.wikipedia.org/wiki/Boids" target="_blank">Boids</a></span> para agrupamento de dados em ambientes dinâmicos. Sempre tive um grande apreço pela área acadêmica e lecionei entre os anos de 2014 e 2015 no curso de graduação em Sistemas de Informação na <a href="http://www.unisep.edu.br" target="_blank">Unisep</a> em Dois Vizinhos - PR. Parei de lecionar temporariamente apenas porque no final do ano de 2015 recebi uma proposta de emprego de uma empresa australiana, e desde então resido em Sydney-Austrália. As minhas áreas de interesse incluem Algoritmos e Lógica de Programação, Teoria da Computação, Inteligência Artificial e suas derivadas.</p>
        </div>
        <!-- End Profile -->

    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Contato</h2>
                <h3 class="title-description">Deseja algo que não encontrou no meu site? Entre em contato utilizando o formulário abaixo</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->

    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">

        	<form id="contact-form" class="contact-form" action="#" novalidate>
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nome" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email" value="" name="email" />
                </p>
                <p class="contact-phone">
                    <input id="contact_phone" type="text" placeholder="DDD - Telefone" value="" name="phone" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Sua mensagem" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Enviar mensagem</a>
                </p>

                <div id="response">

                </div>
            </form>

        </div>

        <div class="span3">
        	<div class="contact-details">
        		<h3>Detalhes de contato</h3>
                <ul>
                    <li><a href="#">diegogadens@gmail.com</a></li>
                    <li>Whatsapp/celular: +61 0426 070 505</li>
                    <li>Skype: diegogadens</li>
                    <li>
                        Diego Gadens
                        <br>
                        Sydney, NSW
                        <br>
                        Austrália
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="http://www.linkedin.com/in/diegogadens" title="Siga-me no LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        <li><a href="https://www.facebook.com/diegogadens" title="Siga-me no Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://twitter.com/diegogadens" title="Siga-me no Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="http://www.behance.net/diego_gadens" title="Siga-me no Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                        <li><a href="https://plus.google.com/+DiegoGadens" rel=me title="Siga-me Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2016 Diego Gadens.</p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>
