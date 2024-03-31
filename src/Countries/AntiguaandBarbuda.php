<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class AntiguaandBarbuda implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Antigua and Barbuda';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1268';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '10' => 'Barbuda', '11' => 'Redonda', '03' => 'Saint George',
            '04' => 'Saint John', '05' => 'Saint Mary', '06' => 'Saint Paul',
            '07' => 'Saint Peter', '08' => 'Saint Philip',
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
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XCD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Saint John s';
    }
}
