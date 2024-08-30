import ApexCharts from "apexcharts";

// var options = {
//     series: [{
//     name: 'ผลปาล์ม',
//     data: getPalmOf7
//   }],
//     chart: {
//     height: 390,
//     type: 'bar',
//   },
//   plotOptions: {
//     bar: {
//       borderRadius: 5,
//       dataLabels: {
//         position: 'top', // top, center, bottom
//       },
//     }
//   },
//   dataLabels: {
//     enabled: true,
//     formatter: function (val) {
//       return val + "";
//     },
//     offsetY: -20,
//     style: {
//       fontSize: '12px',
//       colors: ["#304758"]
//     }
//   },

//   xaxis: {
//     categories: subDaysFormatted,
//     position: 'bottom',
//     axisBorder: {
//       show: false
//     },
//     axisTicks: {
//       show: false
//     },
//     crosshairs: {
//       fill: {
//         type: 'ผลปาล์ม',
//         gradient: {
//           colorFrom: '#D8E3F0',
//           colorTo: '#BED1E6',
//           stops: [0, 100],
//           opacityFrom: 0.4,
//           opacityTo: 0.5,
//         }
//       }
//     },
//     tooltip: {
//       enabled: true,
//     }
//   },
//   yaxis: {
//     axisBorder: {
//       show: false
//     },
//     axisTicks: {
//       show: false,
//     },
//     labels: {
//       show: false,
//       formatter: function (val) {
//         return val + "";
//       }
//     }

//   },
//   title: {
//     text: '',
//     floating: false,
//     offsetY: 10,
//     align: 'top',
//     style: {
//       color: '#444'
//     }
//   }
//   };
var options = {
    series: [
        {
            name: "FFB",
            type: "bar",
            data: getPalmOf7,
        },
        {
            name: "ราคาเฉลี่ย",
            type: "line",
            data: getPriceOf7,
        },
    ],
    colors: ["#008FFB", "#00E396"],
    plotOptions: {
        bar: {
            borderRadius: 5,
            borderWidth: 10,
            colors: {
                backgroundBarColors: ['transparent'],
                backgroundBarRadius: 10,
            },
            dataLabels: {
                position: "center", // top, center, bottom
                style: {
                    colors: ["transparent"], // ไม่ต้องการแสดงกรอบหรือตัวเลขบนกราฟแท่ง
                }
            },
        },
    },

    chart: {
        height: 390,
        type: "line",
    },
    title: {
        text: "",
    },
    stroke: {
        curve: "smooth",
        width: [0, 4]
    },
    dataLabels: {
        enabled: true, // เปิดใช้งานการแสดงข้อมูล
        enabledOnSeries: [0, 1], // กำหนดให้แสดงข้อมูลบนทั้งกราฟแท่งและกราฟเส้น
        formatter: function (val) {
            return val.toLocaleString(); // รูปแบบการแสดงข้อมูล (ทศนิยม 2 ตำแหน่ง)
        },
        style: {
            fontSize: '12px',
            fontWeight: 'bold', // ตัวหนา
            colors: ["#",'#']
        },
        background: {
            enabled: false, // ปิดใช้งานกรอบรอบตัวเลข
        },
    },
    labels: subDaysFormatted,
    yaxis: [
        {
            title: {
                text: "ปริมาณผลปาล์ม",
            },
        },
        {
            opposite: true,
            title: {
                text: "ราคาเฉลี่ย",
            },
        },
    ],
};

var chart = new ApexCharts(document.querySelector("#chartGM"), options);
chart.render();


var options = {
    series: [{
    name: 'FFB',
    data: dataMonthlySums
  }],
    chart: {
    height: 135,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 2,
      dataLabels: {
        position: 'top', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: false,
    formatter: function (val) {
      return val.toLocaleString();
    },
    offsetY: -20,
    style: {
      fontSize: '6px',
      colors: ["#304758"]
    }
  },

  xaxis: {
    categories: labelMonthlySums,
    position: 'bottom',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
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
    text: 'Monthly Inflation in Argentina, 2002',
    floating: true,
    offsetY: 330,
    align: 'center',
    style: {
      color: '#444'
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#plamOfMonth"), options);
  chart.render();
