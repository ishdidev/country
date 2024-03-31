<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Poland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Poland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '48';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'DS' => 'Dolnośląskie', 'KP' => 'Kujawsko-pomorskie', 'LU' => 'Lubelskie',
            'LB' => 'Lubuskie', 'MZ' => 'Mazowieckie', 'MA' => 'Małopolskie',
            'OP' => 'Opolskie', 'PK' => 'Podkarpackie', 'PD' => 'Podlaskie',
            'PM' => 'Pomorskie', 'WN' => 'Warmińsko-mazurskie', 'WP' => 'Wielkopolskie',
            'ZP' => 'Zachodniopomorskie', 'LD' => 'Łódzkie', 'SL' => 'Śląskie',
            'SK' => 'Świętokrzyskie',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pl';
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
        return 'PLN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Warsaw';
    }
}
