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

        <?= $this->session->flashdata('message'); ?>
        <form method="POST" action="<?= base_url('formulir/proses'); ?>">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Data Diri</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Enter your name">
                        </div>

                        <div class="input-field">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" placeholder="Enter Place">
                        </div>

                        <div class="input-field">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" placeholder="Enter Date" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Telepon</label>
                            <input type="number" name="telp_hp" placeholder="Enter mobile number">
                        </div>

                        <div class="input-field">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" required>
                                <option disabled selected>Select gender</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Program</label>
                            <select name="program" required>
                                <option disabled selected>Pilih Program</option>
                                <option>Umroh Regular</option>
                                <option>Umroh Plus</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>No. Identitas (KTP/NIK/SIM)</label>
                            <input type="number" name="no_id" placeholder="Enter ID type">
                        </div>

                        <div class="input-field">
                            <label>No. Paspor</label>
                            <input type="number" name="no_paspor" placeholder="Enter ID number">
                        </div>

                        <div class="input-field">
                            <label>Masa Berlaku Paspor</label>
                            <input type="date" name="masa_berlaku_paspor" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Tempat Dikeluarkan Paspor</label>
                            <input type="text" name="keluar_paspor" placeholder="Enter issued state">
                        </div>

                        <div class="input-field">
                            <label>Tanggal Dikeluarkan Paspor</label>
                            <input type="date" name="tg_keluar_paspor" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email">
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
                    <span class="title">More Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Jalan</label>
                            <input type="text" name="alamat" placeholder="Jalan">
                        </div>

                        <div class="input-field">
                            <label>Kota</label>
                            <input type="text" name="alamat" placeholder="Enter Kota">
                        </div>

                        <div class="input-field">
                            <label>Status Perkawinan</label>
                            <select name="status_perkawinan" required>
                                <option disabled selected>Select</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Golongan Darah</label>
                            <input type="text" name="goldar" placeholder="A/B/AB/O">
                        </div>

                        <div class="input-field">
                            <label>Pendidikan Terakhir</label>
                            <select name="pendidikan" required>
                                <option disabled selected>Select</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D3/S1/S2/S3">D3/S1/S2/S3</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" placeholder="Enter Pekerjaan">
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Keluarga Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Keluarga Yang Ikut Umroh</label>
                            <input type="text" name="keluarga_ikut_umroh" placeholder="Nama">
                        </div>

                        <div class="input-field">
                            <label>ㅤ</label>
                            <input type="text" name="keluarga_ikut_umroh" placeholder="Hubungan">
                        </div>

                        <div class="input-field">
                            <label>ㅤ</label>
                            <input type="number" name="nomor_keluarga_ikut_umroh" placeholder="Nomor Telepon">
                        </div>

                        <div class="input-field">
                            <label>Keluarga Yang Dapat Dihubungi (Darurat)</label>
                            <input type="text" name="keluarga_darurat" placeholder="Nama">
                        </div>

                        <div class="input-field">
                            <label>ㅤ</label>
                            <input type="number" name="nomor_keluarga_darurat" placeholder="Hubungan">
                        </div>

                        <div class="input-field">
                            <label>ㅤ</label>
                            <input type="text" name="alamat_keluarga_darurat" placeholder="Alamat">
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="submit">
                            <span href="<?= base_url('formulir/proses'); ?>" class="btnText">Submit</span>
                            <i class=" uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>

</html>