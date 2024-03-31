<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Afghanistan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Afghanistan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '93';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BDS' => 'Badakhshan', 'BGL' => 'Baghlan', 'BAL' => 'Balkh',
            'BDG' => 'Badghis', 'BAM' => 'Bamyan', 'DAY' => 'Daykundi',
            'FRA' => 'Farah', 'FYB' => 'Faryab', 'GHA' => 'Ghazni',
            'GHO' => 'Ghor', 'HEL' => 'Helmand', 'HER' => 'Herat',
            'JOW' => 'Jowzjan', 'KAN' => 'Kandahar', 'KHO' => 'Khost',
            'KNR' => 'Kunar', 'KDZ' => 'Kunduz', 'KAB' => 'Kabul',
            'KAP' => 'Kapisa', 'LAG' => 'Laghman', 'LOG' => 'Logar',
            'NAN' => 'Nangarhar', 'NIM' => 'Nimruz', 'NUR' => 'Nuristan',
            'PIA' => 'Paktia', 'PKA' => 'Paktika', 'PAN' => 'Panjshir',
            'PAR' => 'Parwan', 'SAM' => 'Samangan', 'SAR' => 'Sar-e Pol',
            'TAK' => 'Takhar', 'URU' => 'Uruzgan', 'WAR' => 'Wardak',
            'ZAB' => 'Zabul',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ps', 'uz', 'tk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ps';
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
        return 'AFN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kabul';
    }
}
