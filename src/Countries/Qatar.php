<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Qatar implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Qatar';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'QA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '974';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DA' => 'Ad Dawḩah', 'KH' => 'Al Khawr wa adh Dhakhīrah', 'WA' => 'Al Wakrah',
            'RA' => 'Ar Rayyān', 'MS' => 'Ash Shamāl', 'ZA' => 'Az̧ Za̧`āyin',
            'US' => 'Umm Şalāl',
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
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'QAR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Doha';
    }
}
