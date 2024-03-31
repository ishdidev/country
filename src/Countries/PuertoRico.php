<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class PuertoRico implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Puerto Rico';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1787,1939';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Puerto Rico' => 'Puerto Rico',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
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
        return 'San Juan';
    }
}
