<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Fiji implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Fiji';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FJ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '679';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'C' => 'Central', 'E' => 'Eastern', 'N' => 'Northern',
            'R' => 'Rotuma', 'W' => 'Western',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'fj', 'hi', 'ur',
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
        return 'FJD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Suva';
    }
}
