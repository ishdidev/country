<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class EastTimor implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'East Timor';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TL';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '670';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AL' => 'Aileu', 'AN' => 'Ainaro', 'BA' => 'Baucau', 'BO' => 'Bobonaro',
            'CO' => 'Cova Lima', 'DI' => 'Díli', 'ER' => 'Ermera',
            'LA' => 'Lautem', 'LI' => 'Liquiça', 'MT' => 'Manatuto',
            'MF' => 'Manufahi', 'OE' => 'Oecussi', 'VI' => 'Viqueque',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'pt',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'pt';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'OC';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'USD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Dili';
    }
}
