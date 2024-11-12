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
                        class="nav-link <?php echo e(request()->is('eventhub') || request()->is('eventmhs') ? 'active' : ''); ?>">
                        Home
                    </a>
                    </li>
                <?php else: ?>
                <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>"><a href="/" class="nav-link">Home</a>
                </li>
                <?php endif; ?>
                <a href="/about" class="nav-item nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>">About</a>
            </div>
            <?php if(auth()->check()): ?>
            <div class="dropdown mt-2">
                <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
        </div>
    </nav><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/layouts2/header.blade.php ENDPATH**/ ?>