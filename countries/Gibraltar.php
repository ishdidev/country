<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Gibraltar implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Gibraltar';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '350';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'Gibraltar' => 'Gibraltar',
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
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'GIP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Gibraltar';
    }
}
