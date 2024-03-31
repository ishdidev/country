<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Barbados implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Barbados';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BB';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1246';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Christ Church', '02' => 'Saint Andrew', '03' => 'Saint George',
            '04' => 'Saint James', '05' => 'Saint John', '06' => 'Saint Joseph',
            '07' => 'Saint Lucy', '08' => 'Saint Michael', '09' => 'Saint Peter',
            '10' => 'Saint Philip', '11' => 'Saint Thomas',
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
        return 'BBD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bridgetown';
    }
}
