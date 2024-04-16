<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        Masuk
    </title>
    <link rel="icon" href="<?php echo base_url('assets/img/SMK_YAJ.png') ?>" type="image/png">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/SMK_YAJ.png') ?>" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css') ?>" />
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/js/login.js') ?>"></script>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <img style="width: 7rem; margin-bottom: 20px" src="<?= base_url('assets/img/SMK_YAJ.png') ?>"
                alt="Logo SMK YAJ">
            <div class="title"></div>
            <center>
                <?= $this->session->flashdata('message'); ?>
            </center>   
            <form class="login-form" method="post" action="<?php echo base_url('Login') ?>">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" name="email" id="email" placeholder="email" value="<?= set_value('email'); ?>" />
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" name="password" id="password" placeholder="password" />
                <button type="submit">Masuk</button>
                <p class="message">Belum punya akun? <a href="<?= base_url('Register') ?>">Daftar</a></p>
            </form>
        </div>
    </div>
</body>