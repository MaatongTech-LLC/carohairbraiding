<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href=""<?php echo e(asset('pick-hours-availability-calendar/css/mark-your-calendar.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://www.jqueryscript.net/demo/pick-hours-availability-calendar/css/mark-your-calendar.css">

    <style>
        .myc-available-time {
            background-color: #BF9751!important;
            border-radius: 20px;
            color: #ffffff;
            display: block;
            margin-bottom: 15px;
            padding: 10px 0px 10px 0px;
            text-align: center;
        }

        .myc-available-time.selected, .myc-available-time:hover {
            background-color: #222!important;
        }

    </style>
<?php $__env->stopPush(); ?>

<div id="picker" style=""></div>

<div id="availablity" style="display: none"></div>



<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('pick-hours-availability-calendar/js/mark-your-calendar.js')); ?>"></script>
    <script type="text/javascript">
        var selectedData;
        var selectedData2;

        console.log(new Date);

        (function($) {
            $('#picker').markyourcalendar({
                availability: [
                   /* ['1:00', '2:00', '3:00', '4:00', '5:00'],
                    ['2:00'],
                    ['3:00'],
                    ['4:00'],
                    ['5:00'],
                    ['6:00'],
                    ['7:00']
                   0.*/
                ],
                months: ['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec'],
                weekdays: ['sun','mon','tue','wed','thurs','fri','sat'],
                isMultiple: true,
                startDate: new Date(new Date().getFullYear(), 0, 1),

                onClick: function(ev, data) {
                    // data is a list of datetimes
                    console.log(data);
                    var html = ``;
                    $.each(data, function() {
                        var d = this.split(' ')[0];
                        var t = this.split(' ')[1];
                        html += `<p>` + d + ` ` + t + `</p>`;
                    });
                    $('#selected-dates').html(html);
                },
                onClickNavigator: function(ev, instance) {
                    var arr = [
                        [
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['1:00', '5:00'],
                            ['2:00', '5:00'],
                            ['3:30'],
                            ['2:00', '5:00'],
                            ['2:00', '5:00'],
                            ['2:00', '5:00']
                        ],
                        [
                            ['2:00', '5:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['4:00', '5:00'],
                            ['2:00', '5:00'],
                            ['2:00', '5:00'],
                            ['2:00', '5:00'],
                            ['2:00', '5:00']
                        ],
                        [
                            ['4:00', '5:00'],
                            ['4:00', '5:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00']
                        ],
                        [
                            ['4:00', '5:00'],
                            ['4:00', '5:00'],
                            ['4:00', '5:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['4:00', '5:00'],
                            ['4:00', '5:00'],
                            ['4:00', '5:00']
                        ],
                        [
                            ['4:00', '6:00'],
                            ['4:00', '6:00'],
                            ['4:00', '6:00'],
                            ['4:00', '6:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['4:00', '6:00'],
                            ['4:00', '6:00']
                        ],
                        [
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['3:00', '6:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00'],
                            ['3:00', '6:00']
                        ],
                        [
                            ['3:00', '4:00'],
                            ['3:00', '4:00'],
                            ['3:00', '4:00'],
                            ['3:00', '4:00'],
                            ['3:00', '4:00'],
                            ['3:00', '4:00'],
                            ['4:00', '5:00', '6:00', '7:00', '8:00']
                        ]
                    ]
                    var rn = Math.floor(Math.random() * 10) % 7;
                    instance.setAvailability(arr[rn]);
                }
            });
        })(jQuery);


        /* <?php if(@$teacher_info->availability): ?>
        <?php $__currentLoopData = $teacher_info->availability; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $avaiability): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('.myc-available-time[data-time="<?php echo e($avaiability->time); ?>"][data-date="<?php echo e($avaiability->date); ?>"]').click()
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>*/
        function submitForm(event){
            event.preventDefault();
            console.log('data one',selectedData);
            console.log('data two',selectedData2);

        }
        $(document).ready(function () {

        });

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/components/calendar.blade.php ENDPATH**/ ?>