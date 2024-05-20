var line = document.getElementById('lineChart');
var lineChart = new Chart(line, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Kwh',
            data: [],
            backgroundColor: 'rgba(55, 140, 231, 0.5)',
            borderColor: 'rgba(55, 140, 231, 1)',
            borderWidth: 1,
            yAxisID: 'y' // Tentukan ID sumbu untuk dataset pertama
        }, {
            label: 'Voltage',
            data: [],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1,
            yAxisID: 'y1' // Tentukan ID sumbu untuk dataset kedua
        }]
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            y: {
                type: 'linear',
                display: true,
                position: 'left',
                title:{
                    display: true,
                    text: 'Kwh',
                }
            },
            y1: {
                type: 'linear',
                display: true,
                position: 'right',
                title:{
                    display: true,
                    text: 'Voltage',
                }


            },
            x: {
                scaleLabel: {
                    display: true,
                    labelString: 'Time' // Label untuk sumbu x
                }
            }
        }
    }
});

let updateChartData = (value)=>{
    console.log(value);
    // Generate new data points
    var newData1 = value;
    var newData2 = value * 6 + 20 ;
    // Assuming the chart has a time axis or similar for real-time data visualization
    // Generate a new label for the x-axis (e.g., current time)
    var newLabel = new Date().toLocaleTimeString();
    // Add new data and label to both datasets
    lineChart.data.labels.push(newLabel);
    lineChart.data.datasets[0].data.push(newData1);
    lineChart.data.datasets[1].data.push(newData2);

    // Update the chart
    lineChart.update();

    // Remove the oldest data point if more than 10 points
    if (lineChart.data.labels.length > 10) {
        lineChart.data.labels.shift();
        lineChart.data.datasets[0].data.shift();
        lineChart.data.datasets[1].data.shift();
    }
}
export default updateChartData;

