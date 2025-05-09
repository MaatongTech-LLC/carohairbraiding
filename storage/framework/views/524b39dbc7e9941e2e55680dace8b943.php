<script>
    var options =
    {
        chart: {
            type: '<?php echo $chart->type(); ?>',
            height: <?php echo $chart->height(); ?>,
            width: '<?php echo $chart->width(); ?>',
            toolbar: <?php echo $chart->toolbar(); ?>,
            zoom: <?php echo $chart->zoom(); ?>

        },
        plotOptions: {
            bar: <?php echo $chart->horizontal(); ?>

        },
        colors: <?php echo $chart->colors(); ?>,
        series: <?php echo $chart->dataset(); ?>,
        dataLabels: <?php echo $chart->dataLabels(); ?>,
        <?php if($chart->labels()): ?>
            labels: <?php echo json_encode($chart->labels(), true); ?>,
        <?php endif; ?>
        title: {
            text: "<?php echo $chart->title(); ?>"
        },
        subtitle: {
            text: '<?php echo $chart->subtitle(); ?>',
            align: '<?php echo $chart->subtitlePosition(); ?>'
        },
        xaxis: {
            categories: <?php echo $chart->xAxis(); ?>

        },
        grid: <?php echo $chart->grid(); ?>,
        markers: <?php echo $chart->markers(); ?>,
        <?php if($chart->stroke()): ?>
            stroke: <?php echo $chart->stroke(); ?>,
        <?php endif; ?>
    }

    var chart = new ApexCharts(document.querySelector("#<?php echo $chart->id(); ?>"), options);
    chart.render();

</script>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\vendor\arielmejiadev\larapex-charts\src/../resources/views/chart/script.blade.php ENDPATH**/ ?>