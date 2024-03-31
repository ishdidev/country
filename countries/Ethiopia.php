<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Ethiopia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ethiopia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ET';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '251';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BE' => 'Bīnshangul Gumuz', 'DD' => 'Dirē Dawa', 'GA' => 'Gambēla Hizboch',
            'HA' => 'Hārerī Hizb', 'OR' => 'Oromīya', 'SO' => 'Sumalē',
            'TI' => 'Tigray', 'SN' => 'YeDebub Bihēroch Bihēreseboch na Hizboch',
            'AA' => 'Ādīs Ābeba', 'AF' => 'Āfar', 'AM' => 'Āmara',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'am',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'am';
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
        return 'ETB';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Addis Ababa';
    }
}
