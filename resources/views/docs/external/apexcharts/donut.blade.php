<div id="hs-doughnut-chart"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ApexHelpers.buildChart(
            '#hs-doughnut-chart',
            (mode) => ({
                chart: {
                    height: 250,
                    width: 250,
                    type: 'donut',
                    zoom: {
                        enabled: false
                    }
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%'
                        }
                    }
                },
                colors: ['#10b981', '#facc15', '#8b5cf6'],
                series: [47, 23, 30],
                labels: ['Windows', 'Mac OS', 'Linux'],
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 0,
                },
                states: {
                    hover: {
                        filter: {
                            type: 'none'
                        }
                    }
                },
                tooltip: {
                    enabled: true,
                    custom: function (props) {
                        return ApexHelpers.buildTooltipForDonut(props);
                    }
                }
            })
        );
    })
</script>
