<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QrCode Senior Manager</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('vendor/lakers') }}/img/new-logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .pjb-qrcode img {
                width:30%;
            }
        @media only screen and (max-width: 600px) {
            .pjb-qrcode img {
                width: 50%;
            }
        }

    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-item-center p-5">
        <div class="row pjb-qrcode">
            <div class="logo-pjb text-center">
                <img src="{{ asset('vendor/lakers') }}/img/logo-pjb.png" alt="" style="width: 50%;">
            </div>
            <hr>
            <img src="{{asset('ttd_qrcode/mkad_paraf.png')}}" alt="" class="mx-auto">
            <div class="paragraf text-center">
                <h5> Nama : NDARU TRI HATMOKO</h5>
                <h5> Jabatan : MANAGER KEUANGAN DAN ADMINISTRASI</h5>
                <h5> NID : 8008026JA</h5>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>