	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1><?= $data['proizvod']->NazivProizvoda ?></h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--========	========Single Product Area =================-->
	<div class="product_image_area" id="ispismatorialjedan">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
					<?php foreach($data['slike'] as $s):?>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?= $s->src?>" alt="<?= $s->alt?>">
						</div>
					<?php endforeach; ?>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?= $data['proizvod']->NazivProizvoda ?></h3>
						<h2><?= $data['proizvod']->CenaProizvoda ?>.00 rsd</h2>
						<ul class="list">
							<li><span>Kategorija</span> : <?= $data['proizvod']->CenaProizvoda ?></li>
							<li><span>Boja</span> :
							<?php foreach($data['boje'] as $b):?>
								<?= $b->NazivBoje ?>
							<?php endforeach; ?>
							</li>
						</ul>
						<p><?= $data['proizvod']->OpisProizvoda ?></p>
						<div class="product_count">
							<label for="qty">Količina:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="product_count">
							<label for="qty">Veličina:</label>
							<input type="text" name="qty" id="ssts" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('ssts'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('ssts'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Dodaj u korpu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opis proizvoda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Detalji</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?= $data['proizvod']->OpisProizvoda ?></p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td><h5>Naziv</h5></td>
									<td><h5><?= $data['proizvod']->NazivProizvoda ?></h5></td>
								</tr>
								<tr>
									<td><h5>Cena</h5></td>
									<td><h5><?= $data['proizvod']->CenaProizvoda ?>,00 rsd</h5></td>
								</tr>
								<tr>
									<td><h5>Boje</h5></td>
									<td><h5>
									<?php foreach($data['boje'] as $b):?>
										<?= $b->NazivBoje ?>
									<?php endforeach; ?>
									</h5></td>
								</tr>
								<tr>
									<td><h5>Kategorija</h5></td>
									<td><h5><?= $data['proizvod']->NazivKategorije ?></h5></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->