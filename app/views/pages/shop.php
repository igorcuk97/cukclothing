	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Prodavnica</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row ucitavanje">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="head sidebar-filter mt-50 kontrapeding">
					<div class="top-filter-head">Filtriranje</div>
					<div class="common-filter">
						<div class="head">Boje</div>
						<form action="#">
							<ul>
								<li class="filter-list">
								<input class="pixel-radio boje" type="radio" id="0" value="0" name="color">
								<label for="sveboje">sve boje
								</label>
								</li>
							<?php foreach($data["boje"] as $b): ?>
								<li class="filter-list">
								<input class="pixel-radio boje" value="<?=$b->IDBoje?>" type="radio" id="<?=$b->NazivBoje?>" name="color">
								<label for="<?=$b->NazivBoje?>"><?=$b->NazivBoje?>
								</label>
								</li>
							<?php endforeach; ?>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select id="sortiranjeaz">
							<option value="0">Sortiraj</option>
							<option value="nazivAsc">Po nazivu, A-Z</option>
							<option value="nazivDesc">Po nazivu, Z-A</option>
							<option value="cenaAsc">Po ceni, rastuće</option>
							<option value="cenaDesc">Po ceni, opadajuće</option>
							<option value="datumAsc">Po datumu, rastuće</option>
							<option value="datumDesc">Po datumu, opadajuće</option>
						</select>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list ucitavanje">
					<div class="row " id="ispismatori">
					<!-- ispis proizvoda -->
					</div>
					<button id="loadMore" class="genric-btn primary circle">Učitaj još</button>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>