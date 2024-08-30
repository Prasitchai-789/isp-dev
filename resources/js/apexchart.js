import ApexCharts from "apexcharts";


var options = {
    series: [{
    name: 'ผลปาล์ม',
    data: dataffb
  }],
    chart: {
    height: 353,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 5,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: true,
    formatter: function (val) {
      return val + "";
    },
    offsetY: -20,
    style: {
      fontSize: '12px',
      colors: ["#304758"]
    }
  },

  xaxis: {
    categories: labelsdate,
    position: 'bottom',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'ผลปาล์ม',
        gradient: {
          colorFrom: '#D8E3F0',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    tooltip: {
      enabled: true,
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val.toLocaleString();
      }
    }

  },
  title: {
    text: 'กราฟแสดงปริมาณผลปาล์มรายวัน',
    floating: false,
    offsetY: 10,
    align: 'top',
    style: {
      color: '#444',
      fontFamily: " Prompt, sans-serif ",
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartOfMonth"), options);
  chart.render();


  var options = {
    series: [percentram, percentage],
    chart: {
    width: 355,
    type: 'donut',
  },
  plotOptions: {
    pie: {
      startAngle: 0,
      endAngle: 360,
    }
  },
  dataLabels: {
    enabled: false
  },
  fill: {
    type: 'gradient',
  },
  labels: ['ลานเท','เกษตร'],
  legend: {
    formatter: function(val, opts) {
      return val + " - " + opts.w.globals.series[opts.seriesIndex]
    }
  },
  title: {
    text: ''
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();

//ราคาเฉลี่ย
// var options = {
//     series: [{
//         name: 'series-1',
//         data: averagePricesSubDays
//     }],
//     chart: {
//         type: 'line',
//         height: 70,
//         width: 150,
//         toolbar: {
//             show: false // ซ่อน toolbar ที่มีปุ่ม zoom
//         }
//     },
//     stroke: {
//         width: 2,
//         curve: 'smooth',
//         colors: ['rgba(46,216,182,0.85)']
//     },
//     xaxis: {
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         }
//     },
//     yaxis: {
//         min: 4,  // กำหนดค่าต่ำสุดของแกน Y
//         max: 7,  // กำหนดค่าสูงสุดของแกน Y
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         },
//         crosshairs: {
//             show: true,
//             position: 'back',
//             stroke: {
//                 color: '#b6b6b6',
//                 dashArray: 3
//             }
//         }
//     },
//     grid: {
//         show: false
//     },
//     tooltip: {
//         enabled: true,
//         theme: 'light',
//         x: {
//             show: false
//         },
//         y: {
//             title: {
//                 formatter: function (val) {
//                     return '';
//                 }
//             }
//         },
//         marker: {
//             show: true,
//             colors: ['#2ed8b6'],
//             fillOpacity: 1
//         }
//     }
// };

// var chart = new ApexCharts(document.querySelector("#avgChart"), options);
// chart.render();

// ยอดเงิน
// var options = {
//     series: [{
//         name: 'series-1',
//         data: sumPriceSubDays
//     }],
//     chart: {
//         type: 'line',
//         height: 70,
//         width: 150,
//         toolbar: {
//             show: false // ซ่อน toolbar ที่มีปุ่ม zoom
//         }
//     },
//     stroke: {
//         width: 2,
//         curve: 'smooth',
//         colors: ['rgba(255,165,0,0.85)'] // สีส้ม
//     },
//     xaxis: {
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         }
//     },
//     yaxis: {
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         },
//         crosshairs: {
//             show: true,
//             position: 'back',
//             stroke: {
//                 color: '#b6b6b6',
//                 dashArray: 3
//             }
//         }
//     },
//     grid: {
//         show: false
//     },
//     tooltip: {
//         enabled: true,
//         theme: 'light',
//         x: {
//             show: false
//         },
//         y: {
//             title: {
//                 formatter: function (val) {
//                     return '';
//                 }
//             }
//         },
//         marker: {
//             show: true,
//             colors: ['#2ed8b6'],
//             fillOpacity: 1
//         }
//     }
// };

// var chart = new ApexCharts(document.querySelector("#avgChart2"), options);
// chart.render();


// ผลปาล์ม
// var options = {
//     series: [{
//         name: 'series-1',
//         data: dataffb
//     }],
//     chart: {
//         type: 'line',
//         height: 70,
//         width: 180,
//         toolbar: {
//             show: false // ซ่อน toolbar ที่มีปุ่ม zoom
//         }
//     },
//     stroke: {
//         width: 2,
//         curve: 'smooth',
//         colors: ['rgba(0,123,255,0.85)'] // สีฟ้า
//     },
//     xaxis: {
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         }
//     },
//     yaxis: {
//         labels: {
//             show: false
//         },
//         axisBorder: {
//             show: false
//         },
//         axisTicks: {
//             show: false
//         },
//         crosshairs: {
//             show: true,
//             position: 'back',
//             stroke: {
//                 color: '#b6b6b6',
//                 dashArray: 3
//             }
//         }
//     },
//     grid: {
//         show: false
//     },
//     tooltip: {
//         enabled: true,
//         theme: 'light',
//         x: {
//             show: false
//         },
//         y: {
//             title: {
//                 formatter: function (val) {
//                     return '';
//                 }
//             }
//         },
//         marker: {
//             show: true,
//             colors: ['#2ed8b6'],
//             fillOpacity: 1
//         }
//     }
// };

// var chart = new ApexCharts(document.querySelector("#avgChart3"), options);
// chart.render();
