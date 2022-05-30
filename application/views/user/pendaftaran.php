<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets2/'); ?>images/icon.ico" type="image/x-icon">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Formulir Pendaftaran</title>
</head>

<body>
    <div class="container">
        <header>Formulir Pendaftaran</header>

        <form method="POST" action="<?= base_url('formulir/proses'); ?>">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Data Diri</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Enter Place" required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input type="date" placeholder="Enter Date" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Telepon</label>
                            <input type="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select required>
                                <option disabled selected>Select gender</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Program</label>
                            <input type="text" placeholder="Enter your ccupation" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>No. Identitas (KTP/NIK/SIM)</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>No. Paspor</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div>

                        <div class="input-field">
                            <label>Masa Berlaku Paspor</label>
                            <input type="date" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Dikeluarkan Paspor</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Tanggal Dikeluarkan Paspor</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Jalan</label>
                            <input type="text" placeholder="Jalan" required>
                        </div>

                        <div class="input-field">
                            <label>Kota</label>
                            <input type="text" placeholder="Enter Kota" required>
                        </div>

                        <div class="input-field">
                            <label>Provinsi</label>
                            <input type="text" placeholder="Enter Provinsi" required>
                        </div>

                        <div class="input-field">
                            <label>Golongan Darah</label>
                            <input type="text" placeholder="A/B/AB/O" required>
                        </div>

                        <div class="input-field">
                            <label>Status Perkawinan</label>
                            <input type="number" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Ward Number</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" placeholder="Enter grandfther name" required>
                        </div>

                        <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" placeholder="Enter spouse name" required>
                        </div>

                        <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" placeholder="Father in law name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother in Law</label>
                            <input type="text" placeholder="Mother in law name" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>