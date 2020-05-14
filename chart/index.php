<html>
<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
    <title>Grafik Warna</title>
</head>
 
<body>
 
<?php
    $conn = new mysqli('localhost', 'root', '', 'hadir');
    $sql = "SELECT * FROM pekerjaan";
    $nama_pekerjaan = $conn->query($sql);
    $jumlah = $conn->query($sql);
?>
 
<div style="height: 75%; width: 75%;">
    <canvas id="myChart" class="chart"></canvas>
</div>
 
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',        //Tipe tampilan grafik, sobat bisa menggunakan tampilan bar, pie, line, radar dan sebagainya
    data: {
        labels: [<?php while($b = mysqli_fetch_array($nama_pekerjaan)) { echo '"' . $b['nama_pekerjaan'] . '",'; } ?>], //keterangan nama-nama label
        datasets: [{
            label: 'GRAFIK PEKERJAAN', //Judul Grafik
            data: [<?php while($a = mysqli_fetch_array($jumlah)) { echo $a['jumlah'] . ', '; } ?>], //Data Grafik
            backgroundColor: [
                'red',  //Warna Background
                'blue', //Warna Background
                'green', //Warna Background
                'silver', //Warna Background
                'black', //Warna Background
                'yellow', //Warna Background
                'purple', //Warna Background
                'brown' //Warna Background
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
 
 
</body>
</html>