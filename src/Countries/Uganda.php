<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Uganda implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Uganda';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'UG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '256';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'C' => 'Central', 'E' => 'Eastern',
            'N' => 'Northern', 'W' => 'Western',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'sw',
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
        return 'UGX';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kampala';
    }
}
