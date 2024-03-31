<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Libya implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Libya';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '218';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BU' => 'Al Buţnān', 'JA' => 'Al Jabal al Akhḑar', 'JG' => 'Al Jabal al Gharbī',
            'JI' => 'Al Jifārah', 'JU' => 'Al Jufrah', 'KF' => 'Al Kufrah',
            'MJ' => 'Al Marj', 'MB' => 'Al Marqab', 'WA' => 'Al Wāḩāt',
            'NQ' => 'An Nuqaţ al Khams', 'ZA' => 'Az Zāwiyah', 'BA' => 'Banghāzī',
            'DR' => 'Darnah', 'GT' => 'Ghāt', 'MI' => 'Mişrātah', 'MQ' => 'Murzuq',
            'NL' => 'Nālūt', 'SB' => 'Sabhā', 'SR' => 'Surt', 'WD' => 'Wādī al Ḩayāt',
            'WS' => 'Wādī ash Shāţiʾ', 'TB' => 'Ţarābulus',
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
        return 'LYD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tripoli';
    }
}
