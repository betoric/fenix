<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html lang="pt-BR" dir="ltr">
	<head>
		<title>Busca - Fênix </title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Roberto Almeira" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 11.0.5.24 - www.websitex5.com" />
		<meta name="viewport" content="width=960" />
		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?24"></script>
		<script type="text/javascript" src="res/x5engine.js?24"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Busca - Fênix </h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Pular o Menu principal">Ir para o conteúdo</a>
			<a id="imGoToMenu"></a><p class="imHidden">Menu principal:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Início</span>
							</span>
						</a>
					</li><li id="imMnMnNode3">
						<a href="a-fenix.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>A Fênix</span>
							</span>
						</a>
					</li><li id="imMnMnNode4">
						<a href="servicos.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Serviços</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<a href="contato.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Contato</span>
							</span>
						</a>
					</li><li id="imMnMnNode6">
						<a href="-clientes.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span> Clientes</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Resultados da busca</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>
				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Ler esta página novamente">Voltar para o conteúdo</a> | <a href="#imGoToMenu" title="Navegar de novo para a página">Voltar para o Menu principal</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para usar este site, você deve habilitar o JavaScript</div></noscript>
	</body>
</html>
