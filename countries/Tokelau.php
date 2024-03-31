<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Tokelau implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tokelau';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '690';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Tokelau' => 'Tokelau',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'NZD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Fakaofo';
    }
}
