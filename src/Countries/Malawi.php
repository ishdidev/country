<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Malawi implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Malawi';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '265';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'C' => 'Central Region', 'N' => 'Northern Region', 'S' => 'Southern Region',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'ny',
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
        return 'MWK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Lilongwe';
    }
}
