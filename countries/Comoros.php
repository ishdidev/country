<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Comoros implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Comoros';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KM';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '269';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Anjouan', 'G' => 'Grande Comore', 'M' => 'Mohéli',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar', 'fr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
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
        return 'KMF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Moroni';
    }
}
