<style>
    .chart {
        margin-left: 15%;
        margin-right: 15%; 
    }
</style>
<div class="chart">
    <canvas id="myChart"></canvas>
</div>

// <script src="libraries/chartjs/chartjs/dist/Chart.js"></script> 

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [4, 10, 5, 2, 20, 30, 45]
        },{
            label: 'My Second dataset',
            backgroundColor: 'rgb(155, 199, 172)',
            borderColor: 'rgb(255, 99, 132)',
            data: [2, 1, 5, 17, 0, 1, 5]
        }, 
    ],
        
    },

    // Configuration options go here
    options: {}
});
</script>
