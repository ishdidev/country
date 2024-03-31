<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Egypt implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Egypt';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'EG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '20';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DK' => 'Ad Daqahlīyah', 'BA' => 'Al Baḩr al Aḩmar', 'BH' => 'Al Buḩayrah',
            'FYM' => 'Al Fayyūm', 'GH' => 'Al Gharbīyah', 'ALX' => 'Al Iskandarīyah',
            'IS' => 'Al Ismāٰīlīyah', 'GZ' => 'Al Jīzah', 'MN' => 'Al Minyā', 'MNF' => 'Al Minūfīyah',
            'KB' => 'Al Qalyūbīyah', 'C' => 'Al Qāhirah', 'LX' => 'Al Uqşur', 'WAD' => 'Al Wādī al Jadīd',
            'SUZ' => 'As Suways', 'SU' => 'As Sādis min Uktūbar', 'SHR' => 'Ash Sharqīyah',
            'ASN' => 'Aswān', 'AST' => 'Asyūţ', 'BNS' => 'Banī Suwayf',
            'PTS' => 'Būr Saٰīd', 'DT' => 'Dumyāţ', 'JS' => 'Janūb Sīnā ',
            'KFS' => 'Kafr ash Shaykh', 'MT' => 'Maţrūḩ', 'KN' => 'Qinā',
            'SIN' => 'Shamāl Sīnā ', 'SHG' => 'Sūhāj', 'HU' => 'Ḩulwān',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EGP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Cairo';
    }
}
