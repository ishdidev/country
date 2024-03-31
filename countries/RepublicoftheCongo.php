<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class RepublicoftheCongo implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Republic of the Congo';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CG';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '242';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '11' => 'Bouenza', 'BZV' => 'Brazzaville', '8' => 'Cuvette',
            '15' => 'Cuvette-Ouest', '5' => 'Kouilou', '7' => 'Likouala',
            '2' => 'Lékoumou', '9' => 'Niari', '14' => 'Plateaux', '16' => 'Pointe-Noire',
            '12' => 'Pool', '13' => 'Sangha',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'ln',
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
        return 'Brazzaville';
    }
}
