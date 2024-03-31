<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Liberia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Liberia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '231';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BM' => 'Bomi', 'BG' => 'Bong', 'GP' => 'Gbarpolu',
            'GB' => 'Grand Bassa', 'CM' => 'Grand Cape Mount',
            'GG' => 'Grand Gedeh', 'GK' => 'Grand Kru', 'LO' => 'Lofa',
            'MG' => 'Margibi', 'MY' => 'Maryland', 'MO' => 'Montserrado',
            'NI' => 'Nimba', 'RG' => 'River Gee', 'RI' => 'Rivercess',
            'SI' => 'Sinoe',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'LRD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Monrovia';
    }
}
