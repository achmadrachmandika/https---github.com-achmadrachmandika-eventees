<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
<style>
    body {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
    }

    .navbar-brand {
        font-family: 'Montserrat', sans-serif;
        /* Ganti dengan font yang diinginkan */
        font-weight: 800;
        /* Berat font */
        font-size: 54px;
        /* Ukuran font */
        letter-spacing: 0px;
        /* Jarak antar huruf */
        color: #FFA500;
        /* Warna oranye untuk menyesuaikan dengan tema */
        text-transform: uppercase;
        /* Mengubah teks menjadi huruf kapital */
        transition: color 0.3s ease;
        /* Transisi warna saat hover */
    }

    .navbar-brand:hover {
        color: #FF6F61;
        /* Warna saat hover */
    }

    
</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/eventhub">Eventees HUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo e(request()->is('home') ? 'active' : ''); ?>"><a href="/home"
                        class="nav-link">Home</a></li>
                <li class="nav-item <?php echo e(request()->is('about') ? 'active' : ''); ?>"><a href="/about"
                        class="nav-link">About</a></li>
                <li class="nav-item <?php echo e(request()->is('event') ? 'active' : ''); ?>"><a href="/event"
                        class="nav-link">Events</a></li>
           

                <?php if(auth()->check()): ?>
                <div class="dropdown mt-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, <?php echo e(auth()->user()->name); ?>

                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Your Donate</a></li>
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <div style="color: red">Sign Out</div>
                            </a>
                        </li>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </ul>
                </div>
                <?php else: ?>
                
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\Project KWUJTI\KWUJti\resources\views/layouts/header.blade.php ENDPATH**/ ?>