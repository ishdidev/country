<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class MarshallIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Marshall Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '692';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'L' => 'Ralik chain', 'T' => 'Ratak chain',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'mh',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Majuro';
    }
}
