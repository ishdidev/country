<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SaintBarthelemy implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Saint Barthelemy';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '590';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Saint Barthelemy' => 'Saint Barthelemy',
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
        return 'NA';
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
        return 'Gustavia';
    }
}
