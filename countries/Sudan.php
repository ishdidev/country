<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Sudan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sudan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '249';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'RS' => 'Al Baḩr al Aḩmar', 'GZ' => 'Al Jazīrah', 'KH' => 'Al Kharţūm',
            'GD' => 'Al Qaḑārif', 'NR' => 'An Nīl', 'NW' => 'An Nīl al Abyaḑ',
            'NB' => 'An Nīl al Azraq', 'NO' => 'Ash Shamālīyah', 'DW' => 'Gharb Dārfūr',
            'DS' => 'Janūb Dārfūr', 'KS' => 'Janūb Kurdufān', 'KA' => 'Kassalā',
            'DN' => 'Shamāl Dārfūr', 'KN' => 'Shamāl Kurdufān', 'DE' => 'Sharq Dārfūr',
            'SI' => 'Sinnār', 'DC' => 'Zalingei',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar', 'en',
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
        return 'SDG';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Khartoum';
    }
}
