<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Aruba implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Aruba';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '297';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return ['Aruba' => 'Aruba'];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'nl', 'pa',
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
        return 'AWG';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Oranjestad';
    }
}
