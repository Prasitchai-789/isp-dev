import ApexCharts from "apexcharts";

var options = {
    chart: {
        type: "area",
    },
    stroke: {
        curve: "smooth",
    },
    series: [
        {
            name: "sales",
            data: [30, 40, 45, 50, 49, 60, 70, 91, 125],
        },
    ],
    xaxis: {
        categories: [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999],
    },
};

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();

var options = {
    chart: {
        height: 300,
        type: "area",
    },
    dataLabels: {
        enabled: false,
    },
    series: [
        {
            name: "Series 1",
            data: [45, 52, 5, 45, 19, 23, 2],
        },
    ],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100],
        },
    },
    xaxis: {
        categories: [
            "01 Jan",
            "02 Jan",
            "03 Jan",
            "04 Jan",
            "05 Jan",
            "06 Jan",
            "07 Jan",
        ],
    },
};

var chart = new ApexCharts(document.querySelector("#chart2"), options);

chart.render();


