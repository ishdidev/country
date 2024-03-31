<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class NewZealand implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'New Zealand';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '64';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'N' => 'North Island', 'S' => 'South Island', 'AUK' => 'Auckland',
            'BOP' => 'Bay of Plenty', 'CAN' => 'Canterbury', 'HKB' => 'Hawke s Bay',
            'MWT' => 'Manawatu-Wanganui', 'NTL' => 'Northland', 'OTA' => 'Otago',
            'STL' => 'Southland', 'TKI' => 'Taranaki', 'WKO' => 'Waikato',
            'WGN' => 'Wellington', 'WTC' => 'West Coast', 'CIT' => 'Chatham Islands Territory',
            'GIS' => 'Gisborne District', 'MBH' => 'Marlborough District', 'NSN' => 'Nelson City',
            'TAS' => 'Tasman District',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'mi',
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
        return 'NZD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Wellington';
    }
}
