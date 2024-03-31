<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Burundi implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Burundi';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '257';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BB' => 'Bubanza', 'BM' => 'Bujumbura Mairie', 'BL' => 'Bujumbura Rural',
            'BR' => 'Bururi', 'CA' => 'Cankuzo', 'CI' => 'Cibitoke', 'GI' => 'Gitega',
            'KR' => 'Karuzi', 'KY' => 'Kayanza', 'KI' => 'Kirundo', 'MA' => 'Makamba',
            'MU' => 'Muramvya', 'MY' => 'Muyinga', 'MW' => 'Mwaro', 'NG' => 'Ngozi',
            'RT' => 'Rutana', 'RY' => 'Ruyigi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'rn',
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
        return 'BIF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bujumbura';
    }
}
