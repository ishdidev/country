<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class NewCaledonia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'New Caledonia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '687';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'New Caledonia' => 'New Caledonia',
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
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XPF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nouméa';
    }
}
