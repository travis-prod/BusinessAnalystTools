// var Chart = require('chartjs');

// function renderChart(data, labels) {
var data = [20000, 14000, 12000, 15000, 18000, 19000, 22000];
var labels = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'This week',
            data: data,
        }]
    },
});
// }

// $("#renderBtn").click(
//     function () {
//         renderChart(data, labels);
//     }
// );
