<nav class="nav navbar navbar-expand-lg navbar-dark iq-navbar bg-dark">
    <div class="container-fluid navbar-inner">
        <a href="#" class="navbar-brand">
            <!--Logo start-->
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" height="105" width="105" alt="logo">
            <!--logo End-->
        </a>

        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                </svg>
            </i>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav  ms-auto align-items-center navbar-list mb-lg-0">
                <li class="nav-item dropdown">
                    <?php
                        $notifications = \App\Models\Booking::with('service')->where('status', 'unread')->latest()->get();
                    ?>
                    <a href="#" class="nav-link" id="notification-drop" style="position:relative;" data-bs-toggle="dropdown">
                        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                  d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                                  fill="currentColor"></path>
                        </svg>

                        <?php if(count($notifications) > 0): ?>
                           <?php $__env->startPush('scripts'); ?>
                                <script>

                                    document.getElementById('mark-as-read').addEventListener('click', function() {

                                    });

                                    function checkNewItem() {
                                        fetch("<?php echo e(route('admin.booking.get')); ?>")
                                            .then(response => response.json())
                                            .then(data => {
                                                let notificationCount = document.getElementById('notification-count');

                                                if (data.length > 0) {
                                                    notificationCount.innerHTML = data.length;
                                                    playSound();
                                                }
                                            })
                                            .catch(error => console.error('Erreur de la requête AJAX:', error));
                                    }

                                    function playSound() {
                                        const audio = new Audio("<?php echo e(asset('admin/assets/audio/notification.mp3')); ?>");
                                        audio.play();
                                    }

                                    setInterval(checkNewItem, 5000);

                                </script>
                           <?php $__env->stopPush(); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" style="position:absolute; top: -25%; left: -120%; z-index: 9999;">
                                <circle id="notification-dot" cx="80" cy="25" r="8" fill="red">
                                    <animate
                                        attributeName="opacity"
                                        values="0;1;0"
                                        dur="1s"
                                        repeatCount="indefinite" />
                                </circle>
                                <text id="notification-count" x="80" y="25" font-size="11" fill="white" text-anchor="middle" dy=".3em"><?php echo e(count($notifications)); ?></text>
                            </svg>
                        <?php endif; ?>

                    </a>
                    <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
                        <div class="m-0 shadow-none card">
                            <div class="py-3 card-header d-flex justify-content-between" style="background: #BF9751;">
                                <div class="header-title">
                                    <h5 class="mb-0 text-white">All Notifications</h5>
                                </div>
                            </div>
                            <div class="p-0 card-body">
                                <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <a href="<?php echo e(route('admin.booking.show', $booking->id)); ?>" class="iq-sub-card">
                                        <div class="d-flex align-items-center">
                                            <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="<?php echo e(\Illuminate\Support\Facades\Storage::url($booking->service->image)); ?>" alt="">
                                            <div class="ms-3 w-100">
                                                <h6 class="mb-0 ">Booking <?php echo e(""); ?></h6>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">The service: <strong><?php echo e($booking->service->name); ?></strong> has been booked</p>
                                                </div>
                                                <small class="float-end font-size-12"><?php echo e($booking->created_at->diffForHumans()); ?></small>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <h6 class="text-center my-2">No notification found</h6>
                                <?php endif; ?>
                                <?php if(count($notifications) > 0): ?>
                                        <form action="<?php echo e(route('admin.booking.read-all')); ?>" method="POST" class="d-flex py-2 align-items-center justify-content-center">
                                            <?php echo csrf_field(); ?>
                                            <button class="btn btn-primary" type="submit" id="mark-as-read">Mark all as read</button>
                                        </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo e(auth()->user()->profile_img !== null ?  \Illuminate\Support\Facades\Storage::url( auth()->user()->profile_img) : asset('admin/assets/images/avatars/01.png')); ?>" alt="User-Profile"
                             class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                        <div class="caption ms-3 d-none d-md-block ">
                            <h6 class="mb-0 caption-title text-light"><?php echo e(auth()->user()->name); ?></h6>
                            <p class="mb-0 caption-sub-title">Manager</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu bg-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo e(route('admin.profile.index')); ?>">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="<?php echo e(route('admin.logout')); ?>" method="POST"><?php echo csrf_field(); ?>
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/partials/navbar.blade.php ENDPATH**/ ?>