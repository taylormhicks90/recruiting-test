<?php
/**
 * @var string[][] $js_files
 *
 */
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<?php
if (isset($js_files)):
    foreach ($js_files as $js):
        ?>
        <script src="<?= base_url($js['path'])?>"></script>
    <?php endforeach; endif; ?>