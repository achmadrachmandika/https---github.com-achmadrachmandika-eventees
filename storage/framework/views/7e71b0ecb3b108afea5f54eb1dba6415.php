<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/styleheader.css')); ?>">

    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        
            <img src="<?php echo e(asset('images/logo_eventeesFix2.svg')); ?>" alt="Eventees HUB Logo" style="max-height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <?php if(Auth::check() && Auth::user()->hasAnyRole(['admin', 'mahasiswa', 'dosen'])): ?>
                <li class="nav-item">
                    <a href="<?php echo e(Auth::user()->hasRole('admin') || Auth::user()->hasRole('dosen') ? '/eventhub' : '/eventmhs'); ?>"
                        class="nav-link <?php echo e(request()->is('eventhub') || request()->is('eventmhs') ? 'active' : ''); ?>">
                        Home
                    </a>
                </li>
                <?php else: ?>
                <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/" class="nav-link">Home</a>
                </li>
                <?php endif; ?>
        
                <li class="nav-item <?php echo e(request()->is('about') ? 'active' : ''); ?>"><a href="/about" class="nav-link">About</a>
                </li>
        
                
        
                <?php if(auth()->check()): ?>
                <div class="dropdown mt-2">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, <?php echo e(auth()->user()->name); ?>

                    </a>
        
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
                <li class="nav-item">
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary mt-2">Login</a>
                </li>
                <?php endif; ?>
        
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/layouts/header.blade.php ENDPATH**/ ?>