<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Bermuda implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bermuda';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1441';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DEV' => 'Devonshire', 'HA' => 'Hamilton', 'PAG' => 'Paget',
            'PEM' => 'Pembroke', 'SGE' => 'Saint George\'s', 'SAN' => 'Sandys',
            'SMI' => 'Smith\'s,', 'SOU' => 'Southampton', 'WAR' => 'Warwick',
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
        return 'BMD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Hamilton';
    }
}
