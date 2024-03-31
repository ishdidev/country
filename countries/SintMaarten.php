<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SintMaarten implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Sint Maarten';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SX';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1721';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Sint Maarten' => 'Sint Maarten',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'nl', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'nl';
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
        return 'ANG';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Philipsburg';
    }
}
