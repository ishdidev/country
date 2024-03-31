<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class CookIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cook Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '682';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Cook Islands' => 'Cook Islands',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'NZD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Avarua';
    }
}
