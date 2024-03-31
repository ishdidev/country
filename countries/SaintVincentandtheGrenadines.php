<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SaintVincentandtheGrenadines implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saint Vincent and the Grenadines';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1784';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Charlotte', '06' => 'Grenadines', '02' => 'Saint Andrew',
            '03' => 'Saint David', '04' => 'Saint George', '05' => 'Saint Patrick',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XCD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kingstown';
    }
}
