<?php

namespace App\Entities;

class PATest extends \CodeIgniter\Entity\Entity
{
    public function fill(?array $data = null)
    {
        $this->setAAnswers($data['a']??[]);
        $this->setBAnswers($data['b']??[]);
        $this->setCAnswers($data['c']??[]);
        $this->setDAnswers($data['d']??[]);
    }

    public function getAAnswers(): array
    {
        return explode(',', $this->attributes['a_answers']);
    }

    public function setAAnswers(array $answers): void
    {
        $this->attributes['a_answers'] = implode(',', $answers);
    }

    public function getBAnswers(): array
    {
        return explode(',', $this->attributes['a_answers']);
    }

    public function setBAnswers(array $answers): void
    {
        $this->attributes['b_answers'] = implode(',', $answers);
    }

    public function getCAnswers(): array
    {
        return explode(',', $this->attributes['c_answers']);
    }

    public function setCAnswers(array $answers): void
    {
        $this->attributes['c_answers'] = implode(',', $answers);
    }

    public function getDAnswers(): array
    {
        return explode(',', $this->attributes['d_answers']);
    }

    public function setDAnswers(array $answers): void
    {
        $this->attributes['d_answers'] = implode(',', $answers);
    }

    public function getXAxis(): int
    {
        return count($this->getBAnswers()) - count($this->getDAnswers());
    }

    public function getYAxis(): int
    {
        return count($this->getAAnswers()) - count($this?->getCAnswers());
    }

    public function getType()
    {
        $x = $this->getXAxis();
        $y = $this->getYAxis();
        //Values of 10 and -10 on either axis result in an undefined type
        //Round towards 0 which is towards a moderate personality type instead of an extreme one
        if ($x == -10) $x++;
        if ($x == 10)$x--;
        if ($y == -10) $y++;
        if ($y == 10) $y++;
        //We are going to define a special type for 0,0 otherwise values of 0 on either axis result in an undefined type
        //if the person scores 0,0 we will leave them alone otherwise we round down away from our desired type
        if (!($x == 0 && $y == 0)){
            if($x == 0) $x--;
            if($y == 0) $y--;
        }
        return match (true) {
            ($x ==0 && $y == 0) => new PersonalityType('Ninja'),
            ($y < -10) => match (true) {
                ($x < -10) => new PersonalityType('Pure Amiable'),
                ($x > -10 && $x < 0) => new PersonalityType('Amiable Expressive'),
                ($x > 0 && $x < 10) => new PersonalityType('Expressive Amiable'),
                ($x > 10) => new PersonalityType('Pure Expressive')
            },
            ($y > -10 && $y < 0) => match (true) {
                ($x < -10) => new PersonalityType('Amiable Analytical'),
                ($x > -10 && $x < 0) => new PersonalityType('Amiable Flexible'),
                ($x > 0 && $x < 10) => new PersonalityType('Expressive Flexible'),
                ($x > 10) => new PersonalityType('Expressive Driver')
            },
            ($y > 0 && $y < 10) => match (true) {

                ($x < -10) => new PersonalityType('Analytical Amiable'),
                ($x > -10 && $x < 0) => new PersonalityType('Analytical Flexible'),
                ($x > 0 && $x < 10) => new PersonalityType('Driver Flexible'),
                ($x > 10) => new PersonalityType('Driver Expressive')
            },
            ($y > 10) => match (true) {
                ($x < -10) => new PersonalityType('Pure Analytical'),
                ($x > -10 && $x < 0) => new PersonalityType('Analytical Driver'),
                ($x > 0 && $x < 10) => new PersonalityType('Driver Analytical'),
                ($x > 10) => new PersonalityType('Pure Driver')
            }
        };
    }
}

