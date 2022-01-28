<?php
/**
 * @var \CodeIgniter\View\View $this
 * @var \App\Entities\FinishedTest $scoredTest
 */
$this->extend('Layouts/default');
$this->section('main');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Your Score: <?= $scoredTest->getScore() ?></h1>
            <h2>Percentage Correct: <?= $scoredTest->getPercentageScore() ?></h2>
        </div>
    </div>
    <div class="row">
        <ul class="list-group">
            <?php foreach ($scoredTest->getQuestions() as $question): ?>
                <li class="list-group-item">
                    <div class="text-center">
                        <img id='question_image' src="<?= $question->image ?? '' ?>"
                             class="<?= is_null($question->image) ? 'visually-hidden' : '' ?>"
                             alt="Image For Question"/>
                    </div>
                    <h1><span id="question"><?= $question->question ?></span></h1>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item <?= is_null($question->option_1) ? 'visually-hidden' : '' ?> <?= $question->correct_response == '1' ? 'list-group-item-success' : '' ?> <?= ($question->user_response == '1') && !$question->isCorrect() ? 'list-group-item-danger' : '' ?>"><?= $question->option_1 ?></li>
                        <li class="list-group-item <?= is_null($question->option_2) ? 'visually-hidden' : '' ?> <?= $question->correct_response == '2' ? 'list-group-item-success' : '' ?> <?= ($question->user_response == '2') && !$question->isCorrect() ? 'list-group-item-danger' : '' ?>"><?= $question->option_2 ?></li>
                        <li class="list-group-item <?= is_null($question->option_3) ? 'visually-hidden' : '' ?> <?= $question->correct_response == '3' ? 'list-group-item-success' : '' ?> <?= ($question->user_response == '3') && !$question->isCorrect() ? 'list-group-item-danger' : '' ?>"><?= $question->option_3 ?></li>
                        <li class="list-group-item <?= is_null($question->option_4) ? 'visually-hidden' : '' ?> <?= $question->correct_response == '4' ? 'list-group-item-success' : '' ?> <?= ($question->user_response == '4') && !$question->isCorrect() ? 'list-group-item-danger' : '' ?>"><?= $question->option_4 ?></li>
                        <li class="list-group-item <?= is_null($question->option_5) ? 'visually-hidden' : '' ?> <?= $question->correct_response == '5' ? 'list-group-item-success' : '' ?> <?= ($question->user_response == '5') && !$question->isCorrect() ? 'list-group-item-danger' : '' ?>"><?= $question->option_5 ?></li>
                    </ol>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php
$this->endSection();
?>
