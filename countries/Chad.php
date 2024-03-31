<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Chad implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Chad';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '235';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BA' => 'Al Baṭḩah', 'LC' => 'Al Buḩayrah', 'BG' => 'Baḩr al Ghazāl',
            'BO' => 'Būrkū', 'EN' => 'Innīdī', 'KA' => 'Kānim', 'LO' => 'Lūqūn al Gharbī',
            'LR' => 'Lūqūn ash Sharqī', 'ND' => 'Madīnat Injamīnā', 'MA' => 'Māndūl',
            'MO' => 'Māyū Kībbī al Gharbī', 'ME' => 'Māyū Kībbī ash Sharqī',
            'GR' => 'Qīrā', 'SA' => 'Salāmāt', 'CB' => 'Shārī Bāqirmī',
            'MC' => 'Shārī al Awsaṭ', 'SI' => 'Sīlā', 'TI' => 'Tibastī',
            'TA' => 'Tānjilī', 'OD' => 'Waddāy', 'WF' => 'Wādī Fīrā',
            'HL' => 'Ḥajjar Lamīs',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ar',
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
        return 'XAF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'N Djamena';
    }
}
