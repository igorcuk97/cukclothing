	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin panel</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div class="row ucitavanje">
			<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-12">
							<h3> Upis proizvoda</h3>
							<div class="form-group">
								<input type="text" class="form-control" id="NazivProizvodaUpis" name="NazivProizvodaUpis" placeholder="Naziv proizvoda" onfocus="this.placeholder = 'Naziv proizvoda'" onblur="this.placeholder = 'Naziv proizvoda'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="OpisProizvodaUpis" name="OpisProizvodaUpis" placeholder="Opis proizvoda" onfocus="this.placeholder = 'Opis proizvoda'" onblur="this.placeholder = 'Opis proizvoda'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="CenaProizvodaUpis" name="CenaProizvodaUpis" placeholder="Cena proizvoda" onfocus="this.placeholder = 'Cena proizvoda'" onblur="this.placeholder = 'Cena proizvoda'">
							</div>
							<div class="form-group">
								<select class="form-control">
									<option value="1">Kategorija</option>
								</select>
							</div>
							<div class="form-group">
								<input type="file" class="form-control" id="subject" multiple>
							</div>
							<button type="submit" value="submit" class="primary-btn">Upiši proizvod</button>
						</div>
					</form>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->