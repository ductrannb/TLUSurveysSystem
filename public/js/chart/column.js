var xValues = [1,2,3,4,5,6,7,8,9,10];
var yValues = [0,1,2,3,4,5,6,7,8,9,10];
var barColors = ["#007BFF"];
new Chart("columnChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    
    legend: {display: false},
    title: {
      display: true,
    },
    
  }
});

