<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Lesotho implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Lesotho';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '266';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'D' => 'Berea', 'B' => 'Butha-Buthe', 'C' => 'Leribe',
            'E' => 'Mafeteng', 'A' => 'Maseru', 'F' => 'Mohale s Hoek',
            'J' => 'Mokhotlong', 'H' => 'Qacha s Nek', 'G' => 'Quthing',
            'K' => 'Thaba-Tseka',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'st',
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
        return 'LSL,ZAR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Maseru';
    }
}
