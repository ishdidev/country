<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Suriname implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Suriname';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '597';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BR' => 'Brokopondo', 'CM' => 'Commewijne', 'CR' => 'Coronie',
            'MA' => 'Marowijne', 'NI' => 'Nickerie', 'PR' => 'Para',
            'PM' => 'Paramaribo', 'SA' => 'Saramacca', 'SI' => 'Sipaliwini',
            'WA' => 'Wanica',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'nl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'nl';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'SA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SRD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Paramaribo';
    }
}
