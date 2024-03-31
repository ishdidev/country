<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Palestine implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Palestine';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '970';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BTH' => 'Bethlehem', 'DEB' => 'Deir El Balah', 'GZA' => 'Gaza',
            'HBN' => 'Hebron', 'JEN' => 'Jenin', 'JRH' => 'Jericho – Al Aghwar',
            'JEM' => 'Jerusalem', 'KYS' => 'Khan Yunis', 'NBS' => 'Nablus',
            'NGZ' => 'North Gaza', 'QQA' => 'Qalqilya', 'RFH' => 'Rafah',
            'RBH' => 'Ramallah', 'SLT' => 'Salfit', 'TBS' => 'Tubas',
            'TKM' => 'Tulkarm',
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
        return 'ILS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Ramallah';
    }
}
