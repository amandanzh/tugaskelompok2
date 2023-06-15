<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                      <h3 class="text-center font-weight-light my-4">Login Customer</h3>

                                      @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                          {{ session('success') }}
                                        </div>
                                        <script>
                                          setTimeout(() => {
                                            location.href = '{{ route('customer.katalog') }}';
                                          }, 3000 );
                                        </script>
                                        @endif


                                        @if (session()->has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                          {{ session('error') }}
                                        </div>
                                        @endif
                                        
                                        <form method="POST" action="{{ route('customer.auth') }}">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail">Username</label>
                                                <input class="form-control @error('username') is-invalid @enderror" id="inputEmail" type="text" placeholder="Username" name="username" value="{{ old('username') }}" />
                                                @error('username')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                @error('password')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
    </body>
</html>
