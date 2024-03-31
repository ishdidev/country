<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class SvalbardandJanMayen implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Svalbard and Jan Mayen';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SJ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '4779';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Svalbard' => 'Svalbard and Jan Mayen',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'no',
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
        return 'EU';
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
        return 'Longyearbyen';
    }
}
