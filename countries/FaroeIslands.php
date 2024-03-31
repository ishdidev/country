<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class FaroeIslands implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Faroe Islands';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'FO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '298';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Faroe Islands' => 'Faroe Islands',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fo',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fo';
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
        return 'DKK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tórshavn';
    }
}
