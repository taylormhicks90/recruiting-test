<?php
/**
 * @var string[][] $css_files
 * @var string $title
 * @var string[] $ogTag
 */
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>"/>
    <?php
    if (isset($css_files)):
        foreach ($css_files as $css):
            ?>
            <link rel="stylesheet" href="<?= base_url($css['path']) ?>"/>
        <?php endforeach; endif; ?>
    <link rel="icon" href="<?= base_url('/favicon.ico') ?>"/>
</head>