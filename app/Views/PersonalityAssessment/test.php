<?php
$this->extend('Layouts/default');
$this->section('main');
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-primary">Whats Your Selling Personality?</h1>
            <p class="fs-3">
                As you read down the columns (A to D), check all the words and phrases that
                you feel describe you.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url('/patest/score') ?>" method="post">
                <table class="table table-striped table-responsive">
                    <thead class="text-center">
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $questions = [
                            ['Reserved', 'Quick', 'Animated', 'Deliberate'],
                            ['Guarded', 'Clear', 'Easygoing', 'Soft Spoken'],
                            ['Cautious', 'Fast-Paced', 'Friendly', 'Calm'],
                            ['Good Time Management Skills', 'Risk Taker', 'Open', 'Prefer to Ask Questions Than Make Statements'],
                            ['Seek Facts', 'Assertive', 'Informal', 'Co-Operative'],
                            ['Disciplined', 'Dominant', 'Need Better Time Management Skills', 'Even Paced'],
                            ['Difficult To Get To Know', 'Firm Handshake', 'Impulsive', 'Supportive of Others'],
                            ['Somewhat Interpersonal', 'Make Statments as Opposed to Asking Questions', 'Approachable', 'Team Player'],
                            ['Businesslike', 'Socially Outgoing', 'Prefer Informal Dress', 'Cautious'],
                            ['Usually Avoid Small Task','Expressive','Easy To Get To Know','Like To Help Others'],
                            ['Always Dress Appropriately','Excitable','Personable','Prefer Others To Start Conversation'],
                            ['Get Quickly To The Point','Know What I Want','Smile','Moderate Opinions'],
                            ['Take Charge Attitude','Tell People What I Want','Accept Things At Face Value','Quite'],
                            ['Non-Emotional','Make My Point Strongly','Interested In Others','Content To Let Others Lead'],
                            ['Make Rational Decisions','Emphatic','Permissive','Avoid Use of Power'],
                            ['Logical','Competitive','Emotional','Good Problem-Solving Skills'],
                            ['Somewhat Formal','Not Afraid to Use Power','Enjoy People','Good Time Management Skills'],
                            ['Decisive','Expressive Communicator','Can Share Feelings','Detail Oriented'],
                            ['Good Administrator','Dislike Being Alone','Think Things Through Before Decisions','Reserved'],
                            ['Like To Be In Control','Spontaneous','Enjoy Counseling Others','Not Overly Expressive']
                        ];
                        $x = 1;
                        foreach ($questions as $row):?>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="row_<?= $x ?>_a"
                                               name="a[]" value="<?= $row[0] ?>"/>
                                        <label class="form-check-label" for="row_<?= $x ?>_a"><?= $row[0] ?></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="row_<?= $x ?>_b"
                                               name="b[]" value="<?= $row[1] ?>"/>
                                        <label class="form-check-label" for="row_<?= $x ?>_b"><?= $row[1] ?></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="row_<?= $x ?>_c"
                                               name="c[]" value="<?= $row[2] ?>" />
                                        <label class="form-check-label" for="row_<?= $x ?>_c"><?= $row[2] ?></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="row_<?= $x ?>_d"
                                               name="d[]" value="<?= $row[3] ?>"/>
                                        <label class="form-check-label" for="row_<?= $x ?>_d"><?= $row[3] ?></label>
                                    </div>
                                </td>
                            </tr>
                            <?php $x++; endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
$this->endSection();
?>
