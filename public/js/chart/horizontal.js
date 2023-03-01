const data = {
    labels: ['Tùy chọn 1','Tùy chọn 2','Tùy chọn 3','Tùy chọn 4'],
    datasets: [{
      label: 'Horizontal chart',
      data: [0, 1, 2, 3, 4, 5],
      backgroundColor: [
            '#673AB7'
      ],
    }]
  };
  const config = {
    type: 'bar',
    data,
    options: {
      indexAxis: 'y',
    }
  };
  const horizontal = new Chart(
    document.getElementById('horizontal'),
    config
  );