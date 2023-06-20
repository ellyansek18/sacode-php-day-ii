<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan Operator Matematika dengan Bootstrap 5</title>
    <!-- Tautan CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-primary">Penggunaan Operator Matematika PHP</h1>
        <div class="row">
            <div class="col-md-6">
                <?php
                // Operator Penjumlahan
                $angka1 = 10;
                $angka2 = 5;
                $penjumlahan = $angka1 + $angka2;
                echo '<p>Hasil penjumlahan: ' . $penjumlahan . '</p>';

                // Operator Pengurangan
                $pengurangan = $angka1 - $angka2;
                echo '<p>Hasil pengurangan: ' . $pengurangan . '</p>';
                ?>
            </div>
            <div class="col-md-6">
                <?php
                // Operator Pembagian
                $pembagian = $angka1 / $angka2;
                echo '<p>Hasil pembagian: ' . $pembagian . '</p>';

                // Operator Perkalian
                $perkalian = $angka1 * $angka2;
                echo '<p>Hasil perkalian: ' . $perkalian . '</p>';
                ?>
            </div>
        </div>
    </div>

    <!-- Tautan JavaScript Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
