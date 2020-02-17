$(document).ready(function(){
	$("#register").click(proveraKorisnika);
	dohvatiProizvode();
	$("#sortiranjeaz").on('change', function(){
		$("#loadMore").css("display","block");

		let trenutno = Array.from(document.getElementsByClassName("proizvodcici")).length;
		let boja = $("input:radio.boje:checked").val();

		if(this.value==0)
		dohvatiProizvode();
		else dohvatiProizvode(this.value, boja, trenutno);
	});

	$(".boje").on('change', function(){
		$("#loadMore").css("display","block");

		let trenutno = Array.from(document.getElementsByClassName("proizvodcici")).length;
		let sort = $("#sortiranjeaz").val();

		if(this.value==0)
		dohvatiProizvode();
		else dohvatiProizvode(sort, this.value, trenutno);
	});

	$("#loadMore").on("click", function(){
		$("#loadMore").css("display","block");

		let trenutno = Array.from(document.getElementsByClassName("proizvodcici")).length;
		console.log(trenutno)
		let potrebno = trenutno+6;
		let sort = $("#sortiranjeaz").val();
		let boja = $("input:radio.boje:checked").val();

		dohvatiProizvode(sort, boja, potrebno);
	})
})


function proveraKorisnika(){

    var username = document.getElementById("username").value.trim();
    var email = document.getElementById("email").value.trim();
	var password = document.getElementById("password").value.trim();

	var usernameError = document.getElementById("usernameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

	var regUsername=/^[a-z]{2,25}$/;
	var regEmail=/^[a-z]+\d*\@(gmail|yahoo|cuk)\.(com)$/;
	var regPassword=/^(?=.*\d).{6,}$/;

	var error = [];

	if (username == "") {
		usernameError.textContent = "Username mora biti unet";
		error.push("Username mora biti unet");
	} else if (!regUsername.test(username)) {
		usernameError.textContent = "Username nije validan";
		error.push("Username nije validan");
	} else {
		usernameError.textContent = "";
	}

	if (email == "") {
		emailError.textContent = "Email mora biti unet";
		error.push("Email mora biti unet");
	} else if (!regEmail.test(email)) {
		emailError.textContent = "Email nije validan";
		error.push("Email nije validan");
	} else {
		emailError.textContent = "";
	}

	if (password == "") {
		passwordError.textContent = "Password mora biti unet";
		error.push("Password mora biti unet");
	} else if (!regPassword.test(password)) {
		passwordError.textContent = "Password nije validan";
		error.push("Password nije validan");
	} else {
		passwordError.textContent = "";
	}

	if (error.length == 0) {
		$.ajax({
			url: "index.php?page=register",
			method: "POST",
			data: {
				register: true,
				username: username,
				email: email,
				password: password
			},
			success: function (data) {
				alert("Registracija je uspešno odrađena!");
			},
			error: function (xhr, status, error) {
				var status = xhr.status;
				switch (status) {
					case 422:
						alert('Informacije nisu dobre!');
						break;
					case 409:
						alert('Email već postoji.');
						break;
					case 500:
						alert("Greška sa bazom.");
						break;
					case 412:
						alert("Korisnik već postoji.");
						break;
					default:
						alert("Error:" + xhr.status);
				}
			}
		});
	}
};
function dohvatiProizvode(sort=null, filter=null, potrebno=6){
	console.log(sort)
    $.ajax({
		url: "index.php?page=shopGet&sort="+sort+"&filter="+filter+"&potrebno="+potrebno,
        method: "GET",
        dataType: "json",
        success: function (data){
			if(data.length>=36)
			$("#loadMore").css("display","none");
			ispisiProizvode(data);
			console.log(data)
        },
        error: function (xhr, status, error) {

        }
    });
}
function ispisiProizvode(data){
    let html="";
    data.forEach(i=>{
        html+=`
	<div class="col-lg-4 col-md-6 proizvodcici">
		<a href="index.php?page=singleitem&id=${i.IDProizvoda}">
		<div class="single-product">
			<img class="img-fluid" src="${i.GlavnaSlikaProizvoda}" alt="${i.NazivProizvoda}">
			<div class="product-details">
				<h6>${i.NazivProizvoda}</h6>
				<div class="price">
					<h6>${i.CenaProizvoda}.00 rsd</h6>
				</div>
				<div class="prd-bottom">
				<a href="" class="social-info">
				<span class="ti-bag"></span>
				<p class="hover-text">dodaj</p>
				</a>
				<a href="index.php?page=singleitem&id=${i.IDProizvoda}" class="social-info">
				<span class="lnr lnr-move"></span>
				<p class="hover-text">detalji</p>
				</a>
				</div>
				</div>
			</div>
		</a>
	</div>`;
});
    $("#ispismatori").html(html);
}