<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Panama implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Panama';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'PA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '507';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '1' => 'Bocas del Toro', '4' => 'Chiriquí', '2' => 'Coclé',
            '3' => 'Colón', '5' => 'Darién', 'EM' => 'Emberá', '6' => 'Herrera',
            'KY' => 'Kuna Yala', '7' => 'Los Santos', 'NB' => 'Ngöbe-Buglé',
            '8' => 'Panamá', '10' => 'Panamá Oeste', '9' => 'Veraguas',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'PAB,USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Panama City';
    }
}
