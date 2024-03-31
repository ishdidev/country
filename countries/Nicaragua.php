<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Nicaragua implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Nicaragua';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '505';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AN' => 'Atlántico Norte', 'AS' => 'Atlántico Sur', 'BO' => 'Boaco',
            'CA' => 'Carazo', 'CI' => 'Chinandega', 'CO' => 'Chontales',
            'ES' => 'Estelí', 'GR' => 'Granada', 'JI' => 'Jinotega',
            'LE' => 'León', 'MD' => 'Madriz', 'MN' => 'Managua',
            'MS' => 'Masaya', 'MT' => 'Matagalpa', 'NS' => 'Nueva Segovia',
            'RI' => 'Rivas', 'SJ' => 'Río San Juan',
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
        return 'NIO';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Managua';
    }
}
