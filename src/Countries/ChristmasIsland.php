<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class ChristmasIsland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Christmas Island';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CX';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '61';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Christmas Island' => 'Christmas Island',
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
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'AUD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Flying Fish Cove';
    }
}
