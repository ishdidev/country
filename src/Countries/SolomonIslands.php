<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SolomonIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Solomon Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SB';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '677';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'CT' => 'Capital Territory', 'CE' => 'Central', 'CH' => 'Choiseul',
            'GU' => 'Guadalcanal', 'IS' => 'Isabel', 'MK' => 'Makira-Ulawa',
            'ML' => 'Malaita', 'RB' => 'Rennell and Bellona', 'TE' => 'Temotu',
            'WE' => 'Western',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SBD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Honiara';
    }
}
