<?php
/**
 * @var \CodeIgniter\View\View $this
 */
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<?= $this->include('Layouts/Fragments/head')?>
<body style="min-height: 100vh" class="d-flex flex-column">
<?= $this->include('Layouts/Fragments/navbar')?>
<main class="py-5">
<?php $this->renderSection('main') ?>
</main>
<?= $this->include('Layouts/Fragments/footer')?>
<?= $this->include('Layouts/Fragments/scripts')?>
</body>
</html>