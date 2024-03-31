<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Samoa implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Samoa';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'WS';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '685';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AA' => 'A ana', 'AL' => 'Aiga-i-le-Tai', 'AT' => 'Atua',
            'FA' => 'Fa asaleleaga', 'GE' => 'Gaga emauga', 'GI' => 'Gagaifomauga',
            'PA' => 'Palauli', 'SA' => 'Satupa itea', 'TU' => 'Tuamasaga',
            'VF' => 'Va a-o-Fonoti', 'VS' => 'Vaisigano',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sm', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sm';
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
        return 'WST';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Apia';
    }
}
