<?php $__env->startSection('title'); ?>
    Booking Calendar
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Booking Calendar</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        button {
            text-transform: capitalize;
        }

        .fc-event {
            cursor: pointer;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- Fullcalendar Javascript -->
    <script src="<?php echo e(asset('admin/assets/vendor/moment.min.js')); ?>"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var events = <?php echo $bookings; ?>;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: { center: 'timeGridDay,timeGridWeek,dayGridMonth,listWeek' },
                initialView: 'dayGridMonth',
                selectable: true,
                selectHelper: true,
                displayEventTime: true,
                displayEventEnd: true,
                slotMinTime: '8:00:00',
                slotMaxTime: '24:00:00',
                eventColor: '#BF9651',
                events: events,

            });
            calendar.render();
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/booking/calendar.blade.php ENDPATH**/ ?>