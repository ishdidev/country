<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Zambia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Zambia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ZM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '260';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '02' => 'Central', '08' => 'Copperbelt', '03' => 'Eastern',
            '04' => 'Luapula', '09' => 'Lusaka', '06' => 'North-Western',
            '05' => 'Northern', '07' => 'Southern', '01' => 'Western',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'ZMW';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Lusaka';
    }
}
