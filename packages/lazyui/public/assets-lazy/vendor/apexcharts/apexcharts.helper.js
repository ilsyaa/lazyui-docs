function buildTooltip(props, options) {
    const {
        title,
        mode,
        valuePrefix = '',
        isValueDivided = true,
        valuePostfix = '',
        hasTextLabel = false,
        invertGroup = false,
        labelDivider = '',
        wrapperClasses = 'ms-0.5 mb-2 bg-white/90 dark:bg-cat-800/80 backdrop-blur text-cat-800 rounded-lg shadow-md',
        wrapperExtClasses = '',
        seriesClasses = 'text-[12px]',
        seriesExtClasses = '',
        titleClasses = 'font-medium !text-xs !bg-cat-200 text-cat-800 rounded-t-lg dark:!bg-cat-700 dark:text-cat-200',
        titleExtClasses = '',
        markerClasses = '!w-2.5 !h-2.5 !me-1.5',
        markerExtClasses = '!rounded-sm',
        valueClasses = '!font-medium text-cat-500 !ms-auto dark:text-cat-400',
        valueExtClasses = '',
        labelClasses = 'text-cat-500 dark:text-cat-400',
        labelExtClasses = ''
    } = options;
    const { dataPointIndex } = props;
    const { colors } = props.ctx.opts;
    const series = props.ctx.opts.series;
    let seriesGroups = '';

    series.forEach((single, i) => {
        const val = props.series[i][dataPointIndex] || (typeof series[i].data[dataPointIndex] !== 'object' ? series[i].data[dataPointIndex] : props.series[i][dataPointIndex]);
        const label = series[i].name;
        const groupData = invertGroup ? {
            left: `${hasTextLabel ? label : ''}${labelDivider}`,
            right: `${valuePrefix}${val >= 1000 && isValueDivided ? `${val / 1000}k` : val}${valuePostfix}`
        } : {
            left: `${valuePrefix}${val >= 1000 && isValueDivided ? `${val / 1000}k` : val}${valuePostfix}`,
            right: `${hasTextLabel ? label : ''}${labelDivider}`
        }
        const labelMarkup = `<span class="apexcharts-tooltip-text-y-label ${labelClasses} ${labelExtClasses}">${groupData.left}</span>`;

        seriesGroups += `<div class="apexcharts-tooltip-series-group !flex ${hasTextLabel ? '!justify-between' : ''} order-${i + 1} ${seriesClasses} ${seriesExtClasses}">
        <span class="flex items-center">
          <span class="apexcharts-tooltip-marker !rounded-full ${markerClasses} ${markerExtClasses}" style="background: ${props.w.globals.colors[i]}"></span>
          <div class="apexcharts-tooltip-text">
            <div class="apexcharts-tooltip-y-group !py-0.5">
              <span class="apexcharts-tooltip-text-y-value ${valueClasses} ${valueExtClasses}">${groupData.right}</span>
            </div>
          </div>
        </span>
        ${labelMarkup}
      </div>`
    });

    return `<div class="${mode === 'dark' ? 'dark ' : ''}${wrapperClasses} ${wrapperExtClasses}">
      <div class="apexcharts-tooltip-title ${titleClasses} ${titleExtClasses}">${title}</div>
      ${seriesGroups}
    </div>`;
}

function buildTooltipForDonut({ series, seriesIndex, w }) {
    const { globals } = w;
    const { colors } = globals;

    return `<div class="apexcharts-tooltip-series-group bg-white/90 dark:bg-cat-900/80 backdrop-blur shadow-lg" style="display: block;">
      <div class="apexcharts-tooltip-text text-xs font-inter mt-0.5">
        <div class="apexcharts-tooltip-y-group text-cat-800 dark:text-white flex items-center">
          <span class="apexcharts-tooltip-marker block !rounded-full" style="background: ${colors[seriesIndex]}"></span>
          <span class="apexcharts-tooltip-text-y-label">${globals.labels[seriesIndex]}: </span>
          <span class="apexcharts-tooltip-text-y-value">${series[seriesIndex]}</span>
        </div>
      </div>
    </div>`;
}

function buildChart(id, shared, light, dark) {
    const $chart = document.querySelector(id);
    let chart = null;

    if (!$chart) return false;

    const tabpanel = $chart.closest('[role="tabpanel"]');
    let modeFromBodyClass = null;

    const optionsFn = (mode = modeFromBodyClass || JSON.parse(localStorage.getItem(window.localStorageKey) || '{}').themeMode || 'auto') => {
        if (mode === 'auto') {
          const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
          mode = prefersDarkScheme ? 'dark' : 'light';
        }
        dark = _.merge({
            grid: {
                borderColor: 'rgba(69, 79, 91, 0.3)',
            },
            legend: {
                labels: {
                    colors: '#ffff',
                },
            },
        }, dark)
        light = _.merge({
            grid: {
                borderColor: 'rgba(223, 227, 232, 0.7)',
            },
            legend: {
                labels: {
                    colors: 'rgba(69, 79, 91, 1)',
                },
            },
        }, light)
        return _.merge(shared(mode), mode === 'dark' ? dark : light);
    };

    if ($chart) {
        chart = new ApexCharts($chart, optionsFn());
        chart.render();

        window.addEventListener('lazy-appearance-change', (evt) => chart.updateOptions(optionsFn(evt.detail.themeMode)));

        if (tabpanel) tabpanel.addEventListener('lazy-appearance-change', (evt) => chart.updateOptions(optionsFn(evt.detail.themeMode)));
    }
    return chart;
}
