<?php
session_start();
require_once 'db.php';
require_once 'index.php';
?>
<div class="container">
    <?php
    if (isset($_POST['hitungtotal_bayar'])) {
        $durasi_menginap = $_POST['durasi_menginap'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $termasuk_breakfast = isset($_POST['termasuk_breakfast']) ? $_POST['termasuk_breakfast'] : false;
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $harga_standar = 500000;
        $harga_deluxe = 1000000;
        $harga_executive = 1500000;
        $harga_breakfast = 80000;

        switch ($tipe_kamar) {
            case 'Standar':
                $total_bayar = $harga_standar * $durasi_menginap;
                break;
            case 'Deluxe':
                $total_bayar = $harga_deluxe * $durasi_menginap;
                break;
            case 'Executive':
                $total_bayar = $harga_executive * $durasi_menginap;
                break;
            default:
                $total_bayar = 0;
                break;
        }

        if ($termasuk_breakfast) {
            $total_bayar = $total_bayar + $harga_breakfast;
        }
        if ($durasi_menginap > 3) {
            $diskon = 0.1;
            $total_bayar -= $total_bayar * $diskon;
        }

        if (strtotime($tanggal_pesan) < strtotime(date('Y-m-d'))) {
            echo "Tanggal tidak valid";
        }

        $_SESSION['total_bayar'] = $total_bayar;
        $_POST['total_bayar'] = $total_bayar;
    }

    if (isset($_POST['addnew'])) {
        if (
            empty($_POST['nama_pemesan']) ||
            empty($_POST['jenis_kelamin']) ||
            empty($_POST['nomor_identitas']) ||
            empty($_POST['tipe_kamar']) ||
            empty($_POST['tanggal_pesan']) ||
            empty($_POST['durasi_menginap']) ||
            empty($_POST['total_bayar'])
        ) {
            echo "Masukkan semua input";
        } else {
            $nama_pemesan = $_POST['nama_pemesan'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $nomor_identitas = $_POST['nomor_identitas'];
            $tipe_kamar = $_POST['tipe_kamar'];
            $tanggal_pesan = $_POST['tanggal_pesan'];
            $durasi_menginap = $_POST['durasi_menginap'];
            $termasuk_breakfast = isset($_POST['termasuk_breakfast']) ? 1 : 0;
            $total_bayar = $_POST['total_bayar'];

            if ($termasuk_breakfast == 0) {
                $termasuk_breakfast = "Tidak";
            }

            $sql = "INSERT INTO bookings (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, tanggal_pesan, durasi_menginap, termasuk_breakfast, total_bayar) 
            VALUES ('$nama_pemesan', '$jenis_kelamin', '$nomor_identitas', '$tipe_kamar', '$tanggal_pesan', '$durasi_menginap', '$termasuk_breakfast', '$total_bayar')";

            if (mysqli_query($conn, $sql)) {
                echo "Data berhasil disimpan.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3 class="mt-4">Pesan Hotel</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_pemesan">Nama Pemesan:</label>
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nomor_identitas">Nomor Identitas:</label>
                        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" pattern="\d{16}" title="Isian salah. Data harus 16 digit" required>
                    </div>

                    <div class="form-group">
                        <label for="tipe_kamar">Tipe Kamar:</label>
                        <select class="form-control" id="tipe_kamar" name="tipe_kamar" required>
                            <option value="Standar">Standar</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Executive">Executive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pesan">Tanggal Pesan:</label>
                        <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" placeholder="dd/mm/yyyy" required>
                    </div>

                    <div class="form-group">
                        <label for="durasi_menginap">Durasi Menginap (Hari):</label>
                        <input type="number" min="1" class="form-control" id="durasi_menginap" name="durasi_menginap" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="termasuk_breakfast" name="termasuk_breakfast">
                        <label class="form-check-label" for="termasuk_breakfast">Termasuk Breakfast</label>
                    </div>
                    <div class="form-group mt-2">
                        <label for="durasi_menginap">Total Bayar</label>
                        <input type="number" class="form-control" id="total_bayar" name="total_bayar" value="<?php echo isset($_SESSION['total_bayar']) ? $_SESSION['total_bayar'] : ''; ?>" required readonly>
                    </div>
                    <div class="mt-3 mb-4">
                        <button type="submit" class="btn btn-primary" name="hitungtotal_bayar">Hitung Total Bayar</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-success" name="addnew" value="Add New">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>