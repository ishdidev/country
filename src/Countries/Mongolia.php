<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Mongolia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mongolia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '976';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '073' => 'Arhangay', '071' => 'Bayan-Ölgiy', '069' => 'Bayanhongor',
            '067' => 'Bulgan', '037' => 'Darhan uul', '061' => 'Dornod',
            '063' => 'Dornogovĭ', '059' => 'Dundgovĭ', '057' => 'Dzavhan',
            '065' => 'Govĭ-Altay', '064' => 'Govĭ-Sümber', '039' => 'Hentiy',
            '043' => 'Hovd', '041' => 'Hövsgöl', '035' => 'Orhon',
            '049' => 'Selenge', '051' => 'Sühbaatar', '047' => 'Töv',
            '1' => 'Ulaanbaatar', '046' => 'Uvs', '053' => 'Ömnögovĭ',
            '055' => 'Övörhangay',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'mn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'mn';
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
        return 'MNT';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Ulan Bator';
    }
}
