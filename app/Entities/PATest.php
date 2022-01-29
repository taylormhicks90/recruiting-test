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
        return match (true) {
            ($y < -10) => match (true) {
                ($x < -10) => new PersonalityType('PureAmiable'),
                ($x > -10 && $x < 0) => new PersonalityType('AmiableExpressive'),
                ($x > 0 && $x < 10) => new PersonalityType('ExpressiveAmiable'),
                ($x > 10) => new PersonalityType('PureExpressive')
            },
            ($y > -10 && $y < 0) => match (true) {
                ($x < -10) => new PersonalityType('AmiableAnalytical'),
                ($x > -10 && $x < 0) => new PersonalityType('AmiableFlexible'),
                ($x > 0 && $x < 10) => new PersonalityType('ExpressiveFlexible'),
                ($x > 10) => new PersonalityType('ExpressiveDriver')
            },
            ($y > 0 && $y < 10) => match (true) {

                ($x < -10) => new PersonalityType('AnalyticalAmiable'),
                ($x > -10 && $x < 0) => new PersonalityType('AnalyticalFlexible'),
                ($x > 0 && $x < 10) => new PersonalityType('DriverFlexible'),
                ($x > 10) => new PersonalityType('DriverExpressive')
            },
            ($y > 10) => match (true) {
                ($x < -10) => new PersonalityType('PureAnalytical'),
                ($x > -10 && $x < 0) => new PersonalityType('AnalyticalDriver'),
                ($x > 0 && $x < 10) => new PersonalityType('DriverAnalytical'),
                ($x > 10) => new PersonalityType('PureDriver')
            }
        };
    }
}

