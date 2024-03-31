<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Botswana implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Botswana';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '267';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'CE' => 'Central', 'CH' => 'Chobe', 'FR' => 'Francistown',
            'GA' => 'Gaborone', 'GH' => 'Ghanzi', 'JW' => 'Jwaneng',
            'KG' => 'Kgalagadi', 'KL' => 'Kgatleng', 'KW' => 'Kweneng',
            'LO' => 'Lobatse', 'NE' => 'North-East', 'NW' => 'North-West',
            'SP' => 'Selibe Phikwe', 'SE' => 'South-East', 'SO' => 'Southern',
            'ST' => 'Sowa Town',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'tn',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'BWP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Gaborone';
    }
}
