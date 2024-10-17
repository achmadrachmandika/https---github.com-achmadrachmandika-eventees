<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Eventees-Login</title>
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input id="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        type="email" name="email" placeholder=" " value="{{ old('email') }}" />
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
                                        type="password" name="password" placeholder=" " />
                                    <label for="password" class="form-label">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="text-left gap-2 mt-4">
                                    <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                </div>
                               <div class="text-left gap-2 mt-4">
                                <a href="#" class="btn btn-secondary" onclick="confirmRole()">Daftar</a>
                            </div>
                            </form>
                            <!-- Tombol Register -->
                         
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
<script>
    function confirmRole() {
        const role = prompt("Apakah Anda seorang Dosen atau Mahasiswa? Ketik 'Dosen' untuk Dosen, atau 'Mahasiswa' untuk Mahasiswa.").toLowerCase();
        
        if (role === 'dosen') {
            // Jika pengguna mengetik 'Dosen', arahkan ke route dosen
            window.location.href = "{{ route('register.dosen') }}";
        } else if (role === 'mahasiswa') {
            // Jika pengguna mengetik 'Mahasiswa', arahkan ke route mahasiswa
            window.location.href = "{{ route('register.mahasiswa') }}"; // Pastikan rute ini ada
        } else {
            alert("Input tidak valid. Silakan coba lagi."); // Tampilkan peringatan jika input tidak valid
        }
    }
</script>