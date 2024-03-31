<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Micronesia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Micronesia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '691';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'TRK' => 'Chuuk', 'KSA' => 'Kosrae', 'PNI' => 'Pohnpei',
            'YAP' => 'Yap',
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
        return 'OC';
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
        return 'Palikir';
    }
}
