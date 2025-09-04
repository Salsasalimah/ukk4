<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body style="background-color: whitesmoke;">
    <!-- NAV -->
     <?php include 'navbar.php';?>
    <!-- TUTUP NAV -->

    <!-- SECTION GALERI -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-0">Galeri</h4>
                    <p class="text-primary fw-bold">SMKN 4 TASIKMALAYA</p>

                    <!-- galeri 1 -->
                    <?php
                        $galeri = [
                        'IMG/GLR1.JPG',
                        'IMG/GLR6.JPG',
                        'IMG/GLR2.JPG',
                        'IMG/GLR3.JPG',
                        'IMG/GLR4.JPG',
                        'IMG/GLR5.JPG'
                        ];
                        $i = 0;
                    ?>
                    <div class="card shadow-lg rounded-2 mt-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>Jalan Sehat</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2">
                        <?php while ($i < count($galeri)): ?>
                        <div class="col-lg-4 mt-4">
                            <div class="card border-0">
                                <img src="<?=$galeri[$i]?>"  class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++;?>
                        <?php endwhile;?>
                    </div>
                    </div>
                    <!-- Tutup galeri 1 -->

                    <!-- galeri 2 -->
                      <?php
                        $galeri = [
                        'IMG/MBG1.JPG',
                        'IMG/MBG2.JPG',
                        'IMG/MBG3.JPG',
                        'IMG/MBG4.JPG',
                        'IMG/MBG5.JPG',
                        'IMG/PTO3.JPG'
                        ];
                        $i = 0;
                    ?>
                    <div class="card shadow-lg rounded-2 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border-0">
                                <div class="text-center mb-4 mt-3">
                                  <h5>MBG</h5>
                                  <hr class="w-25 mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2">
                        <?php while ($i < count($galeri)): ?>
                        <div class="col-lg-4 mt-4 ">
                            <div class="card border-0">
                                <img src="<?=$galeri[$i]?>"  class="img-fluid" alt="">
                            </div>
                        </div>
                        <?php $i++;?>
                        <?php endwhile;?>
                    </div>
                    </div>
                    <!-- Tutup galeri 2 -->

                </div>
            </div>
        </div>
     </section>

    <!-- TUTUP SECTION GALERI -->

    <!-- SECTION FOOTER -->
     <?php include 'footer.php'; ?>
    <!-- TUTUP SECTION FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>