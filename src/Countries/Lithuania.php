<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Lithuania implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Lithuania';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'LT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '370';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AL' => 'Alytaus Apskritis', 'KU' => 'Kauno Apskritis', 'KL' => 'Klaipėdos Apskritis',
            'MR' => 'Marijampolės Apskritis', 'PN' => 'Panevėžio Apskritis', 'TA' => 'Tauragės Apskritis',
            'TE' => 'Telšių Apskritis', 'UT' => 'Utenos Apskritis', 'VL' => 'Vilniaus Apskritis',
            'SA' => 'Šiaulių Apskritis',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'lt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'lt';
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
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Vilnius';
    }
}
