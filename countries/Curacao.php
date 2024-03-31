<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Curacao implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Curacao';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '5999';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Curacao' => 'Curacao',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'nl', 'pa', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'nl';
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
        return 'ANG';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Willemstad';
    }
}
