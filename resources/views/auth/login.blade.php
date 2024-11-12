<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Eventees-Login</title>
    <style>
        .full-bg {
            background-image: url('/img1/bg_1.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <section class="full-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="text-center mb-4">
                        <a href="#!">
                           <img src="{{ asset('images/logo_eventeesFix2.svg') }}" alt="EventeesHUB Logo" width="200" height="90"
                                class="mx-auto d-block">
                        </a>
                    </div>
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Selamat Datang di Eventees Hub
                            </h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
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
                                    <span toggle="#password" class="fa fa-eye toggle-password"
                                        style="cursor: pointer;"></span>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                </div>
                                <div class="text-center mt-4">
                                    <a href="#" class="btn btn-secondary" onclick="showRoleModal()">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Role Confirmation -->
        <div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="roleModalLabel">Pilih Role Anda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda seorang Dosen atau Mahasiswa?</p>
                        <button class="btn btn-primary" onclick="confirmRole('dosen')">Dosen</button>
                        <button class="btn btn-secondary" onclick="confirmRole('mahasiswa')">Mahasiswa</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function confirmRole(role) {
            if (role === 'dosen') {
                window.location.href = "{{ route('register.dosen') }}";
            } else if (role === 'mahasiswa') {
                window.location.href = "{{ route('register.mahasiswa') }}";
            }
        }

        function showRoleModal() {
            $('#roleModal').modal('show');
        }
    </script>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>