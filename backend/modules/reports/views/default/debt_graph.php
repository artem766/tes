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
            categories: ['2018-Jan', '2018-Feb', '2018-Mar', '2018-Apr', '2018-May', '2018-Jun',
                '2018-Jul', '2018-Aug', '2018-Sep', '2018-Oct', '2018-Nov', '2018-Dec','2019-Jan', '2019-Feb', '2019-Mar', '2019-Apr', '2019-May', '2019-Jun',
                '2019-Jul', '2019-Aug', '2019-Sep', '2019-Oct', '2019-Nov', '2019-Dec'],
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
            data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175,43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
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
