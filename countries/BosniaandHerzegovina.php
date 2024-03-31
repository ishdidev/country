<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class BosniaandHerzegovina implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bosnia and Herzegovina';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '387';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BRC' => 'Brčko distrikt', 'BIH' => 'Federacija Bosna i Hercegovina', 'SRP' => 'Republika Srpska',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'bs', 'hr', 'sr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'bs';
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
        return 'BAM';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Sarajevo';
    }
}
