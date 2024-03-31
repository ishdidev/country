<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Romania implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Romania';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'RO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '40';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AB' => 'Alba', 'AR' => 'Arad', 'AG' => 'Argeș',
            'BC' => 'Bacău', 'BH' => 'Bihor', 'BN' => 'Bistrița-Năsăud',
            'BT' => 'Botoșani', 'BV' => 'Brașov', 'BR' => 'Brăila',
            'B' => 'București', 'BZ' => 'Buzău', 'CS' => 'Caraș-Severin',
            'CJ' => 'Cluj', 'CT' => 'Constanța', 'CV' => 'Covasna',
            'CL' => 'Călărași', 'DJ' => 'Dolj', 'DB' => 'Dâmbovița',
            'GL' => 'Galați', 'GR' => 'Giurgiu', 'GJ' => 'Gorj',
            'HR' => 'Harghita', 'HD' => 'Hunedoara', 'IL' => 'Ialomița',
            'IS' => 'Iași', 'IF' => 'Ilfov', 'MM' => 'Maramureș',
            'MH' => 'Mehedinți', 'MS' => 'Mureș', 'NT' => 'Neamț',
            'OT' => 'Olt', 'PH' => 'Prahova', 'SM' => 'Satu Mare',
            'SB' => 'Sibiu', 'SV' => 'Suceava', 'SJ' => 'Sălaj',
            'TR' => 'Teleorman', 'TM' => 'Timiș', 'TL' => 'Tulcea',
            'VS' => 'Vaslui', 'VN' => 'Vrancea', 'VL' => 'Vâlcea',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ro',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ro';
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
        return 'RON';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bucharest';
    }
}
