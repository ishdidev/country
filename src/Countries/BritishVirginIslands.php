<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class BritishVirginIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'British Virgin Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1284';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Tortola' => 'Tortola', 'Anegada' => 'Anegada',
            'Virgin Gorda' => 'Virgin Gorda', 'Jost Van Dyke' => 'Jost Van Dyke',
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
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Road Town';
    }
}
