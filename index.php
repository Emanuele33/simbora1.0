<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simbora</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicons ================================================== -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">	

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

		<!-- Slider ================================================== -->
		<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="css/owl.theme.css" rel="stylesheet" media="screen">

		<!-- Stylesheet ================================================== -->
		<link rel="stylesheet" type="text/css"  href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<!-- Navigation ==========================================-->
		<nav id="menu" class="navbar navbar-default navbar-fixed-top">
			<div class="container"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand page-scroll" href="#page-top">Simbora</a> </div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#about" class="page-scroll">Sobre</a></li>
							<li><a href="#services" class="page-scroll">Serviços</a></li>
        					<!--<li><a href="#portfolio" class="page-scroll">Gallery</a></li>-->
        					<li><a href="#testimonials" class="page-scroll">Desenvolvedores</a></li>
        					<li><a href="#contact" class="page-scroll">Fale Conosco</a></li>
    					</ul>
					</div>
					<!-- /.navbar-collapse --> 
				</div>
				<!-- /.container-fluid --> 
		</nav>
		<!-- Header -->
		<header id="header">
			<div class="intro">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="intro-text"> <span>Bem-vinda ao</span>
								<h1>Simbora</h1>
								<p>Compartilhamos e incentivamos uma corrente de empoderamento e fortalecimento. <br>
									Aqui vivenciamos a sororidade.</p>
									<a href="cads_usuario.php" class="btn btn-custom btn-lg page-scroll" style="width: 40%">Cadastre-se</a> 
									<a href="login.php" class="btn btn-custom btn-lg page-scroll" style="width: 40%; float: right">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Sobre Nós -->
		<div id="about">
			<div class="container">
				<div class="section-title text-center center">
					<h2>Sobre Nós</h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6"> 
						<img src="simbora1.png" class="img-responsive" alt=""> </div>
					<div class="col-xs-12 col-md-6">
						<div class="about-text">
							<h3>O que somos?</h3>
							<p>O site consiste em reunir mulheres que fazem trajetos semelhantes nas cidades, para que percorram trechos mais perigosos juntas. Só as mulheres entendem o alívio que é estar passando numa rua escura e perceber que a pessoa caminhando atrás da mesma era outra mulher. </p>
							<p>Infelizmente uma grande quantidade dos homens não entendem o quão hostil pode ser o ambiente urbano para uma mulher. Enquanto essa realidade não mudar, precisaremos tomar medidas preventivas, assim como o movimento Simbora.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Services Section -->
		<div id="services" class="text-center">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 section-title">
					<h2>Nossos Serviços</h2>
					<hr>
					<p>Nós temos várias ideias para facilitar a sua jornada diária. Pode contar conosco para encontrar uma forma mais segura e amigável para andar nas ruas. Conheça aqui alguns dos nossos serviços.</p>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-3"> <!-- <i class="fa fa-bullhorn"></i> -->
						<!-- <h4>Marcadores</h4>
						<p>Através dos marcadores localizados no mapa, você poderá visualizar outras mulheres que irão percorrer caminhos semelhantes ao seu.</p> -->
					</div> 
					<div class="col-xs-6 col-md-3"> <i class="fa fa-comments-o"></i>
						<h4>Relatos</h4>
						<p>Através dos marcadores localizados no mapa, você poderá visualizar relatos de mulheres que sofreram algum tipo de assédio na determinada localidade.</p>
					</div> 
					<div class="col-xs-6 col-md-3"> <i class="fa fa-group"></i>
						<h4>Listagem de Usuárias</h4>
						<p>Opção de mostrar as mulheres que irão percorrer o mesmo caminho que você.</p>
					</div>
					<<!-- div class="col-xs-6 col-md-3"> <i class="fa fa-magic"></i>
						<h4>Pellentesque</h4>
						<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
					</div> -->
				</div>
			</div>
		</div>
		<!-- Portfolio Section -->
<!--<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Gallery</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".lorem">Lorem Ipsum</a></li>
            <li><a href="#" data-filter=".dolor">Dolor Sit</a></li>
            <li><a href="#" data-filter=".adipiscing">Adipiscing Elit</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Achievements Section -->
<div id="achievements" class="text-center">
	<div class="overlay">
		<div class="container">
			<div class="section-title center">
				<h2>DADOS DE ASSÉDIO NO BRASIL</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="achievement-box"> <span class="count">503</span>
						<h4>Mulheres brasileiras sofrem agressão física a cada hora</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="achievement-box"> <span class="count">5.2</span>
						<h4>Milhões de Mulheres sofreram assédio no transporte público. </h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="achievement-box"> <span class="count">20.4</span>
						<h4>Milhões de mulheres já receberam comentários desrespeitosos nas ruas.</h4>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="achievement-box"> <span class="count">2.2</span>
						<h4>Milhões de mulheres já foram beijadas ou agarradas sem consentimento.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Testimonials Section -->
 <div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Desenvolvedores</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="01.jpg" alt=""/>
            <br>
            <br>
            <br>
            <p><strong>Eduardo Lonardi</strong>, IFPE, Analista de Redes.</p>
          </div>
          <div class="item"> <img src="02.jpg" alt=""/>
            <br>
            <br>
            <br>
            <p><strong>Emanuele Garcia</strong>, IFPE, Desenvolvedora Back-End.</p>
          </div>
          <div class="item"> <img src="03.jpg" alt=""/>
            <br>
            <br>
            <br>
            <p><strong>Maria Eduarda</strong>, IFPE, Desenvolvedora Front-End.</p>
          </div>
          <div class="item"> <img src="04.jpg" alt=""/>
            <br>
            <br>
            <br>
            <p><strong>Rhaiza Aguiar</strong>, IFPE, Desenvolvedora Front-End.</p>
          </div>
          <div class="item"> <img src="05.jpg" alt=""/>
            <br>
            <br>
            <br>
            <p><strong>Yago Nascimento</strong>, IFPE, Desenvolvedora Back-End.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
	<!-- Contact Section -->
	<div id="contact" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Fale Conosco</h2>
				<hr>
				
			</div>
			<div class="col-md-8 col-md-offset-2">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="name" class="form-control" placeholder="Name" required="required">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" id="email" class="form-control" placeholder="Email" required="required">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div id="success"></div>
					<button type="submit" class="btn btn-custom btn-lg">Send Message</button>
				</form>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container text-center">
			<p>Copyright &copy; 2016 Simbora. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
	<script type="text/javascript" src="js/bootstrap.js"></script> 
	<script type="text/javascript" src="js/SmoothScroll.js"></script> 
	<script type="text/javascript" src="js/jquery.counterup.js"></script> 
	<script type="text/javascript" src="js/waypoints.js"></script> 
	<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.js"></script> 
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
	<script type="text/javascript" src="js/contact_me.js"></script> 
	<script type="text/javascript" src="js/owl.carousel.js"></script> 
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
