<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class FrenchSouthernTerritories implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'French Southern Territories';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '262';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'French Southern Territories' => 'French Southern Territories"',
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
        return 'AN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Port-aux-Français';
    }
}
