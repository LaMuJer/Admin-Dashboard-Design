$('.counter-up').counterUp({
    delay: 10,
    time: 1000
});

let dataArr = ['jul 21','jul 20','jul 19','jul 18','jul 17','jul 16','jul 15','jul 14','jul 13','jul 12','jul 11'],
orderCountArr = [12,23,22,21,26,37,39,28,48,59,68],
viewCountArr = [23,43,34,41,40,50,67,65,67,76,78];

var ctx = document.getElementById('myChart').getContext('2d');

var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
gradientStroke.addColorStop(0, "#80b6f4");
gradientStroke.addColorStop(1, "#f49080");
var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
gradientFill.addColorStop(0, "#57ebde");
gradientFill.addColorStop(1, "#aefb2a");

var gradientFill2 = ctx.createLinearGradient(500, 0, 100, 0);
gradientFill2.addColorStop(0, "#ea98da");
gradientFill2.addColorStop(1, "#5b6cf9");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: dataArr,
        datasets: [
            {
                label: 'Order',
                data: orderCountArr,
                backgroundColor: gradientFill,
                borderColor: gradientStroke,
                borderWidth: 1
            },
            {
                label: 'Viewer',
                data: viewCountArr,
                backgroundColor: gradientFill2,
                borderColor: gradientStroke,
                borderWidth: 1
            }
    ]
    },
    options: {
        scales: {
            yAxes:[{
                display: false,
                ticks :{
                    beginAtZero: true,
                    
                },
            }],
            xAxes:[{
                display: false,
                gridLines : [
                    {display : false}
                ]
            }],
        },
        legend: {
            display :true,
            position : "top",
            labels : {
                font: '#333',
                usePointStyle : true,
            }   
        }
    }
});

new Splide( '#splide', {
	type        : 'loop',
	perPage     : 1,
	pauseOnHover: true,
    autoplay: true,
} ).mount();

let orderFromPlace = [5,15,4,9,7],
op = document.getElementById('op').getContext('2d'),
places = ["YGN","NPT","SHAN","MAG","MDY"];

var opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels: places,
        datasets: [{
            label: '# of Votes',
            data: orderFromPlace,
            backgroundColor: [
                '#ef476f',
                '#ffd166',
                '#06d6a0',
                '#118ab2',
                '#073b4c',
            ],
            borderColor: [
                '#ef476f',
                '#ffd166',
                '#06d6a0',
                '#118ab2',
                '#073b4c',
            ],
            borderWidth: 1,
            hoverBorderWidth : 4,
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            },
        },
        legend: {
            display :true,
            position : "bottom",
            labels : {
                font: '#333',
                usePointStyle : true,
            }   
        }
    }
});
