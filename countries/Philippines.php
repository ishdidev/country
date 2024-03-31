<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Philippines implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Philippines';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '63';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '14' => 'Autonomous Region in Muslim Mindanao', '05' => 'Bicol', '02' => 'Cagayan Valley',
            '40' => 'Calabarzon', '13' => 'Caraga', '03' => 'Central Luzon',
            '07' => 'Central Visayas', '15' => 'Cordillera Administrative Region',
            '11' => 'Davao', '08' => 'Eastern Visayas', '01' => 'Ilocos',
            '41' => 'Mimaropa', '00' => 'National Capital Region', '10' => 'Northern Mindanao',
            '12' => 'Soccsksargen', '06' => 'Western Visayas', '09' => 'Zamboanga Peninsula',
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
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'PHP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Manila';
    }
}
