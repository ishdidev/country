<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SouthGeorgiaandtheSouthSandwichIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'South Georgia and the South Sandwich Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '500';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'South Georgia' => 'South Georgia and the South Sandwich Islands',
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
        return 'AN';
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
        return 'King Edward Point';
    }
}
