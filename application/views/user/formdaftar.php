<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="icon" href="<?= base_url('assets2/'); ?>images/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/formdaftar.css'); ?>">
</head>

<body>
    <form class="formulir" action="<?= base_url('formulir/proses'); ?>" method="POST">
        <div class="wrapper">
            <div class="title">
                Formulir Pendaftaran
            </div>
            <br>
            <div class="form">
                <div class="inputfield">
                    <label>Program</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox1" value="Umroh Regular">
                        <label class="form-check-label" for="inlineCheckbox1">Umroh Regular</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox2" value="Umroh Plus">
                        <label class="form-check-label" for="inlineCheckbox2">Umroh Plus</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox2" value=".....">
                        <label class="form-check-label" for="inlineCheckbox2">......</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox1" value="Quad">
                        <label class="form-check-label" for="inlineCheckbox1">Quad</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox2" value="Triple">
                        <label class="form-check-label" for="inlineCheckbox2">Triple</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="program" id="inlineCheckbox2" value="Double">
                        <label class="form-check-label" for="inlineCheckbox2">Double</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="input">
                </div>
                <div class="inputfield">
                    <label>No. Identitas <br>(KTP, NIK, SIM)</br></label>
                    <input type="text" name="no_id" class="input">
                </div>
                <div class="inputfield">
                    <label>Nama Ayah Kandung</label>
                    <input type="text" name="nama_ayah" class="input">
                </div>
                <div class="inputfield">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="input">
                </div>
                <div class="inputfield">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="input">
                </div>
                <div class="inputfield">
                    <label>Nomor Paspor</label>
                    <input type="text" name="no_paspor" class="input">
                </div>
                <div class="inputfield">
                    <label>Tempat Dikeluarkan Paspor</label>
                    <input type="text" name="keluar_paspor" class="input">
                </div>
                <div class="inputfield">
                    <label>Tanggal Dikeluarkan Paspor</label>
                    <input type="date" name="tg_keluar_paspor" class="input">
                </div>
                <div class="inputfield">
                    <label>Masa Berlaku Paspor</label>
                    <input type="date" name="masa_berlaku_paspor" class="input">
                </div>
                <div class="inputfield">
                    <label>Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Golongan Darah</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="goldar" id="inlineRadio1" value="A">
                        <label class="form-check-label" for="inlineRadio1">A</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="goldar" id="inlineRadio2" value="B">
                        <label class="form-check-label" for="inlineRadio2">B</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="goldar" id="inlineRadio2" value="AB">
                        <label class="form-check-label" for="inlineRadio2">AB</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="goldar" id="inlineRadio2" value="O">
                        <label class="form-check-label" for="inlineRadio2">O</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Status Perkawinan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_perkawinan" id="inlineRadio1" value="Menikah">
                        <label class="form-check-label" for="inlineRadio1">Menikah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_perkawinan" id="inlineRadio2" value="Belum Menikah">
                        <label class="form-check-label" for="inlineRadio2">Belum Menikah</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="input" placeholder="Jalan">
                </div>
                <div class="inputfield">
                    <label></label>
                    <input type="text" name="alamat" class="input" placeholder="Kota">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="email" name="email" class="input">
                </div>
                <div class="inputfield">
                    <label>Telepon Rumah</label>
                    <input type="tel" name="telp_rumah" class="input">
                </div>
                <div class="inputfield">
                    <label>Telepon Seluler</label>
                    <input type="tel" name="telp_hp" class="input">
                </div>
                <div class="inputfield">
                    <label>Pendidikan Terakhir</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pendidikan" id="inlineCheckbox1" value="SD">
                        <label class="form-check-label" for="inlineCheckbox1">SD</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pendidikan" id="inlineCheckbox2" value="SMP">
                        <label class="form-check-label" for="inlineCheckbox2">SMP</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pendidikan" id="inlineCheckbox1" value="SMA">
                        <label class="form-check-label" for="inlineCheckbox1">SMA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pendidikan" id="inlineCheckbox2" value="D3/S1/S2/S3">
                        <label class="form-check-label" for="inlineCheckbox2">D3/S1/S2/S3</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Pekerjaan</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox1" value="PNS">
                        <label class="form-check-label" for="inlineCheckbox1">PNS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="TNI">
                        <label class="form-check-label" for="inlineCheckbox2">TNI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="Pedagang">
                        <label class="form-check-label" for="inlineCheckbox2">Pedagang</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="Petani">
                        <label class="form-check-label" for="inlineCheckbox2">Petani</label>
                    </div>
                </div>
                <div class="inputfield">
                    <label></label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox1" value="Swasta">
                        <label class="form-check-label" for="inlineCheckbox1">Swasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="Wiraswasta">
                        <label class="form-check-label" for="inlineCheckbox2">Wiraswasta</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="Pelajar">
                        <label class="form-check-label" for="inlineCheckbox2">Pelajar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="pekerjaan" id="inlineCheckbox2" value="Ibu Rumah Tangga">
                        <label class="form-check-label" for="inlineCheckbox2">Ibu Rumah Tangga</label>
                    </div>
                </div>
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="inputfield">
                    <input href="<?= base_url('formulir/proses'); ?>" type="submit" value="Formulir Pendaftaran" class="btn">
                </div>
            </div>
        </div>
    </form>
</body>

</html>