<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class IsleofMan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Isle of Man';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '44';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Isle of Man' => 'Isle of Man',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'gv',
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
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GBP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Douglas';
    }
}
