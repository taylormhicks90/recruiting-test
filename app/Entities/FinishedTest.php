<?php

namespace App\Entities;

class FinishedTest
{
    /**
     * @var \App\Entities\WonderlicTestResponse[] $questions
     */
    private array $questions;
    private int $correct_answers = 0;
    private int $incorrect_answers = 0;

    public function __construct(array $questions)
    {
        $this->questions = $questions;
        $this->scoreTest();
    }

    private function scoreTest(){
        foreach ($this->questions as $question){
            if($question->isCorrect()){
                $this->correct_answers++;
            }else{
                $this->incorrect_answers++;
            }
        }
    }

    /**
     * @return \App\Entities\WonderlicTestResponse[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->correct_answers;
    }

    public function getPercentageScore() : float{
        try {
            return ($this->correct_answers / count($this->questions)) * 100;
        }catch (\DivisionByZeroError){
            return 0.0;
        }
    }

    /**
     * @return array
     */
    public function getCorrectQuestions(): array
    {
        $correctAnswers = Array();
        foreach ($this->questions as $answer){
            if($answer->isCorrect()) array_push($correctAnswers,$answer);
        }
        return $correctAnswers;
    }

    /**
     * @return array
     */
    public function getIncorrectQuestions(): array
    {
        $incorrectAnswers = Array();
        foreach ($this->questions as $answer){
            if(!$answer->isCorrect()) array_push($incorrectAnswers,$answer);
        }
        return $incorrectAnswers;
    }
}