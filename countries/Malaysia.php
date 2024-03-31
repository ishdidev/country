<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Malaysia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Malaysia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '60';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '14' => 'Wilayah Persekutuan Kuala Lumpur', '15' => 'Wilayah Persekutuan Labuan',
            '16' => 'Wilayah Persekutuan Putrajaya', '01' => 'Johor', '02' => 'Kedah',
            '03' => 'Kelantan', '04' => 'Melaka', '05' => 'Negeri Sembilan',
            '06' => 'Pahang', '08' => 'Perak', '09' => 'Perlis',
            '07' => 'Pulau Pinang', '12' => 'Sabah', '13' => 'Sarawak',
            '10' => 'Selangor', '11' => 'Terengganu',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ms',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ms';
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
        return 'MYR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kuala Lumpur';
    }
}
