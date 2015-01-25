<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo isset($page_title) ? $page_title : ""; ?>
    </title>

    <!-- Bootstrap -->
    <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?=base_url()?>public/js/html5shiv.min.js"></script>
    <script src="<?=base_url()?>public/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <?php

        $this->load->view('include/navbar');

        if (isset($view)) {
            $this->load->view($view);
        }
        ?>
    </div>
<script src="<?= base_url() ?>public/js/jquery.min.js"></script>
<script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
</body>
</html>