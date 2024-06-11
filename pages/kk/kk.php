<h2 style="display: flex; justify-content: center; margin-bottom: 3;">KK & Anggota Keluarga</h2>
<canvas id="KK"></canvas>
<br>
<br>
<div class="tabel" style="text-align: center; justify-content: center; display: flex;">
    <table border="1" width="80%">
        <tr>
            <th>Rekapitulasi</th>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Total</th>
        </tr>
        <tr>
            <td></td>
            <td>Data</td>
            <td>Data</td>
            <td>Data</td>
        </tr>
        <tr>
            <td>JAGA 1</td>
            <td>105</td>
            <td>99</td>
            <td>204</td>
        </tr>
        <tr>
            <td>JAGA 2</td>
            <td>93</td>
            <td>94</td>
            <td>187</td>
        </tr>
        <tr>
            <td>JAGA 3</td>
            <td>93</td>
            <td>82</td>
            <td>175</td>
        </tr>
        <tr>
            <td>JAGA 4</td>
            <td>86</td>
            <td>75</td>
            <td>161</td>
        </tr>
        <tr>
            <td>JAGA 5</td>
            <td>95</td>
            <td>98</td>
            <td>193</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>472</td>
            <td>448</td>
            <td>920</td>
        </tr>
    </table>
</div>
<br>
<p style="display: flex; align-items: center;">
    Jumlah KK 302.
    Luas Wilayah 733 HA
</p>
<br>
<br>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: ['JAGA 1', 'JAGA 2', 'JAGA 3', 'JAGA 4', 'JAGA 5'],
        datasets: [{
            label: 'Laki-Laki',
            data: [105, 93, 93, 86, 95],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }, {
            label: 'Perempuan',
            data: [99, 94, 82, 75, 98],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero: true
                }
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
});
</script>



<script>
const ctxAge = document.getElementById('KK').getContext('2d');
const xxxxx = new Chart(ctxAge, {
    type: 'bar',
    data: {
        labels: ['JAGA 1', 'JAGA 2', 'JAGA 3', 'JAGA 4', 'JAGA 5'],
        datasets: [{
            label: 'Laki-Laki',
            data: [105, 93, 93, 86, 95],
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }, {
            label: 'Perempuan',
            data: [99, 94, 82, 75, 98],
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero: true
                }
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
});
</script>