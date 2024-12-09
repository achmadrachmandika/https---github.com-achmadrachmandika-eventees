<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="<?php echo e(asset('images/logo_eventeesFix2.svg')); ?>" alt="Eventees HUB Logo" style="max-height: 50px;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php if(Auth::check() && Auth::user()->hasAnyRole(['admin', 'mahasiswa', 'dosen'])): ?>
            <a href="<?php echo e(Auth::user()->hasRole('admin') || Auth::user()->hasRole('dosen') ? '/eventhub' : '/eventmhs'); ?>"
                class="nav-item nav-link <?php echo e(request()->is('eventhub') || request()->is('eventmhs') ? 'active' : ''); ?>">
                Home
            </a>
            <?php else: ?>
            <a href="/" class="nav-item nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">Home</a>
            <?php endif; ?>
            <a href="/about" class="nav-item nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>">About</a>
            <?php if(auth()->check()): ?>
            <div class="dropdown nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
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
            <a href="<?php echo e(route('login')); ?>"
                class="nav-item nav-link <?php echo e(request()->is('login') ? 'active' : ''); ?>">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/layouts2/header.blade.php ENDPATH**/ ?>