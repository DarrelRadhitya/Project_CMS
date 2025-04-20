// bind onClick event to all LI-tags of the legend
var legendItems = myLegendContainer.getElementsByTagName('li');
for (var i = 0; i < legendItems.length; i += 1) {
	legendItems[i].addEventListener("click", legendClickCallback, false);
}

var dailySalesChart = document.getElementById('dailySalesChart').getContext('2d');

var myDailySalesChart = new Chart(dailySalesChart, {
	type: 'line',
	data: {
		labels:["January","February","March","April","May","June","July","August","September","October","November","Desember"],
		datasets:[ {
			label: "Uang Masuk", 
			fill: !0, 
			backgroundColor: "rgba(255,255,255,0.2)", 
			borderColor: "#fff", 
			borderCapStyle: "butt", 
			borderDash: [], 
			borderDashOffset: 0, 
			pointBorderColor: "#fff", 
			pointBackgroundColor: "#fff", 
			pointBorderWidth: 1, 
			pointHoverRadius: 5, 
			pointHoverBackgroundColor: "#fff", 
			pointHoverBorderColor: "#fff", 
			pointHoverBorderWidth: 1, 
			pointRadius: 1, 
			pointHitRadius: 5, 
			data: [0, 0, 130000, 0, 0, 0, 0, 0, 0, 0, 0, 0]
		}]
	},
	options : {
		maintainAspectRatio:!1, legend: {
			display: !1
		}
		, animation: {
			easing: "easeInOutBack"
		}
		, scales: {
			yAxes:[ {
				display:!1, ticks: {
					fontColor: "rgba(0,0,0,0.5)", fontStyle: "bold", beginAtZero: !0, maxTicksLimit: 10, padding: 0
				}
				, gridLines: {
					drawTicks: !1, display: !1
				}
			}
			], xAxes:[ {
				display:!1, gridLines: {
					zeroLineColor: "transparent"
				}
				, ticks: {
					padding: -20, fontColor: "rgba(255,255,255,0.2)", fontStyle: "bold"
				}
			}
			]
		}
	}
});