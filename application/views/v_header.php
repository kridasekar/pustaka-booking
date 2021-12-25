<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web programming II | Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Home</h1>
                <h3>Ini Template Pertama Saya</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(). 'web' ?>">home</a></li>
                    <li><a href="<?php echo base_url(). 'web/about' ?>">about</a></li>
                    <li><a href="<?php echo base_url(). 'web/profile' ?>">profile</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>