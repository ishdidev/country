<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class USVirginIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'U.S. Virgin Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1340';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Virgin Islands' => 'Virgin Islands, U.s',
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
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Charlotte Amalie';
    }
}
