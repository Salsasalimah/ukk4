<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body style="background-color: whitesmoke;">

    <!-- NAV -->
    <?php include 'navbar.php';?>
    <!-- TUTUP NAV -->

    <!-- SECTION PROFIL -->
    <div class="text-center my-2">
        <img src="IMG/LOGO.png" alt="" height="150" width="150">
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto"
                style="background-color: rgb(255, 255, 255); border: 1px solid white; padding: 20px; border-radius: 20px;">
                <h4 class="mb-4 text-center">Profil Sekolah</h4>
                <div class="row">
                    <div class="col-lg-3">
                        <p>Nama Sekolah</p>
                        <p>NPSN</p>
                        <p>Alamat</p><br>
                        <p>Telp/faks</p>
                        <p>Email</p>
                        <p>Tahun Berdiri/Beroperasi</p>
                        <p>Nomor SK Pendirian</p>
                        <p>Tanggal SK Pendirian</p>
                        <p>Kepemilikan</p>
                    </div>
                    <div class="col-lg-1">
                        <p>:</p>
                        <p>:</p>
                        <p>:</p><br>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </div>
                    <div class="col-lg-8">
                        <p>SMK N 4 TASIKMALAYA</p>
                        <p>20276063</p>
                        <p>Jl Depok RT 02 RW 05, Kelurahan Sukamenak, Kecamatan Purbaratu,
                            Kota Tasikmalaya, Provinsi Jawabarat</p>
                        <p>(0265) 7528981</p>
                        <p>info@smkn4-tsm.sch.id</p>
                        <p>2010</p>
                        <p>420/9/SK-BPPT/2012</p>
                        <p>06 Februari 2012</p>
                        <p>Pemerintah Daerah</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TUTUP SECTION PROFIL -->

    <!-- SECTION FOOTER -->
    <?php include 'footer.php'; ?>
    <!-- TUTUP SECTION FOOTER -->
     
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>