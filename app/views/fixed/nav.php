<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="app/assets/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<?php foreach ($data["navigacija"] as $nav): ?>
							<li class="nav-item"><a class="nav-link" href="index.php?page=<?=$nav->Ahref?>"><?=$nav->NazivNav?></a></li>
							<?php endforeach; ?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="index.php?page=cart" class="cart"><span class="ti-shopping-cart"></span></a></li>
							<?php if(!isset($_SESSION['user'])): ?>
								<li class="nav-item">
									<a href="index.php?page=loginovanje" class="cart">
										<span class="ti-linux"></span></a></li>
							<?php endif; ?>
							<?php if(isset($_SESSION['user'])): ?>
								<li class="nav-item">
									<a href="index.php?page=logout" class="cart">
										<span class="ti-user"></span></a></li>
							<?php endif; ?>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Pretražite proizvode">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
