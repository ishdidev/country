<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Maldives implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Maldives';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MV';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '960';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'CE' => 'Central', 'MLE' => 'Male', 'NO' => 'North', 'NC' => 'North Central',
            'SU' => 'South', 'SC' => 'South Central', 'UN' => 'Upper North',
            'US' => 'Upper South',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'dv',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'dv';
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
        return 'MVR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Malé';
    }
}
