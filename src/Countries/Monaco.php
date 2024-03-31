<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Monaco implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Monaco';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MC';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '377';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'FO' => 'Fontvieille', 'JE' => 'Jardin Exotique', 'CL' => 'La Colle',
            'CO' => 'La Condamine', 'GA' => 'La Gare', 'SO' => 'La Source',
            'LA' => 'Larvotto', 'MA' => 'Malbousquet', 'MO' => 'Monaco-Ville',
            'MG' => 'Moneghetti', 'MC' => 'Monte-Carlo', 'MU' => 'Moulins',
            'PH' => 'Port-Hercule', 'SR' => 'Saint-Roman', 'SD' => 'Sainte-Dévote',
            'SP' => 'Spélugues', 'VR' => 'Vallon de la Rousse',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
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
        return 'Monaco';
    }
}
