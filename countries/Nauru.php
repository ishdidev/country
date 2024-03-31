<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Nauru implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nauru';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '674';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Aiwo', '02' => 'Anabar', '03' => 'Anetan',
            '04' => 'Anibare', '05' => 'Baiti', '06' => 'Boe',
            '07' => 'Buada', '08' => 'Denigomodu', '09' => 'Ewa',
            '10' => 'Ijuw', '11' => 'Meneng', '12' => 'Nibok',
            '13' => 'Uaboe', '14' => 'Yaren',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'na',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AUD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Yaren';
    }
}
