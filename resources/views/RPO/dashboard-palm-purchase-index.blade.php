@extends('layouts.master')

@section('content')

@livewire('RPO.dashboard-palm-purchase-index')

@endsection

@section('script')

{{-- @vite('resources/js/apexchart.js') --}}
<script>
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


</script>

@endsection
