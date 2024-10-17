<aside class="main-sidebar sidebar-dark-primary elevation-4"
    style="background: linear-gradient(to bottom, rgb(41, 48, 66), rgb(41, 48, 66)); color: #fff;">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link"
        <h1 class="brand-title" style="font-size: 24px; margin: 3px; color: #fff; text-alignt:center;">EVENTEEShub</h1>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Event Link -->

                <li class="nav-item">
                    <a href="<?php echo e(route('events.index')); ?>"
                        class="nav-link <?php echo e(request()->routeIs('events.index') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Event Mahasiswa
                        </p>
                    </a>
                </li>

                

                <li class="nav-item">
                    <a href="<?php echo e(route('eventreqdosens.index')); ?>"
                        class="nav-link <?php echo e(request()->routeIs('eventreqdosens.index') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Event Request Dosen
                        </p>
                    </a>
                </li>
                <!-- Keuangan Link -->
                <li class="nav-item">
                    <a href="<?php echo e(route('pembayaran.index')); ?>"
                        class="nav-link <?php echo e(request()->routeIs('pembayaran.index') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>
                            Keuangan
                        </p>
                    </a>
                </li>
                <!-- Laporan Link -->
                <li class="nav-item">
                    <a href="#" class="nav-link <?php echo e(request()->routeIs('laporan') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('feedback.index')); ?>" class="nav-link <?php echo e(request()->routeIs('feedback.index') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Kritik dan Saran
                        </p>
                    </a>
                </li>

                <!-- Spacer for logout -->
                <li class="nav-item flex-grow-1"></li>

                <!-- Logout Button -->
                <li class="nav-item sidebar-footer">
                    <form action="<?php echo e(route('logout')); ?>" method="POST" class="nav-link">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link text-white" style="width: 50%; text-align: left;">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p >Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH D:\Magang KWUJTI\https---github.com-achmadrachmandika-eventees\resources\views/dashboard/sidebar.blade.php ENDPATH**/ ?>