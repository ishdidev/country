<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Vanuatu implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Vanuatu';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '678';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'MAP' => 'Malampa', 'PAM' => 'Pénama', 'SAM' => 'Sanma',
            'SEE' => 'Shéfa', 'TAE' => 'Taféa', 'TOB' => 'Torba',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'bi', 'en', 'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'bi';
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
        return 'VUV';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port Vila';
    }
}
