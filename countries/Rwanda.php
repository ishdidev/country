<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Rwanda implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Rwanda';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'RW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '250';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '02' => 'Est', '03' => 'Nord', '04' => 'Ouest',
            '05' => 'Sud', '01' => 'Ville de Kigali',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'rw', 'en', 'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'rw';
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
        return 'RWF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Kigali';
    }
}
