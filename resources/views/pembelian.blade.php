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

	<nav class="navbar navbar-expand-lg navbar-dark" style="background: #eba427;">
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

		<h4 class="text-center">Pembelian Anda</h4>

		@if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
      @endif

		
		<div class="row pt-5">

			@foreach($data as $item)

				<div class="col-md-12 mb-3 ">

					<div class="card shadow-sm">
						<div class="card-body">

							<div class="row">
								<div class="col-md-3">
									<img src="{{ asset('img/' . $item->catalog->img) }}" style="width: 100%;" alt="">			
								</div>

								<div class="col-md-7">

									{{ $item->catalog->nama }}<br>
									Rp {{ number_format($item->catalog->harga) }}<br>

									@if($item->status_return == 0)
										Tanggal Pembelian : {{ $item->tanggal_pembelian }}
									@else
										Status : <span class="text-danger"> Barang Direturn </span> <br>
										Tanggal Return : {{ $item->tanggal_return }}
									@endif

								</div>

								<div class="col-md-2 text-right">

									@if($item->status_return == 0)
										<a href="{{ route('customer.return', $item->id) }}" onclick="return confirm('Apakah Anda Yakin Mereturn Barang?')" class="btn btn-danger btn-sm">Return Barang</a><br><br>
										<a href="{{ route('customer.batal_beli', $item->id) }}" onclick="return confirm('Apakah Anda Yakin Mereturn Barang?')" class="text-danger">Batal Beli</a>
									@endif

								</div>

							</div>
							
						</div>


					</div>
					<div class="bg-light mb-2">
						
					</div>
					<!-- <p class="text-center">{{ $item->nama }} <a href="{{ route('customer.beli', $item->id) }}" onclick="return confirm('Apakah Anda Yakin Ingin Membeli')" class="ml-3 btn btn-sm btn-primary">Beli</a></p> -->
					
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