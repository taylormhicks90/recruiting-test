<?php
namespace App\Entities;

enum SalesType: string
{
    case PureAmiable = 'Pure Amiable';
    case AmiableExpressive = 'Amiable Expressive';
    case ExpressiveAmiable = 'Expressive Amiable';
    case PureExpressive = 'Pure Expressive';
    case AmiableAnalytical = 'Amiable Analytical';
    case AmiableFlexible = 'Amiable Flexible';
    case ExpressiveFlexible = 'Expressive Flexible';
    case ExpressiveDriver = 'Expressive Driver';
    case AnalyticalAmiable = 'Analytical Amiable';
    case AnalyticalFlexible = 'Analytical Flexible';
    case DriverFlexible = 'Driver Flexible';
    case DriverExpressive = 'Driver Expressive';
    case PureAnalytical = 'Pure Analytical';
    case AnalyticalDriver = 'Analytical Driver';
    case DriverAnalytical = 'Driver Analytical';
    case PureDriver = 'Pure Driver';

    public function getPrimaryType()
    {
        return match ($this) {
            self::AmiableAnalytical, self::AmiableExpressive, self::AmiableFlexible, self::PureAmiable => 'Amiable',
            self::AnalyticalAmiable, self::AnalyticalDriver, self::AnalyticalFlexible, self::PureAnalytical => 'Analytical',
            self::DriverAnalytical, self::DriverExpressive, self::DriverFlexible, self::PureDriver => 'Driver',
            self::ExpressiveAmiable, self::ExpressiveDriver, self::ExpressiveFlexible, self::PureExpressive => 'Expressive'
        };
    }

    public function getSecondaryType()
    {
        return match ($this) {
            self::PureExpressive, self::PureDriver, self::PureAnalytical, self::PureAmiable => 'None',
            self::ExpressiveFlexible, self::DriverFlexible, self::AnalyticalFlexible, self::AmiableFlexible => 'Flexible',
            self::ExpressiveDriver, self::AnalyticalDriver => 'Driver',
            self::DriverExpressive, self::AmiableExpressive => 'Expressive',
            self::ExpressiveAmiable, self::AnalyticalAmiable => 'Amiable',
            self::DriverAnalytical, self::AmiableAnalytical => 'Analytical'
        };
    }
}