<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Hungary implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Hungary';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'HU';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '36';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BA' => 'Baranya', 'BZ' => 'Borsod-Abaúj-Zemplén', 'BU' => 'Budapest',
            'BK' => 'Bács-Kiskun', 'BE' => 'Békés', 'BC' => 'Békéscsaba',
            'CS' => 'Csongrád', 'DE' => 'Debrecen', 'DU' => 'Dunaújváros',
            'EG' => 'Eger', 'FE' => 'Fejér', 'GY' => 'Győr',
            'GS' => 'Győr-Moson-Sopron', 'HB' => 'Hajdú-Bihar',
            'HE' => 'Heves', 'HV' => 'Hódmezővásárhely', 'JN' => 'Jász-Nagykun-Szolnok',
            'KV' => 'Kaposvár', 'KM' => 'Kecskemét', 'KE' => 'Komárom-Esztergom',
            'MI' => 'Miskolc', 'NK' => 'Nagykanizsa', 'NY' => 'Nyíregyháza',
            'NO' => 'Nógrád', 'PE' => 'Pest', 'PS' => 'Pécs',
            'ST' => 'Salgótarján', 'SO' => 'Somogy', 'SN' => 'Sopron',
            'SZ' => 'Szabolcs-Szatmár-Bereg', 'SD' => 'Szeged',
            'SS' => 'Szekszárd', 'SK' => 'Szolnok', 'SH' => 'Szombathely',
            'SF' => 'Székesfehérvár', 'TB' => 'Tatabánya', 'TO' => 'Tolna',
            'VA' => 'Vas', 'VE' => 'Veszprém', 'VM' => 'Veszprém',
            'ZA' => 'Zala', 'ZE' => 'Zalaegerszeg', 'ER' => 'Érd',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'hu',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'hu';
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
        return 'HUF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Budapest';
    }
}
