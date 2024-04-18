<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Sertifikat</title>
    <style>
        .backround {
            background-image: url('assets/img/template.png'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head><body>
        
        <div class="backround">
        <center>
        <br style="line-height: 4;">
        <h1 style="font-family: 'Roboto', sans-serif;">SERTIFIKAT PENGHARGAAN</h1>
        <hr style="width: 45%;">
        <h2 style="font-family: 'Roboto', sans-serif;">Diberikan Kepada:</h2>
        <br style="line-height: 4;">
        <h1><?= $data_sertifikat->full_name ?></h1>
        <hr style="width: 50%;">
        <p ><?= $data_sertifikat->certificate_text ?> <?= $data_sertifikat->event_name ?>  yang diselenggarakan oleh <?= $data_event->organizer ?></p>
        <p>dan dilaksanakan di :</p>
        <h2><?= $data_event->location ?></h2>
        <p>Pada tanggal : <?= $data_event->event_date ?></p>
        <br style="line-height: 4">
        <p><?= $data_sertifikat->position ?></p>
        <img style="position: relative; width: 100px;" src="assets/img/TTD.png" alt="Tanda Tangan">
        <br style="line-height: 4;">
        <p><?= $data_sertifikat->signed ?></p>
        <br style="line-height: 5;">
        </center>
        </div>

</body></html>