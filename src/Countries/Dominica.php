<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Dominica implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Dominica';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1767';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '02' => 'Saint Andrew', '03' => 'Saint David', '04' => 'Saint George',
            '05' => 'Saint John', '06' => 'Saint Joseph', '07' => 'Saint Luke',
            '08' => 'Saint Mark', '09' => 'Saint Patrick', '10' => 'Saint Paul',
            '11' => 'Saint Peter',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XCD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Roseau';
    }
}
