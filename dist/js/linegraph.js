$(document).ready(function(){
  $.ajax({
    url : "../pages/datalog.php",
    type : "GET",
    success: function(data){
      console.log(data);

      var waktu = [];
      //var id_data = [];
      var senti_data = [];
      var inchi_data = [];

      for (var i in data) {
        //waktu.push(data[i].waktu);
        waktu.push(data[i].waktu);
        senti_data.push(data[i].senti);
        inchi_data.push(data[i].inchi);
      }

      var chartdata = {
        labels: waktu,
        datasets: [
          {
            label: "inchi",
            data: inchi_data,
            fill: true,
            lineTension: 0.25,
            backgroundColor: "rgba(136, 14, 79, 0.75)",
            borderColor: "rgba(136, 14, 79, 1)",
            pointHoverBackgroundColor: "rgba(136, 14, 79, 1)",
            pointHoverBorderColor: "rgba(136, 14, 79, 1)"
          },
          {
            label: "senti",
            fill: true,
            lineTension: 0.25,
            backgroundColor: "rgba(26, 35, 126, 0.75)",
            borderColor: "rgba(26, 35, 126, 1)",
            pointHoverBackgroundColor: "rgba(26, 35, 126, 1)",
            pointHoverBorderColor: "rgba(26, 35, 126, 1)",
            data: senti_data
          }
        ]
      };

      var ctx = $("#mycanvas");
      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options: {
  				responsive: true,
  				title: {
  					display: true,
  					text: 'Chart Device A001'
  				},
  				hover: {
  					mode: 'nearest',
  					intersect: true
  				},
  				scales: {
  					xAxes: [{
  						display: true,
  						scaleLabel: {
  							display: true,
  							labelString: 'Timestamp'
  						}
  					}],
  					yAxes: [{
  						display: true,
  						scaleLabel: {
  							display: true,
  							labelString: 'Ketinggian'
  						}
  					}]
  				}
  			}
      });
    },
    error : function(data) {
      // console.log(data);
    }
  });
});
