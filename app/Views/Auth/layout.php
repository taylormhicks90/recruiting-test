<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url("/favicon.ico")?>" />

    <title></title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?=base_url('/assets/css/bootstrap.css')?>" />
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
    
    <?= $this->renderSection('pageStyles') ?>
</head>

<body>

<?= view('Myth\Auth\Views\_navbar') ?>

<main role="main" class="container">
	<?= $this->renderSection('main') ?>
</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url('/assets/js/bootstrap/bootstrap.bundle.min.js')?>"></script>

<?= $this->renderSection('pageScripts') ?>
</body>
</html>
