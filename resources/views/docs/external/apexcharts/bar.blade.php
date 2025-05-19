<div id="multiple-bar-charts"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ApexHelpers.buildChart(
            '#multiple-bar-charts',
            (mode) => ({
                chart: {
                    type: 'bar',
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
                        name: 'This year',
                        data: [23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000, 66000, 34000, 78000],
                        color: 'var(--color-accent-500)'
                    },
                    {
                        name: 'Last year',
                        data: [17000, 76000, 85000, 101000, 98000, 87000, 105000, 91000, 114000, 94000, 67000, 66000],
                        color: '#facc15'
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
                    custom: function(props) {
                        const { categories } = props.ctx.opts.xaxis;
                        const { dataPointIndex } = props;

                        return ApexHelpers.buildTooltip(props, {
                            title: `${categories[dataPointIndex]}`,
                            mode,
                            hasTextLabel: true,
                            wrapperExtClasses: 'min-w-28',
                            labelDivider: ':',
                            labelExtClasses: 'ms-2'
                        });
                    }
                },
                states: {
                    hover: {
                        filter: {
                            type: 'darken',
                            value: 0.9
                        }
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        borderRadius: 5,
                        endingShape: 'rounded'
                    }
                },
                legend: {
                    show: true,
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
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
