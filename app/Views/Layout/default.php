<?php
/**
 * @var \CodeIgniter\View\View $this
 */
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?= $this->include('Layouts/Fragments/head')?>
<body>
<?= $this->include('Layouts/Fragments/navbar')?>
<?= $this->renderSection('main') ?>
<?= $this->include('Layouts/Fragments/footer')?>
<?= $this->include('Layouts/Fragments/scripts')?>
</body>
</html>