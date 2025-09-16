<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
        
        
        <?php if (session('error')): ?>
            <div class="alert alert-danger">
        <?= session('error') ?>
            <button class="close-btn" onclick="this.parentElement.style.display='none'">×</button>
            </div>
        <?php endif; ?>

        <?php if (session('success')): ?>
            <div class="alert alert-success">
                <?= session('success') ?>
                <button class="close-btn" onclick="this.parentElement.style.display='none'">×</button>
            </div>
        <?php endif; ?>

    </head>

    <body>
        
        