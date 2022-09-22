Highcharts.chart("container", {
    chart: {
        type: "column",
        zoomType: "y"
    },
    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    subtitle: {
        text: 'Site de autoria da empresa: <a href="https://site.3esolucoes.com.br/">3e Soluções</a>'
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
        tickInterval: 0.1,
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
    colors:['#cb5616', '#FFCC00'],
    series: [
        {
            name: "O que foi coletado",
            data: [10, 9.45, 5.4, 6, 2.51, 5.45, 1.6],
            borderColor: "#cb5616",
            cursor: 'pointer',
            states: {
                select: {
                    color: '#FFCC00',
                    borderColor: "#FFCC00",

                }
            },
            allowPointSelect: true
        }
    ]
});