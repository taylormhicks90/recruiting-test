<?php
/**
 * @var \CodeIgniter\View\View $this
 * @var \App\Entities\FinishedTest $caTest
 * @var boolean $caTestCompleted
 * @var \App\Entities\PATest $paTest
 * @var boolean $paTestCompleted
 */
$this->extend('Layouts/default');
$this->section('main'); ?>
<div class="container">
    <div class="row">
        <div class="col-6" id="caTestColumn">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    Cognitive Ability
                </div>
                <div class="card-body d-flex flex-column">
                    <?php if (!$caTestCompleted): ?>
                        <h5 class="card-title">Description:</h5>
                        <p class="card-text">
                            This test is used to gauge intelligence and problem-solving skills. It consists of 50
                            multiple
                            choices questions that must be completed in 12 minutes.
                        </p>
                        <h5 class="card-title">Rules</h5>
                        <ol>
                            <li>No calculators</li>
                            <li>Scratch paper is allowed and is recommended</li>
                            <li>You only have 12 minutes to complete the test once you click start</li>
                            <li>You only have 1 opportunity at this test. Only click start when you are ready to begin
                            </li>
                        </ol>
                        <a id="caStartButton" href="<?= base_url('/catest/start'); ?>" class="btn btn-primary text-white mt-auto">Start</a>
                    <?php else: ?>
                        <h5>You have already completed this test</h5>
                        <p class="card-subtitle">Correct Answers: <?= $caTest->getScore() ?></p>
                        <p class="card-subtitle">Percent Correct: <?= $caTest->getPercentageScore() ?></p>
                        <a href="<?= base_url('/catest/view-results') ?>" class="btn btn-primary text-white mt-auto">View Details</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-6" id="personalityTestColumn">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    Personality Assesment
                </div>
                <div class="card-body d-flex flex-column">
                    <?php if (!$paTestCompleted): ?>
                        <h5 class="card-title">Description:</h5>
                        <p class="card-text">
                            This test is used to classify your personality into 1 of 4 types
                        </p>
                        <a id="personalityStartButton" href="<?= base_url('/patest/start'); ?>" class="btn btn-primary text-white mt-auto">Start</a>
                    <?php else: ?>
                        <h5 class="card-title">You have already completed this test</h5>
                        <p class="card-subtitle">Primary Type: <?=$paTest?->getType()?->getPrimaryType()?></p>
                        <p class="card-subtitle">Secondary Type: <?=$paTest?->getType()?->getSecondaryType()?></p>
                        <a href="<?= base_url('/patest/view-results') ?>" class="btn btn-primary text-white mt-auto">View Details</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('caStartButton').addEventListener('click', (event) => {
        if (!confirm('You will only have 12 minutes and 1 opportunity to complete this test! Are you sure you are ready to begin?')) {
            event.preventDefault();
        }
    });
</script>
<?php $this->endSection() ?>
