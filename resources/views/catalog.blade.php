<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css" />
	<link rel="stylesheet" href="/css/style.css" />

	<title>Katalog</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark " style="background: #eba427;">
		<div class="container">

			<a class="navbar-brand" href="#">Katalog</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{ route('customer.katalog') }}">Katalog <span class="sr-only">(current)</span></a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('customer.pembelian') }}">Pembelian</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="{{ route('home') }}">Dashboard Admin</a>
		      </li>
		     
		      <li class="nav-item">
		        <a href="{{ route('customer.logout') }}" class="nav-link  text-danger">Logout</a>
		      </li>
		    </ul>
		  </div>
			
		</div>
	  
	</nav>

	<div class="container pt-4 mb-5">

		
		<div class="row pt-5">

			@foreach($data as $item)

				<div class="col-md-3 mb-3">
					<div class="shadow-sm">
						<div class="bg-light mb-2">
						<img src="{{ asset('img/' . $item->img) }}" style="width: 100%;" alt="">
					</div>
					<div class="p-3">
						
						<p>{{ $item->nama }}
							<br>
							Rp{{ number_format($item->harga) }}<br>
							
						</p>	
						<a href="{{ route('customer.beli', $item->id) }}" onclick="return confirm('Apakah Anda Yakin Ingin Membeli')" class="btn btn-sm btn-primary">Beli</a>
					</div>
					</div>
					
					
				</div>

			@endforeach

		</div>

		<hr>
	</div>

	<div class="bg-light pt-5 pb-5">

		<div class="container py-3 pt-4">
			
			<div class="row">
				<div class="col">
					<h4 class="mb-3">About Uniqlo</h4>
					<p>Information</p>
					<p>Store Locator</p>
					<p>Live Station</p>

				</div>

				<div class="col">
					<h4 class="mb-3">Help</h4>
					<p>FAQ</p>
					<p>Privacy Policy</p>
					<p>Accessibility</p>
					<p>Contact Us</p>

				</div>

				<div class="col">
					<h4 class="mb-3">Account</h4>
					<p>Membership</p>
					<p>Profile</p>
				</div>

				<div class="col">
					<h4 class="mb-3">Two Clothing Social</h4>
					<p>
						<a href="{{ route('customer.login') }}">
							Account
						</a>
				</p>
				</div>
			</div>

		</div>
		
	</div>
	
</body>
</html>