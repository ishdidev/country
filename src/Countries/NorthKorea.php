<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class NorthKorea implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'North Korea';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KP';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '850';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '04' => 'Chagang', '07' => 'Kangwon', '09' => 'North Hamgyong',
            '06' => 'North Hwanghae', '03' => 'North Pyongan', '01' => 'Pyongyang',
            '13' => 'Rason', '10' => 'Ryanggang', '08' => 'South Hamgyong',
            '05' => 'South Hwanghae', '02' => 'South Pyongan',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ko',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ko';
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
        return 'KPW';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Pyongyang';
    }
}
