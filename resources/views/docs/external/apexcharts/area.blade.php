<div id="area-charts"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        ApexHelpers.buildChart(
            '#area-charts',
            (mode) => ({
                chart: {
                    type: 'area',
                    height: 350,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                series: [
                    {
                        name: 'Visitors',
                        data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
                        color: '#10b981'
                    }
                ],
                xaxis: {
                    categories: [
                        'January',
                        'February',
                        'March',
                        'April',
                        'May',
                        'June',
                        'July',
                        'August',
                        'September',
                        'October',
                        'November',
                        'December'
                    ],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        show: false
                    },
                    tooltip: {
                        enabled: false
                    },
                    labels: {
                        style: {
                            colors: 'var(--color-cat-500)',
                            fontSize: '0.6rem',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 500
                        },
                        offsetX: -2,
                        formatter: (title) => title?.slice(0, 3) || title
                    }
                },
                yaxis: {
                    labels: {
                        align: 'left',
                        minWidth: 0,
                        maxWidth: 50,
                        style: {
                        colors: 'var(--color-cat-500)',
                        fontSize: '0.6rem',
                        fontFamily: 'Inter, ui-sans-serif',
                        fontWeight: 500
                    },
                        formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
                    }
                },
                tooltip: {
                    custom: function (props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;
                        const title = categories[dataPointIndex];
                        const newTitle = `${title}`;

                        return ApexHelpers.buildTooltip(props, {
                            title: newTitle,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-28',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                legend: {
                    show: true,
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth', // 'smooth', 'stepline', 'straight'
                    show: true,
                    width: 2,
                },
                states: {
                    hover: {
                        filter: {
                            type: 'darken',
                            value: 0.9
                        }
                    }
                },
                responsive: [{
                    breakpoint: 1200,
                    options: {
                        plotOptions: {
                            bar: {
                                borderRadius: 0
                            }
                        }
                    }
                }]
            })
        );
    })
</script>
