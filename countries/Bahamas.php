<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bahamas implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bahamas';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1242';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AK' => 'Acklins', 'BY' => 'Berry Islands', 'BI' => 'Bimini',
            'BP' => 'Black Point', 'CI' => 'Cat Island', 'CO' => 'Central Abaco',
            'CS' => 'Central Andros', 'CE' => 'Central Eleuthera', 'FP' => 'City of Freeport',
            'CK' => 'Crooked Island and Long Cay', 'EG' => 'East Grand Bahama',
            'EX' => 'Exuma', 'GC' => 'Grand Cay', 'HI' => 'Harbour Island',
            'HT' => 'Hope Town', 'IN' => 'Inagua', 'LI' => 'Long Island',
            'MC' => 'Mangrove Cay', 'MG' => 'Mayaguana', 'MI' => 'Moores Island',
            'NO' => 'North Abaco', 'NS' => 'North Andros', 'NE' => 'North Eleuthera',
            'RI' => 'Ragged Island', 'RC' => 'Rum Cay', 'SS' => 'San Salvador',
            'SO' => 'South Abaco', 'SA' => 'South Andros', 'SE' => 'South Eleuthera',
            'SW' => 'Spanish Wells', 'WG' => 'West Grand Bahama',
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
        return 'BSD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nassau';
    }
}
