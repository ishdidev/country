<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Brunei implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Brunei';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '673';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BE' => 'Belait', 'BM' => 'Brunei-Muara',
            'TE' => 'Temburong', 'TU' => 'Tutong',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ms',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ms';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'BND';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bandar Seri Begawan';
    }
}
