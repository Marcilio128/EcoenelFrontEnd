Highcharts.chart("container", {
    chart: {
        type: "column",
        zoomType: "y"
    },
    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    colors:['#cb5616', '#FFCC00'],
    subtitle: {
        text: 'Source: <a href="http://www.worldstopexports.com/wheat-exports-country/">worldstopexports</a>'
    },
    xAxis: {
        categories: [
            "Longa Vida",
            "Óleo",
            "Eletrônicos",
            "Vidros",
            "Plástico",
            "Metal",
            "Papel",
        ],
        title: {
            text: null
        },
        accessibility: {
            description: "Countries"
        }
    },
    yAxis: {
        min: 0,
        tickInterval: 2,
        title: {
            text: "Exponente De Resíduos"
        },
        labels: {
            overflow: "justify",
            format: "{value}"
        }
    },
    plotOptions: {
        column: {
            dataLabels: {
                enabled: true,
                format: "{y}%"
            }
        }
    },
    tooltip: {
        valueSuffix: "%",
        stickOnContact: true,
        backgroundColor: "rgba(255, 255, 255, 0.93)"
    },
    legend: {
        enabled: false
    },
    series: [
        {
            name: "Wheat exportation in 2019",
            data: [6.4, 6.3, 5.4, 4.4, 2.51, 2.45, 1.6],
            borderColor: "#cb5616",
            cursor: 'pointer',
            states: {
                select: {
                    color: '#fc004d',
            },
        }
        }
    ]
});