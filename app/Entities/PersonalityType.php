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
            'Amiable Analytical', 'Amiable Expressive', 'Amiable Flexible', 'Pure Amiable' => 'Amiable',
            'Analytical Amiable', 'Analytical Driver', 'Analytical Flexible', 'Pure Analytical' => 'Analytical',
            'Driver Analytical', 'Driver Expressive', 'Driver Flexible', 'Pure Driver' => 'Driver',
            'Expressive Amiable', 'Expressive Driver', 'Expressive Flexible', 'Pure Expressive' => 'Expressive'
        };
    }

    public function getSecondaryType()
    {
        return match ($this->value) {
            'Pure Expressive', 'Pure Driver', 'Pure Analytical', 'Pure Amiable' => 'None',
            'Expressive Flexible', 'Driver Flexible', 'Analytical Flexible', 'Amiable Flexible' => 'Flexible',
            'Expressive Driver', 'Analytical Driver' => 'Driver',
            'Driver Expressive', 'Amiable Expressive' => 'Expressive',
            'Expressive Amiable', 'Analytical Amiable' => 'Amiable',
            'Driver Analytical', 'Amiable Analytical' => 'Analytical'
        };
    }
}