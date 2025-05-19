<div id="multiple-bar-charts-horizontal"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        ApexHelpers.buildChart(
            '#multiple-bar-charts-horizontal',
            (mode) => ({
                chart: {
                    type: 'bar',
                    height: 300,
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
                        data: [100, 30, 45, 12],
                        color: 'var(--color-accent-600)'
                    },
                    {
                        name: 'Last year',
                        data: [70, 40, 50, 10],
                        color: 'var(--color-accent-400)'
                    }
                ],
                xaxis: {
                    categories: [
                        'Indonesia',
                        'Japan',
                        'Singapore',
                        'Russia',
                    ],
                    labels: {
                        style: {
                            colors: 'var(--color-cat-500)',
                            fontSize: '0.6rem',
                            fontFamily: 'Inter, ui-sans-serif',
                            fontWeight: 500
                        },
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    crosshairs: {
                        show: false
                    },
                },
                yaxis: {
                    labels: {
                        align: 'right',
                        minWidth: 0,
                        maxWidth: 110,
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
                plotOptions: {
                    bar: {
                        horizontal: true,
                        barHeight: '55%',
                        borderRadius: 4,
                        endingShape: 'rounded'
                    }
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: true,
                    style: {
                        fontFamily: 'Inter, sans-serif',
                        fontWeight: 'bold',
                    },
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                states: {
                    hover: {
                        filter: {
                            type: 'darken',
                            value: 0.9
                        }
                    }
                },
            })
        );
    });
</script>
