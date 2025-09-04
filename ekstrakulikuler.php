<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="background-color: whitesmoke;">
    <!-- NAV -->
    <?php include 'navbar.php';?>
    <!-- TUTUP NAV -->

    <!-- SECTION ESKUL -->
     <?php
$ekskul = [
    ['nama' => 'PASKIBRA', 'gambar' => 'IMG/paskibra.png'],
    ['nama' => 'PRAMUKA', 'gambar' => 'IMG/pramuka.png'],
    ['nama' => 'PMR', 'gambar' => 'IMG/pmr.png'],
    ['nama' => 'English Club', 'gambar' => 'IMG/ec.png'],
    ['nama' => 'Cinematografi', 'gambar' => 'IMG/cj.png'],
    ['nama' => 'PKS', 'gambar' => 'IMG/pks.png']

];
$i = 0;
?>
     <section>
        <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="mb-0">Ekstrakulikuller</h4>
            <p class="text-primary fw-bold">Siswa</p>

            <div class="row">
                <?php while ($i < count($ekskul)): ?>
                <div class="col-lg-4">
                    <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                        <img src="<?= $ekskul[$i]['gambar'] ?>" alt="<?= $ekskul[$i]['nama'] ?>" width="150" height="150">
                        <div class="card-body border-0">
                            <h4><?= $ekskul[$i]['nama'] ?></h4>
                        </div>
                    </div>
                </div>
                <?php $i++;?>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</div>
     </section>
    <!-- TUTUP SECTION ESKUL -->

    <!-- SECTION FOOTER -->
    <?php include 'footer.php'; ?>
    <!-- TUTUP SECTION FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>