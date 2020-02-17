<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Kreiraj nalog</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="app/assets/img/login.jpg" alt="">
						<div class="hover">
							<h4>Dobrodošli!</h4>
							<p>Ukoliko već imate nalog, kliknite ispod da se prijavite.</p>
							<a class="primary-btn" href="index.php?page=loginovanje">Prijavite se</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Kreiraj nalog</h3>
						<form class="row login_form" action="index.php?page=registration" method="post" id="regForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = 'Username'" onblur="this.placeholder = 'Username'">
								<p id="usernameError"></p>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = 'Email'" onblur="this.placeholder = 'Email'">
								<p id="emailError"></p>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="passworR" placeholder="Šifra" onfocus="this.placeholder = 'Šifra'" onblur="this.placeholder = 'Šifra'">
								<p id="passwordError"></p>
							</div>
							<div class="col-md-12 form-group">
								<button type="button" value="submit" name="register" id="register" class="primary-btn">Kreiraj nalog</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>