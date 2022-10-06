Highcharts.chart("containerGrafico", {
    chart: {
        type: "column",
        zoomType: "y",
        

    },

    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    subtitle: {
        text: 'Site de autoria da empresa: <a target="_blank" href="https://site.3esolucoes.com.br/">3e Soluções</a>'
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
            colorByPoint: true,
            dataLabels: {
                enabled: true,
                format: "{y}%"
            }
        }
    },
    tooltip: {
        valueSuffix: "%",
        stickOnContact: true,
        backgroundColor: "rgba(255, 255, 255, 0.93)", 
    },
    legend: {
        enabled: false
    },
    series: [
        {
            colors: [
                '#3D96AE',
                '#cb5616',
                '#47B5FF',
                '#ea0000',
                '#937DC2',
                '#06ff00',
                '#7FBCD2'
            ],
            name: "O que foi coletado",
            data: [10, 9.45, 5.4, 6, 2.51, 5.45, 1.6],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
});

Highcharts.chart("containerGraficoMes", {
    chart: {
        type: "column",
        zoomType: "y",
        

    },

    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    subtitle: {
        text: 'Site de autoria da empresa: <a target="_blank" href="https://site.3esolucoes.com.br/">3e Soluções</a>'
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
            colorByPoint: true,
            dataLabels: {
                enabled: true,
                format: "{y}%"
            }
        }
    },
    tooltip: {
        valueSuffix: "%",
        stickOnContact: true,
        backgroundColor: "rgba(255, 255, 255, 0.93)", 
    },
    legend: {
        enabled: false
    },
    series: [
        {
            colors: [
                '#3D96AE',
                '#cb5616',
                '#47B5FF',
                '#ea0000',
                '#937DC2',
                '#06ff00',
                '#7FBCD2'
            ],
            name: "O que foi coletado",
            data: [10, 9.45, 5.4, 6, 2.51, 5.45, 1.6],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
});

Highcharts.chart("containerGraficoMesAnterior", {
    chart: {
        type: "column",
        zoomType: "y",
        

    },

    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    subtitle: {
        text: 'Site de autoria da empresa: <a target="_blank" href="https://site.3esolucoes.com.br/">3e Soluções</a>'
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
            colorByPoint: true,
            dataLabels: {
                enabled: true,
                format: "{y}%"
            }
        }
    },
    tooltip: {
        valueSuffix: "%",
        stickOnContact: true,
        backgroundColor: "rgba(255, 255, 255, 0.93)", 
    },
    legend: {
        enabled: false
    },
    series: [
        {
            colors: [
                '#3D96AE',
                '#cb5616',
                '#47B5FF',
                '#ea0000',
                '#937DC2',
                '#06ff00',
                '#7FBCD2'
            ],
            name: "O que foi coletado",
            data: [10, 9.45, 5.4, 6, 2.51, 5.45, 1.6],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
});

Highcharts.chart("containerAnoCorrente", {
    chart: {
        type: "column",
        zoomType: "y",
        

    },

    title: {
        text: "Composição Dos Resíduos Coletados"
    },

    subtitle: {
        text: 'Site de autoria da empresa: <a target="_blank" href="https://site.3esolucoes.com.br/">3e Soluções</a>'
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
            colorByPoint: true,
            dataLabels: {
                enabled: true,
                format: "{y}%"
            }
        }
    },
    tooltip: {
        valueSuffix: "%",
        stickOnContact: true,
        backgroundColor: "rgba(255, 255, 255, 0.93)", 
    },
    legend: {
        enabled: false
    },
    series: [
        {
            colors: [
                '#3D96AE',
                '#cb5616',
                '#47B5FF',
                '#ea0000',
                '#937DC2',
                '#06ff00',
                '#7FBCD2'
            ],
            name: "O que foi coletado",
            data: [10, 9.45, 5.4, 6, 2.51, 5.45, 1.6],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
});

	
