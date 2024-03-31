<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class TrinidadandTobago implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Trinidad and Tobago';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1868';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'ARI' => 'Arima', 'CHA' => 'Chaguanas', 'CTT' => 'Couva-Tabaquite-Talparo',
            'DMN' => 'Diego Martin', 'ETO' => 'Eastern Tobago', 'PED' => 'Penal-Debe',
            'PTF' => 'Point Fortin', 'POS' => 'Port of Spain', 'PRT' => 'Princes Town',
            'RCM' => 'Rio Claro-Mayaro', 'SFO' => 'San Fernando', 'SJL' => 'San Juan-Laventille',
            'SGE' => 'Sangre Grande', 'SIP' => 'Siparia', 'TUP' => 'Tunapuna-Piarco',
            'WTO' => 'Western Tobago',
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
        return 'TTD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port of Spain';
    }
}
