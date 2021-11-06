// Temparture Measures
var ctx = document.getElementById('temp').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Temprature History',
            data: [-12, 19, 3, 5, 2, 3],
            borderWidth: 1,
            backgroundColor: 'rgba(60,141,188,0.9)',
            color:'rgba(60,141,188,1)',
        }],

    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: true,
            text: 'temprature',
            fontColor: '#fff',
            fontSize: 20,
        },
        legend: {
            display:false,
        }
        
    }
});

// Temparture Measures
var ctx = document.getElementById('humadity').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Temprature History',
            data: [50, 20, 30, 40, 70, 10],
            borderWidth: 1,
            backgroundColor: '#9aa0a2',
            color:'#9aa0a2',
        }],

    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: true,
            text: 'Humadity',
            fontColor: '#fff',
            fontSize: 20,
        },
        legend: {
            display:false,
        }
        
    }
});

// Soil Moisture Measures
var ctx = document.getElementById('soilmoist').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['00:00', '1:00', '2:00', '3:00', '4:00', '5:00','6:00', '7:00', '8:00', '9:00', '10:00', '11:00','12:00', '13:00', '14:00', '15:00', '16:00', '17:00','18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
        datasets: [{
            label: 'Temprature History',
            data: [30, 25, 21, 18, 18, 16, 15, 90, 80, 70, 65, 55, 50, 40, 39, 35, 35, 31, 30, 30, 30 , 30, 30, 30 ],
            borderWidth: 1,
            backgroundColor: '#9aa0a2',
            color:'#9aa0a2',
        }],

    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
            display: false,
            text: 'Soil Moisture',
            fontColor: '#fff',
            fontSize: 20,
        },
        legend: {
            display:false,
        },
        scales: {
            xAxes: [{
              gridLines: {
                display: false
              }
            }],
            yAxes: [{
              gridLines: {
                display: false
              }
            }]
          }
        
    }
});