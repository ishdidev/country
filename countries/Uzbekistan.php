<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Uzbekistan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Uzbekistan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'UZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '998';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AN' => 'Andijon', 'BU' => 'Buxoro', 'FA' => 'Farg‘ona',
            'JI' => 'Jizzax', 'NG' => 'Namangan', 'NW' => 'Navoiy',
            'QA' => 'Qashqadaryo', 'QR' => 'Qoraqalpog‘iston Respublikasi',
            'SA' => 'Samarqand', 'SI' => 'Sirdaryo', 'SU' => 'Surxondaryo',
            'TO' => 'Toshkent', 'TK' => 'Toshkent', 'XO' => 'Xorazm',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'uz', 'ru',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'uz';
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
        return 'UZS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tashkent';
    }
}
