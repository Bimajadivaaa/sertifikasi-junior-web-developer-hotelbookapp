<?php
require_once 'db.php';
require_once 'index.php';
echo "<div class='container'>";

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
    <h2 class="mt-4">List of Hotel</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <td>Nama Pemesan</td>
            <td>Jenis Kelamin</td>
            <td>Nomor Identitas</td>
            <td>Tipe Kamar</td>
            <td>Tanggal Pesan</td>
            <td>Durasi Menginap</td>
            <td>Termasuk Breakfast</td>
            <td>Total Bayar</td>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<form action='' method='POST'>";
            echo "<input type='hidden' value='" . $row['id'] . "' name='id' />";
            echo "<tr>";
            echo "<td>" . $row['nama_pemesan'] . "</td>";
            echo "<td>" . $row['jenis_kelamin'] . "</td>";
            echo "<td>" . $row['nomor_identitas'] . "</td>";
            echo "<td>" . $row['tipe_kamar'] . "</td>";
            echo "<td>" . $row['tanggal_pesan'] . "</td>";
            echo "<td>" . $row['durasi_menginap'] . " hari" . "</td>";
            echo "<td>" . $row['termasuk_breakfast'] . "</td>";
            echo "<td>" . $row['total_bayar'] . "</td>";
            echo "<tr>";
            echo "</form";
        }
        ?>
    </table>
<?php
} else {
    echo "<br><br> No hotels found";
}
