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
                    <input type="password" class="input">
                </div>
                <div class="inputfield">
                    <label>Confirm Password</label>
                    <input type="password" class="input">
                </div>
                <div class="inputfield">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Email Address</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Phone Number</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Address</label>
                    <textarea class="textarea"></textarea>
                </div>
                <div class="inputfield">
                    <label>Postal Code</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="inputfield">
                    <input href="<?= base_url('formulir/proses'); ?>" type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>
    </form>
</body>

</html>