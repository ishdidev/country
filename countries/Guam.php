<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Guam implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guam';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1671';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Guam' => 'Guam',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'ch', 'es',
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
        return 'Hagåtña';
    }
}
