<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SouthSudan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'South Sudan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '211';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'EC' => 'Central Equatoria', 'EE' => 'Eastern Equatoria', 'JG' => 'Jonglei',
            'LK' => 'Lakes', 'BN' => 'Northern Bahr el Ghazal', 'UY' => 'Unity',
            'NU' => 'Upper Nile', 'WR' => 'Warrap', 'BW' => 'Western Bahr el Ghazal',
            'EW' => 'Western Equatoria',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SSP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Juba';
    }
}
