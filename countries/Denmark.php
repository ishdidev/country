<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Denmark implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Denmark';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '45';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '84' => 'Hovedstaden', '82' => 'Midtjylland', '81' => 'Nordjylland',
            '85' => 'Sjælland', '83' => 'Syddanmark',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'da',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'da';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'DKK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Copenhagen';
    }
}
