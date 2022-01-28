<?php
/***
 * @var \CodeIgniter\View\View $this
 * @var \App\Entities\PATest $test
 */
$this->extend('Layouts/default');
$this->section('main');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Your Sales Type: <?=$test->getType()->value?> </h1>
            <h3>Primary Type: <?=$test->getType()->getPrimaryType()?></h3>
            <h3>Secondary Type: <?=$test->getType()->getSecondaryType()?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?=$this->include('PersonalityAssessment/SalesTypes/' . $test->getType()->getPrimaryType())?>
        </div>
    </div>
</div>
<?php
$this->endSection();
?>
