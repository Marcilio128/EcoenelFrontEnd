

function Dia() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8000/api/residuo/data'
    }).then(function (response) {
        //atribuição de dado individual
        const dado = response[0]
        const oleo = dado[5]['kg']
        const eletronico = dado[6]['kg']
        const vidro = dado[1]['kg']
        const plastico = dado[2]['kg']
        const metal = dado[3]['kg']
        const papel = dado[0]['kg']
        const longavida = dado[4]['kg']

        //cálculo de porcentagem
        const total = oleo + eletronico + vidro + plastico + metal + papel + longavida

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
                text: '<a href="https://www.enel.com.br/pt-ceara.html">Enel</a>'
            },
            xAxis: {
                type: 'category',
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
                    dataSorting: {
                        enabled: true,
                        matchByName: true
                    },
                    data: [['Longa Vida', Plongavida], ['Óleo', Poleo], ['Eletrônico', Peletronico], ['Vidro', Pvidro], ['Plástico', Pplastico], ['Metal', Pmetal], ['Papel', Ppapel]],
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

function Mes() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8000/api/residuo/data'
    }).then(function (response) {
        //atribuição de dado individual
        const dado = response[0]
        const oleo = dado[5]['kg']
        const eletronico = dado[6]['kg']
        const vidro = dado[1]['kg']
        const plastico = dado[2]['kg']
        const metal = dado[3]['kg']
        const papel = dado[0]['kg']
        const longavida = dado[4]['kg']

        //cálculo de porcentagem
        const total = oleo + eletronico + vidro + plastico + metal + papel + longavida

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
                text: '<a href="https://www.enel.com.br/pt-ceara.html">Enel</a>'
            },
            xAxis: {
                type: 'category',
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
                    dataSorting: {
                        enabled: true,
                        matchByName: true
                    },
                    data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel], data: [['Longa Vida', Plongavida], ['Óleo', Poleo], ['Eletrônico', Peletronico], ['Vidro', Pvidro], ['Plástico', Pplastico], ['Metal', Pmetal], ['Papel', Ppapel]],
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

function MesA() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8000/api/residuo/data'
    }).then(function (response) {
        //atribuição de dado individual
        const dado = response[0]
        const oleo = dado[5]['kg']
        const eletronico = dado[6]['kg']
        const vidro = dado[1]['kg']
        const plastico = dado[2]['kg']
        const metal = dado[3]['kg']
        const papel = dado[0]['kg']
        const longavida = dado[4]['kg']

        //cálculo de porcentagem
        const total = oleo + eletronico + vidro + plastico + metal + papel + longavida

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
                text: '<a href="https://www.enel.com.br/pt-ceara.html">Enel</a>'
            },
            xAxis: {
                type: 'category',
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
                    dataSorting: {
                        enabled: true,
                        matchByName: true
                    },
                    data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel], data: [['Longa Vida', Plongavida], ['Óleo', Poleo], ['Eletrônico', Peletronico], ['Vidro', Pvidro], ['Plástico', Pplastico], ['Metal', Pmetal], ['Papel', Ppapel]],
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


function Ano() {
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8000/api/residuo/data'
    }).then(function (response) {
        //atribuição de dado individual
        const dado = response[0]
        const oleo = dado[5]['kg']
        const eletronico = dado[6]['kg']
        const vidro = dado[1]['kg']
        const plastico = dado[2]['kg']
        const metal = dado[3]['kg']
        const papel = dado[0]['kg']
        const longavida = dado[4]['kg']

        //cálculo de porcentagem
        const total = oleo + eletronico + vidro + plastico + metal + papel + longavida

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
                text: '<a href="https://www.enel.com.br/pt-ceara.html">Enel</a>'
            },
            xAxis: {
                type: 'category',
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
                    dataSorting: {
                        enabled: true,
                        matchByName: true
                    },
                    data: [Plongavida, Poleo, Peletronico, Pvidro, Pplastico, Pmetal, Ppapel], data: [['Longa Vida', Plongavida], ['Óleo', Poleo], ['Eletrônico', Peletronico], ['Vidro', Pvidro], ['Plástico', Pplastico], ['Metal', Pmetal], ['Papel', Ppapel]],
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


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    centeredSlides: true,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    }
});


