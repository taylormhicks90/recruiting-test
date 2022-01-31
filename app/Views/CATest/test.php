<?php
/**
 * @var \CodeIgniter\View\View $this
 * @var \App\Entities\CATestQuestion $firstQuestion
 * @var string $testQuestions
 * @var int $testID
 */

$this->extend('Layouts/default');
$this->section('main');
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-end">
            <span class="fs-1 text-primary" id="timer">12:00</span>
        </div>
        <div class="col-12">
            <div class="border-primary border-1 rounded-3 bg-white p-5">
                <div class="text-center">
                    <img id='question_image' src="<?= $firstQuestion->image ?? '' ?>"
                         class="<?= is_null($firstQuestion->image) ? 'visually-hidden' : '' ?>"
                         alt="Image For Question"/>
                </div>
                <span class="fs-3">
                    <span id="question_number">#1</span>: <span id="question"><?= $firstQuestion->question ?></span>
                </span>
                <form id="response" class="mt-3">
                    <input class="visually-hidden" type="hidden" name="question_id" id="question_id"
                           value="<?= $firstQuestion->id ?>">
                    <div class="form-check <?= is_null($firstQuestion->response_1) ? 'visually-hidden' : '' ?>">
                        <input class="form-check-input" type="radio" name="response" id="option_1" value="1">
                        <label class="form-check-label" for="option_1" id="response_1">
                            <?= $firstQuestion->response_1 ?>
                        </label>
                    </div>
                    <div class="form-check <?= is_null($firstQuestion->response_2) ? 'visually-hidden' : '' ?>">
                        <input class="form-check-input" type="radio" name="response" id="option_2" value="2">
                        <label class="form-check-label" for="option_2" id="response_2">
                            <?= $firstQuestion->response_2 ?>
                        </label>
                    </div>
                    <div class="form-check <?= is_null($firstQuestion->response_3) ? 'visually-hidden' : '' ?>">
                        <input class="form-check-input" type="radio" name="response" id="option_3" value="3">
                        <label class="form-check-label" for="option_3" id="response_3">
                            <?= $firstQuestion->response_3 ?>
                        </label>
                    </div>
                    <div class="form-check <?= is_null($firstQuestion->response_4) ? 'visually-hidden' : '' ?>">
                        <input class="form-check-input" type="radio" name="response" id="option_4" value="4">
                        <label class="form-check-label" for="option_4" id="response_4">
                            <?= $firstQuestion->response_4 ?>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3" id="submit_button">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const testID = <?=$testID?>;
    const testQuestions = <?=$testQuestions?>;
    const startTime = Date.now();
    const timeLimit = 12 * 60;
    const timer = document.getElementById('timer');
    const question = document.getElementById('question');
    const question_image = document.getElementById('question_image');
    const question_id = document.getElementById('question_id');
    const response_1 = document.getElementById('response_1');
    const response_2 = document.getElementById('response_2');
    const response_3 = document.getElementById('response_3');
    const response_4 = document.getElementById('response_4');
    document.getElementById('response_5');
    const option_1 = document.getElementById('option_1');
    const option_2 = document.getElementById('option_2');
    const option_3 = document.getElementById('option_3');
    const option_4 = document.getElementById('option_4');
    const response_form = document.getElementById('response');
    const submit_button = document.getElementById('submit_button');
    const timerCountdownAudio = new Audio('/assets/audio/countdown.wav');
    let current_question = 0;

    function runTimer() {
        let timeElapsed = Math.floor((Date.now() - startTime) / 1000)
        let timeRemaining = timeLimit - timeElapsed;
        let minutesRemaining = Math.floor(timeRemaining / 60);
        let secondsRemaining = timeRemaining % 60;
        if (secondsRemaining < 10 && secondsRemaining > 0) secondsRemaining = `0${secondsRemaining}`;
        if (secondsRemaining === 0) secondsRemaining = '00';
        timer.innerText = `${minutesRemaining}:${secondsRemaining}`;
        if(timeRemaining === 8){
                timerCountdownAudio.play();
        }
        if (timeRemaining > 0) {
            setTimeout(runTimer, 500);
        } else {
            timeExpired();
        }
    }

    function timeExpired() {
        submit_response('/catest/finish').then(data => {
            switch (data.code) {
                case 200:
                case 201:
                    window.location = '/catest/view-results/';
                    break;
                default:
                    alert('Failed To Finish Test. Please take a screenshot of this error and abandon test.');
            }
        }, () => {
            alert('Failed To Finish Test. Please take a screenshot of this error and abandon test.');
        })
    }

    function nextQuestion() {
        current_question++;
        document.getElementById('question_number').innerHTML = '#' + (current_question + 1);
        question_id.value = testQuestions[current_question].id;
        question.innerHTML = testQuestions[current_question].question;
        response_1.innerHTML = testQuestions[current_question].response_1 ?? '';
        response_2.innerHTML = testQuestions[current_question].response_2 ?? '';
        response_3.innerHTML = testQuestions[current_question].response_3 ?? '';
        response_4.innerHTML = testQuestions[current_question].response_4 ?? '';
        option_1.checked = false;
        option_2.checked = false;
        option_3.checked = false;
        option_4.checked = false;
        if (testQuestions[current_question].response_1 == null) {
            option_1.parentElement.classList.add('visually-hidden');
        } else {
            option_1.parentElement.classList.remove('visually-hidden')
        }
        if (testQuestions[current_question].response_2 == null) {
            option_2.parentElement.classList.add('visually-hidden');
        } else {
            option_2.parentElement.classList.remove('visually-hidden')
        }
        if (testQuestions[current_question].response_3 == null) {
            option_3.parentElement.classList.add('visually-hidden');
        } else {
            option_3.parentElement.classList.remove('visually-hidden')
        }
        if (testQuestions[current_question].response_4 == null) {
            option_4.parentElement.classList.add('visually-hidden');
        } else {
            option_4.parentElement.classList.remove('visually-hidden')
        }
        if (testQuestions[current_question].image === null) {
            question_image.src = '';
            if (!question_image.classList.contains('visually-hidden')) question_image.classList.add('visually-hidden');
        } else {
            question_image.src = testQuestions[current_question].image;
            if (question_image.classList.contains('visually-hidden')) question_image.classList.remove('visually-hidden');
        }
    }

    function submit_response(endpoint) {
        const form_data = new FormData(response_form);
        return postData(endpoint, {
            'test_id': testID,
            'question_id': form_data.get('question_id'),
            'response': form_data.get('response')
        });
    }

    async function postData(url = '', data = {}) {
        // Default options are marked with *
        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            mode: 'cors', // no-cors, *cors, same-origin
            cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/json'
                //'Content-Type': 'application/x-www-form-urlencoded',
            },
            redirect: 'follow', // manual, *follow, error
            referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            body: JSON.stringify(data) // body data type must match "Content-Type" header
        });
        return response.json(); // parses JSON response into native JavaScript objects
    }

    submit_button.addEventListener('click', (event) => {
        event.preventDefault();
        if (current_question < (testQuestions.length - 1)) {
            submit_response('/catest/record').then(data => {
                switch (data.code) {
                    case 200:
                    case 201:
                        nextQuestion();
                        break;
                    default:
                        alert('Failed To Submit Question. Please take a screenshot of this error and abandon test.')
                }
            }, () => {
                alert('Failed To Submit Question. Please take a screenshot of this error and abandon test.');
            });
        } else {
            submit_response('/catest/finish').then(data => {
                switch (data.code) {
                    case 200:
                    case 201:
                        window.location = '/catest/view-results/';
                        break;
                    default:
                        alert('Failed To Finish Test. Please take a screenshot of this error and abandon test.');
                }
            }, () => {
                alert('Failed To Finish Test. Please take a screenshot of this error and abandon test.');
            })
        }
    })
    runTimer();
</script>
<?php
$this->endSection();
?>
