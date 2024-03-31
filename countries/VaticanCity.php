<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class VaticanCity implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Vatican City';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '379';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Vatican City' => 'Vatican City State',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'it', 'la',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'it';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
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
        return 'Vatican City';
    }
}
