<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Sertifikat</title>
</head><body>
     
        <center>
        <hr>
        <br style="line-height: 5;">
        <h1>SERTIFIKAT PENGHARGAAN</h1>
        <hr style="width: 45%;">
        <h2>Diberikan Kepada:</h2>
        <h1><?= $data_user->full_name ?></h1>
        <hr style="width: 50%;">
        <p ><?= $data_sertifikat->certificate_text ?> <?= $data_event->event_name ?>  yang diselenggarakan oleh <?= $data_event->organizer ?></p>
        <p>dan dilaksanakan di :</p>
        <h2><?= $data_event->location ?></h2>
        <p>Pada tanggal : <?= $data_event->event_date ?></p>
        <br style="line-height: 4">
        <p><?= $data_sertifikat->position ?></p>
        <br style="line-height: 5;">
        <p><?= $data_sertifikat->signed ?></p>
        <br style="line-height: 7;">
        <hr>
        </center>

</body></html>