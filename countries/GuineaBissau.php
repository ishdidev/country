<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class GuineaBissau implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guinea-Bissau';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '245';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'L' => 'Leste', 'N' => 'Norte', 'S' => 'Sul',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
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
        return 'XOF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bissau';
    }
}
