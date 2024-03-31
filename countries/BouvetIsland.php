<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class BouvetIsland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Bouvet Island';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BV';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '47';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Bouvet Island' => 'Bouvet Island',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'no', 'nb', 'nn',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'no';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AN';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'NOK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return '';
    }
}
