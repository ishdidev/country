<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Indonesia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Indonesia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ID';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '62';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'JW' => 'Jawa', 'KA' => 'Kalimantan', 'ML' => 'Maluku',
            'NU' => 'Nusa Tenggara', 'PP' => 'Papua', 'SL' => 'Sulawesi',
            'SM' => 'Sumatera',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'id',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'IDR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Jakarta';
    }
}
