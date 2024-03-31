<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SriLanka implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sri Lanka';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '94';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '2' => 'Central Province', '5' => 'Eastern Province', '7' => 'North Central Province',
            '6' => 'North Western Province', '4' => 'Northern Province', '9' => 'Sabaragamuwa Province',
            '3' => 'Southern Province', '8' => 'Uva Province', '1' => 'Western Province',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'si', 'ta',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'si';
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
        return 'LKR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Colombo';
    }
}
