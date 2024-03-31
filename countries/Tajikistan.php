<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Tajikistan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tajikistan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TJ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '992';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DU' => 'Dushanbe', 'KT' => 'Khatlon', 'GB' => 'Kŭhistoni Badakhshon',
            'SU' => 'Sughd',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'tg', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'tg';
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
        return 'TJS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Dushanbe';
    }
}
