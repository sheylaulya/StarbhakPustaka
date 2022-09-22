
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Pelajaran', 'Fiksi', 'Non-Fiksi', 'Sejarah'],
        datasets: [{
            label: '# of Votes',
            data: [5, 4, 4, 3],
            backgroundColor: [
                '#76BA99',
                '#ADCF9F',
                '#CED89E',
                '#FFDCAE'
            ],
        }]
    },
    options: {
        scales: {
           r: {
        pointLabels: {
          display: true,
          centerPointLabels: true,
          font: {
            size: 12
        }
    }
  }
        }
    }
});