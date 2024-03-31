<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Gabon implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Gabon';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '241';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '1' => 'Estuaire', '2' => 'Haut-Ogooué', '3' => 'Moyen-Ogooué',
            '4' => 'Ngounié', '5' => 'Nyanga', '6' => 'Ogooué-Ivindo',
            '7' => 'Ogooué-Lolo', '8' => 'Ogooué-Maritime', '9' => 'Woleu-Ntem',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fr';
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
        return 'XAF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Libreville';
    }
}
