<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Guinea implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Guinea';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '224';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'B' => 'Boké', 'C' => 'Conakry', 'F' => 'Faranah',
            'K' => 'Kankan', 'D' => 'Kindia', 'L' => 'Labé',
            'M' => 'Mamou', 'N' => 'Nzérékoré',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ff',
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
        return 'GNF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Conakry';
    }
}
