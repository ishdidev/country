<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Kosovo implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Kosovo';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'XK';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '377,381,383,386';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'XDG' => 'Đakovica District (Gjakove)', 'XGJ' => 'Gjilan District', 'XKM' => 'Kosovska Mitrovica District',
            'XPE' => 'Peć District', 'XPI' => 'Pristina (Priştine)', 'XPR' => 'Prizren District',
            'XUF' => 'Uroševac District (Ferizaj)',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'sq', 'sr',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'sq';
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
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Pristina';
    }
}
