<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Pakistan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Pakistan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '92';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'JK' => 'Azad Kashmir', 'BA' => 'Balochistan', 'TA' => 'Federally Administered Tribal Areas',
            'GB' => 'Gilgit-Baltistan', 'IS' => 'Islamabad', 'KP' => 'Khyber Pakhtunkhwa',
            'PB' => 'Punjab', 'SD' => 'Sindh',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'ur',
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
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'PKR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Islamabad';
    }
}
