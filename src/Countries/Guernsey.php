<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Guernsey implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guernsey';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '44';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Guernsey' => 'Guernsey',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'fr',
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
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GBP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'St. Peter Port';
    }
}
