<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Yemen implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Yemen';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'YE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '967';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AD' => ' Adan', 'AM' => ' Amrān', 'AB' => 'Abyān',
            'BA' => 'Al Bayḑā ', 'JA' => 'Al Jawf', 'MR' => 'Al Mahrah',
            'MW' => 'Al Maḩwīt', 'HU' => 'Al Ḩudaydah', 'DA' => 'Aḑ Ḑāli ',
            'DH' => 'Dhamār', 'IB' => 'Ibb', 'LA' => 'Laḩij',
            'MA' => 'Ma rib', 'RA' => 'Raymah', 'SH' => 'Shabwah',
            'TA' => 'Tā‘izz', 'SA' => 'Şan‘ā ', 'SN' => 'Şan‘ā ',
            'SD' => 'Şā‘dah', 'HJ' => 'Ḩajjah', 'HD' => 'Ḩaḑramawt',
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
        return 'YER';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Sana a';
    }
}
