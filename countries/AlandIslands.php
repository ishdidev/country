<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class AlandIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Aland Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AX';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '358';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Aland Islands' => 'Aland Islands',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return ['sv', 'fi'];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sv';
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
        return 'Mariehamn';
    }
}
