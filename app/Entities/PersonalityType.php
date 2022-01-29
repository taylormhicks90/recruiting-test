<?php

namespace App\Entities;

class PersonalityType
{
    public string $value;

    public function __construct($type)
    {
        $this->value = $type;
        
    }
    public function getPrimaryType()
    {
        return match ($this->value) {
            'AmiableAnalytical', 'AmiableExpressive', 'AmiableFlexible', 'PureAmiable' => 'Amiable',
            'AnalyticalAmiable', 'AnalyticalDriver', 'AnalyticalFlexible', 'PureAnalytical' => 'Analytical',
            'DriverAnalytical', 'DriverExpressive', 'DriverFlexible', 'PureDriver' => 'Driver',
            'ExpressiveAmiable', 'ExpressiveDriver', 'ExpressiveFlexible', 'PureExpressive' => 'Expressive'
        };
    }

    public function getSecondaryType()
    {
        return match ($this->value) {
            'PureExpressive', 'PureDriver', 'PureAnalytical', 'PureAmiable' => 'None',
            'ExpressiveFlexible', 'DriverFlexible', 'AnalyticalFlexible', 'AmiableFlexible' => 'Flexible',
            'ExpressiveDriver', 'AnalyticalDriver' => 'Driver',
            'DriverExpressive', 'AmiableExpressive' => 'Expressive',
            'ExpressiveAmiable', 'AnalyticalAmiable' => 'Amiable',
            'DriverAnalytical', 'AmiableAnalytical' => 'Analytical'
        };
    }
}