<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo-web-light-1.png" id="favicon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/custom.css">

    <title>salmonvanus</title>

</head>


<body>

    <div class="container my-5">
        <div>
            <input type="checkbox" class="checkbox" id="checkbox">
            <label for="checkbox" class="label">
                <i class="bi bi-moon"></i>
                <i class="bi bi-sun"></i>
                <div class="ball"></div>
            </label>
        </div>
        <img class="rounded-circle my-3" src="assets/img/profile/b.jpg" alt="img" style="width: 100px; height:100px">
        <br />
        <p class="text-date" style="font-size: small;">
            <?php echo date("F, j Y"); ?>
        </p>
        <div class="text-white text-monospace" id="clock2" style="font-size:small;"></div>
        <p></p>
        <h2>
            <a  class="typewrite" style="color: #DB1A2C; font-family:monospace;" data-period="2000" data-type='[ "My Project" ]'>
                <span class="wrap"></span>
            </a>
        </h2>
        <p class="text-monospace" style="font-size: larger;">I'm <a class="text-monospace" style="font-size: larger" href="https://www.instagram.com/salmonvanus/" target="_blank"><b><u>Stevanus William Salmon,</u></b></a></p>

        <!-- <hr /> -->
        <!-- <br /> -->
        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%; height:20%"><b>SIDAK BBM SUBSIDI</b><br><u style="font-size:12px ;">#Layanan Pengambilan BBM Subsidi Kabupaten Sitaro</u></br></button></a>
        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%; height:20%"><b>KONSULTASI HUKUM</b><br><u style="font-size:12px ;">#Layanan Konsultasi Hukum Masyarakat Kabupaten Minahasa Selatan</u></br></button></a>
        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%;height:20%"><b>LAPOR ORMAS</b><br><u style="font-size:12px ;">Layanan Pendaftaran & Pelaporan Ormas Prov. Sulut</u></br></button></a>

        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%; height:20%"><b>PAKAR SINUS</b><br><u style="font-size:12px ;">Sistem Pakar Penyakit Sinusitis</u></br></button></a>
        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%; height:20%"><b>UMKM BITUNG</b><br><u style="font-size:12px ;">#Aplikasi Portal UMKM Kota Bitung</u></br></button></a>
        <a ><button type="button" class="btn btn-danger btn-circle mt-2" style="width: 40%; height:20%"><b>DINSOS PMKS</b><br><u style="font-size:12px ;">#Aplikasi Pendataan Masyarakat Penyandang Masalah Kesejahteraan Sosial</u></br></button></a>

        <p class="text-monospace mt-3" style="font-size: larger; "><a class="text-monospace" style="font-size: 14px" href="<?= base_url('Welcome'); ?>" target="_blank"><b><u>#Home,</u></b></a></p>

        <p class="text-footer"><span>© salmonvanus.id<span></p>
    </div>

    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>
    <script>
        var base_url = "<?php echo base_url(); ?>"
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>

</body>

</html>