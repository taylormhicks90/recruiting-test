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
                ($x < -10) => SalesType::PureAmiable,
                ($x > -10 && $x < 0) => SalesType::AmiableExpressive,
                ($x > 0 && $x < 10) => SalesType::ExpressiveAmiable,
                ($x > 10) => SalesType::PureExpressive
            },
            ($y > -10 && $y < 0) => match (true) {
                ($x < -10) => SalesType::AmiableAnalytical,
                ($x > -10 && $x < 0) => SalesType::AmiableFlexible,
                ($x > 0 && $x < 10) => SalesType::ExpressiveFlexible,
                ($x > 10) => SalesType::ExpressiveDriver
            },
            ($y > 0 && $y < 10) => match (true) {

                ($x < -10) => SalesType::AnalyticalAmiable,
                ($x > -10 && $x < 0) => SalesType::AnalyticalFlexible,
                ($x > 0 && $x < 10) => SalesType::DriverFlexible,
                ($x > 10) => SalesType::DriverExpressive
            },
            ($y > 10) => match (true) {
                ($x < -10) => SalesType::PureAnalytical,
                ($x > -10 && $x < 0) => SalesType::AnalyticalDriver,
                ($x > 0 && $x < 10) => SalesType::DriverAnalytical,
                ($x > 10) => SalesType::PureDriver
            }
        };
    }
}

