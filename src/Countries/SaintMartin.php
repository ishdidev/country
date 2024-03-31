<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SaintMartin implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saint Martin';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '590';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Saint Martin' => 'Saint Martin',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'fr', 'nl',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Marigot';
    }
}
