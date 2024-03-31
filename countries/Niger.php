<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Niger implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Niger';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'NE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '227';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '1' => 'Agadez', '2' => 'Diffa', '3' => 'Dosso',
            '4' => 'Maradi', '8' => 'Niamey', '5' => 'Tahoua',
            '6' => 'Tillabéri', '7' => 'Zinder',
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
        return 'Niamey';
    }
}
