<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Cyprus implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cyprus';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '357';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '04' => 'Ammochostos', '06' => 'Keryneia', '03' => 'Larnaka',
            '01' => 'Lefkosia', '02' => 'Lemesos', '05' => 'Pafos',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'el', 'tr', 'hy',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'el';
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
        return 'Nicosia';
    }
}
