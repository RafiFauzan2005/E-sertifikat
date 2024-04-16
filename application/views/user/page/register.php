<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
       Daftar
    </title>
    <link rel="icon" href="<?php echo base_url('assets/img/SMK_YAJ.png') ?>" type="image/png">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/SMK_YAJ.png') ?>" type="image/png">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css') ?>" />
</head>

<body>
    <div class="login-page">
        <div class="form">
            <div class="title">Buat Akun</div>
            <br>
            <form class="login-form" method="post" action="<?php echo site_url('Register'); ?>">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" name="username" placeholder="username" id="username" value="<?= set_value('username'); ?>" required />

                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="password" name="password" placeholder="password" id="password" required />

                <?= form_error('full_name', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" name="full_name" placeholder="nama lengkap" id="full_name" value="<?= set_value('full_name'); ?>"required />

                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" name="email" placeholder="email" id="email" value="<?= set_value('email'); ?>" required />

                <button type="submit">Daftar</button>
                <p class="message">Sudah punya akun? <a href="<?= base_url('Login') ?>">Masuk</a></p>
            </form>
        </div>
    </div>
</body>