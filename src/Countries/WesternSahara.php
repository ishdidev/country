<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class WesternSahara implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Western Sahara';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'EH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '212';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Western Sahara' => 'Western Sahara',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'MAD,DZD,MRU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'El Aaiún';
    }
}
