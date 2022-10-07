function Dia(){
	$.ajax({
	method: 'GET',
	url: 'http://localhost:8000/api/dados'
}).then(function(response){
    //atribuição de dado individual
    const dado = response[0][0]
    const oleo = dado['Óleo']
    const eletronico = dado['Eletrônicos']
    const vidro = dado['Vidros']
    const plastico = dado['Plástico']
    const metal = dado['Metal']
    const papel = dado['Papel']
    const longavida = dado['Longa_Vida']

    //cálculo de porcentagem
    const total =  oleo + eletronico + vidro + plastico + metal + papel + longavida 

    //longa vida
    const Lv = (100 * longavida) / total
    const Plongavida = parseFloat(Lv.toFixed(2))

    //papel
    const Pp = (100 * papel) / total
    const Ppapel = parseFloat(Pp.toFixed(2))

    //metal
    const mt = (100 * metal) / total
    const Pmetal = parseFloat(mt.toFixed(2))

    //plástico
    const pl = (100 * plastico) / total
    const Pplastico = parseFloat(pl.toFixed(2))

    //vidro
    const vd = (100 * vidro) / total
    const Pvidro = parseFloat(vd.toFixed(2))

    //eletrônico
    const el = (100 * eletronico) / total
    const Peletronico = parseFloat(el.toFixed(2))

    //óleo
    const ol = (100 * oleo) / total
    const Poleo = parseFloat(ol.toFixed(2))

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
            data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
})
})
};
Dia()

function Mes(){
	$.ajax({
	method: 'GET',
	url: 'http://localhost:8000/api/dados'
}).then(function(response){
    //atribuição de dado individual
    const dado = response[0][0]
    const oleo = dado['Óleo']
    const eletronico = dado['Eletrônicos']
    const vidro = dado['Vidros']
    const plastico = dado['Plástico']
    const metal = dado['Metal']
    const papel = dado['Papel']
    const longavida = dado['Longa_Vida']

    //cálculo de porcentagem
    const total =  oleo + eletronico + vidro + plastico + metal + papel + longavida 

    //longa vida
    const Lv = (100 * longavida) / total
    const Plongavida = parseFloat(Lv.toFixed(2))

    //papel
    const Pp = (100 * papel) / total
    const Ppapel = parseFloat(Pp.toFixed(2))

    //metal
    const mt = (100 * metal) / total
    const Pmetal = parseFloat(mt.toFixed(2))

    //plástico
    const pl = (100 * plastico) / total
    const Pplastico = parseFloat(pl.toFixed(2))

    //vidro
    const vd = (100 * vidro) / total
    const Pvidro = parseFloat(vd.toFixed(2))

    //eletrônico
    const el = (100 * eletronico) / total
    const Peletronico = parseFloat(el.toFixed(2))

    //óleo
    const ol = (100 * oleo) / total
    const Poleo = parseFloat(ol.toFixed(2))

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
            data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
})
})
};
Mes()

function MesA(){
	$.ajax({
	method: 'GET',
	url: 'http://localhost:8000/api/dados'
}).then(function(response){
    //atribuição de dado individual
    const dado = response[0][0]
    const oleo = dado['Óleo']
    const eletronico = dado['Eletrônicos']
    const vidro = dado['Vidros']
    const plastico = dado['Plástico']
    const metal = dado['Metal']
    const papel = dado['Papel']
    const longavida = dado['Longa_Vida']

    //cálculo de porcentagem
    const total =  oleo + eletronico + vidro + plastico + metal + papel + longavida 

    //longa vida
    const Lv = (100 * longavida) / total
    const Plongavida = parseFloat(Lv.toFixed(2))

    //papel
    const Pp = (100 * papel) / total
    const Ppapel = parseFloat(Pp.toFixed(2))

    //metal
    const mt = (100 * metal) / total
    const Pmetal = parseFloat(mt.toFixed(2))

    //plástico
    const pl = (100 * plastico) / total
    const Pplastico = parseFloat(pl.toFixed(2))

    //vidro
    const vd = (100 * vidro) / total
    const Pvidro = parseFloat(vd.toFixed(2))

    //eletrônico
    const el = (100 * eletronico) / total
    const Peletronico = parseFloat(el.toFixed(2))

    //óleo
    const ol = (100 * oleo) / total
    const Poleo = parseFloat(ol.toFixed(2))

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
            data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
})
})
};
MesA()


function Ano(){
	$.ajax({
	method: 'GET',
	url: 'http://localhost:8000/api/dados'
}).then(function(response){
    //atribuição de dado individual
    const dado = response[0][0]
    const oleo = dado['Óleo']
    const eletronico = dado['Eletrônicos']
    const vidro = dado['Vidros']
    const plastico = dado['Plástico']
    const metal = dado['Metal']
    const papel = dado['Papel']
    const longavida = dado['Longa_Vida']

    //cálculo de porcentagem
    const total =  oleo + eletronico + vidro + plastico + metal + papel + longavida 

    //longa vida
    const Lv = (100 * longavida) / total
    const Plongavida = parseFloat(Lv.toFixed(2))

    //papel
    const Pp = (100 * papel) / total
    const Ppapel = parseFloat(Pp.toFixed(2))

    //metal
    const mt = (100 * metal) / total
    const Pmetal = parseFloat(mt.toFixed(2))

    //plástico
    const pl = (100 * plastico) / total
    const Pplastico = parseFloat(pl.toFixed(2))

    //vidro
    const vd = (100 * vidro) / total
    const Pvidro = parseFloat(vd.toFixed(2))

    //eletrônico
    const el = (100 * eletronico) / total
    const Peletronico = parseFloat(el.toFixed(2))

    //óleo
    const ol = (100 * oleo) / total
    const Poleo = parseFloat(ol.toFixed(2))

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
            data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel],
            cursor: 'pointer',
            states: {
                select: {
                    color: '#354259',
                }
            },
            allowPointSelect: true
        }
    ]
})
})
};
Ano()

	
