<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Eventees-Register</title>
</head>

<body>
    <section class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <a href="#!">
                                    <img src="images/eventeeslog1.png" alt="EventeesHUB Logo" width="200" height="90">
                                </a>
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Selamat Datang di EventeesHUB
                            </h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input id="name"
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        type="text" name="name" placeholder=" " value="{{ old('name') }}" required />
                                    <label for="name" class="form-label">Nama</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="nip"
                                        class="form-control form-control-lg @error('nip') is-invalid @enderror"
                                        type="text" name="nip" placeholder=" " value="{{ old('nip') }}" required />
                                    <label for="nip" class="form-label">NIP Dosen</label>
                                    @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        type="email" name="email" placeholder=" " value="{{ old('email') }}" required />
                                    <label for="email" class="form-label">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        type="password" name="password" placeholder=" " required />
                                    <label for="password" class="form-label">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input id="password_confirmation" class="form-control form-control-lg"
                                        type="password" name="password_confirmation" placeholder=" " required />
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                </div>
                                <div class="text-left d-grid gap-2 mt-5">
                                    <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>