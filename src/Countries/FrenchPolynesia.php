<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class FrenchPolynesia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'French Polynesia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '689';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'French Polynesia' => 'French Polynesia',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fr';
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
        return 'XPF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Papeetē';
    }
}
