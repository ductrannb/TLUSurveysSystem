var xValues = ["Tùy chọn 1", "Tùy chọn 2", "Tùy chọn 3", "Tùy chọn 4"];
var yValues = [55, 49, 44, 24];
var barColors = [
  "#DA3A2F",
  "#694FC4",
  "#D9D9D9",
  "#CEFC18",

];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
    }
  }
});