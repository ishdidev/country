<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Antarctica implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Antarctica';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AQ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '672';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return ['Antarctica' => 'Antarctica'];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return '';
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
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return '';
    }
}
