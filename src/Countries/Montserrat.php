<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Montserrat implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Montserrat';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1664';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Montserrat' => 'Montserrat',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
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
        return 'XCD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Plymouth';
    }
}
