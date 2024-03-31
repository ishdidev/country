<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class DemocraticRepublicoftheCongo implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Democratic Republic of the Congo';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '243';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BN' => 'Bandundu', 'BC' => 'Bas-Congo', 'KW' => 'Kasai-Occidental',
            'KE' => 'Kasai-Oriental', 'KA' => 'Katanga', 'KN' => 'Kinshasa',
            'MA' => 'Maniema', 'NK' => 'Nord-Kivu', 'OR' => 'Orientale',
            'SK' => 'Sud-Kivu', 'EQ' => 'Équateur',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ln', 'kg', 'sw', 'lu',
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
        return 'CDF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kinshasa';
    }
}
