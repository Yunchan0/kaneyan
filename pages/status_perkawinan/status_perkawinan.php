<h2 style="display: flex; justify-content: center; margin-bottom: 3;">Rekapitulasi Status Perkawinan Penduduk</h2>
<!-- <canvas id="maritalStatusChart" width="400" height="200" style="display: block; margin: auto;"></canvas> -->

<div style="text-align: center; display: flex; justify-content: center;">
    <table style="border-collapse: collapse; width: 80%; margin: auto;">
        <thead>
            <tr>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Rekapitulasi
                </th>
                <th colspan="3" style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Laki-Laki</th>
                <th colspan="3" style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Perempuan</th>
                <th rowspan="2" style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Total</th>
            </tr>
            <tr>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Belum Kawin</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Janda/Duda</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Kawin</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Belum Kawin</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Janda/Duda</th>
                <th style="border: 1px solid #000; padding: 8px; background-color: #f2f2f2;">Kawin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">a. Usia < 7 Thn</td>
                <td style="border: 1px solid #000; padding: 8px;">30</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">27</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">1</td>
                <td style="border: 1px solid #000; padding: 8px;">58</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">b. 7 <= Usia < 19 Thn</td>
                <td style="border: 1px solid #000; padding: 8px;">77</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">77</td>
                <td style="border: 1px solid #000; padding: 8px;">0</td>
                <td style="border: 1px solid #000; padding: 8px;">2</td>
                <td style="border: 1px solid #000; padding: 8px;">156</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">c. 19 <= Usia <=56 Thn</td>
                <td style="border: 1px solid #000; padding: 8px;">124</td>
                <td style="border: 1px solid #000; padding: 8px;">1</td>
                <td style="border: 1px solid #000; padding: 8px;">134</td>
                <td style="border: 1px solid #000; padding: 8px;">74</td>
                <td style="border: 1px solid #000; padding: 8px;">3</td>
                <td style="border: 1px solid #000; padding: 8px;">150</td>
                <td style="border: 1px solid #000; padding: 8px;">486</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000; padding: 8px;">d. Usia >= 56 Thn</td>
                <td style="border: 1px solid #000; padding: 8px;">2</td>
                <td style="border: 1px solid #000; padding: 8px;">18</td>
                <td style="border: 1px solid #000; padding: 8px;">86</td>
                <td style="border: 1px solid #000; padding: 8px;">3</td>
                <td style="border: 1px solid #000; padding: 8px;">50</td>
                <td style="border: 1px solid #000; padding: 8px;">61</td>
                <td style="border: 1px solid #000; padding: 8px;">220</td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="total-row">
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">Total</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">233</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">19</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">220</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">181</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">53</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">214</td>
                <td style="border: 1px solid #000; padding: 8px; font-weight: bold;">920</td>
            </tr>
        </tfoot>
    </table>
</div>

<br>
<br>

<script>
const ctx = document.getElementById('maritalStatusChart').getContext('2d');
const maritalStatusChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            'Usia < 7 Thn',
            '7 <= Usia < 19 Thn',
            '19 <= Usia <= 56 Thn',
            'Usia >= 56 Thn'
        ],
        datasets: [{
                label: 'Laki-Laki Belum Kawin',
                data: [30, 77, 124, 2],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            },
            {
                label: 'Laki-Laki Janda/Duda',
                data: [0, 0, 1, 18],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Laki-Laki Kawin',
                data: [0, 0, 134, 86],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'Perempuan Belum Kawin',
                data: [27, 77, 74, 3],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },
            {
                label: 'Perempuan Janda/Duda',
                data: [0, 0, 3, 50],
                backgroundColor: 'rgba(255, 159, 64, 0.2)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            },
            {
                label: 'Perempuan Kawin',
                data: [1, 2, 150, 61],
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        responsive: true,
        maintainAspectRatio: false
    }
});
</script>