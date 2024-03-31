<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SaudiArabia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saudi Arabia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '966';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '14' => 'Asir Region', '11' => 'Al Bahah', '12' => 'Al Jawf',
            '03' => 'Al Madinah', '05' => 'Al-Qassim', '04' => 'Eastern Province',
            '06' => 'Hail', '09' => 'Jizan', '02' => 'Makkah',
            '10' => 'Najran', '08' => 'Northern Borders', '01' => 'Riyadh',
            '07' => 'Tabuk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
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
        return 'SAR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Riyadh';
    }
}
