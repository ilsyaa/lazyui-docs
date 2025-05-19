<div id="pie-chart"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ApexHelpers.buildChart(
            '#pie-chart',
            (mode) => ({
                chart: {
                    height: 250,
                    width: 250,
                    type: 'pie',
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
                    enabled: true,
                    style: {
                        fontSize: '0.6rem',
                        fontFamily: 'Inter, ui-sans-serif',
                        fontWeight: 500
                    },
                    dropShadow: {
                        enabled: false
                    },
                },
                stroke: {
                    width: 0
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
                        props.series = props.series.map((s) => s+'%')
                        return ApexHelpers.buildTooltipForDonut(props);
                    }
                }
            })
        );
    })
</script>
