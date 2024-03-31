<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Swaziland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Swaziland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '268';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'HH' => 'Hhohho', 'LU' => 'Lubombo', 'MA' => 'Manzini', 'SH' => 'Shiselweni',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'ss',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'SZL';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Lobamba';
    }
}
