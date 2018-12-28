<?php

$this->registerJsFile('/js/highcharts.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/js/highcharts-more.js', ['position' => \yii\web\View::POS_HEAD]);

?>
<div id="container"></div>

<script>

    Highcharts.chart('container', {

        title: {
            text: 'График дебита и кредита (за весь период активности)'
        },
        yAxis: {
            title: {
                text: 'Движение баланса'
            },

        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            title: {
                text: 'Временные промежутки'
            },
            gridLineWidth: 1
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },


        series: [{
            name: 'Installation',
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
        }, {
            name: 'Manufacturing',
            data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
    chart.xAxis[0] = '123123'
</script>
