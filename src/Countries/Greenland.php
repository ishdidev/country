<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Greenland implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Greenland';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '299';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'KU' => 'Kommune Kujalleq', 'SM' => 'Kommuneqarfik Sermersooq', 'QA' => 'Qaasuitsup Kommunia',
            'QE' => 'Qeqqata Kommunia',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'kl',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'kl';
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
        return 'DKK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nuuk';
    }
}
