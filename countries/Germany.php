<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Germany implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Germany';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '49';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BW' => 'Baden-Württemberg', 'BY' => 'Bayern', 'BE' => 'Berlin',
            'BB' => 'Brandenburg', 'HB' => 'Bremen', 'HH' => 'Hamburg',
            'HE' => 'Hessen', 'MV' => 'Mecklenburg-Vorpommern', 'NI' => 'Niedersachsen',
            'NW' => 'Nordrhein-Westfalen', 'RP' => 'Rheinland-Pfalz', 'SL' => 'Saarland',
            'SN' => 'Sachsen', 'ST' => 'Sachsen-Anhalt', 'SH' => 'Schleswig-Holstein',
            'TH' => 'Thüringen',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'de',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'de';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Berlin';
    }
}
