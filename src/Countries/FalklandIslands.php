<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class FalklandIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Falkland Islands (Malvinas)';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '500';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Falkland Islands' => 'Falkland Islands',
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
        return 'SA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'FKP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Stanley';
    }
}
