<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country;

class Country extends CountryBase
{
    /**
     * @return array<int|string, string>|string|null
     */
    public function getData(string $countryCode, string $choice)
    {
        $result = null;

        switch ($choice) {
            case self::COUNTRY_CODE:
                $result = $this->getCountryCode($countryCode);
                break;
            case self::COUNTRY_NAME:
                $result = $this->getCountryName($countryCode);
                break;
            case self::COUNTRY_PHONE:
                $result = $this->getPhoneCode($countryCode);
                break;
            case self::COUNTRY_STATE:
                $result = $this->getStates($countryCode);
                break;
            case self::COUNTRY_LANGUAGE_ALL:
                $result = $this->getLanguageData($countryCode);
                break;
            case self::COUNTRY_LANGUAGE_MAIN:
                $result = $this->getLanguageData($countryCode, false);
                break;
            case self::COUNTRY_CONTINENT:
                $result = $this->getContinentData($countryCode);
                break;
            case self::COUNTRY_CURRENCY:
                $result = $this->getCurrencyData($countryCode);
                break;
            case self::COUNTRY_CAPITAL:
                $result = $this->getCapital($countryCode);
                break;
            default:
                $result = null;
                break;
        }

        return $result;
    }

    /**
     * @return array<mixed>
     */
    public function getLanguageData(string $countryCode, bool $allFlag = true): array
    {
        $languageObj = new Language();
        $languageCode = [];
        $languageData = [];

        if ($allFlag) {
            $languageCode = $this->getLanguages($countryCode);
        } else {
            $mainLanguage = $this->getMainLanguage($countryCode);
            $languageCode = !empty($mainLanguage) ? [$mainLanguage] : [];
        }

        foreach ($languageCode as $item) {
            $languageData[$item] = ['code' => $item, 'name' => $languageObj->getName($item)];
        }

        return $languageData;
    }

    /**
     * @return array<mixed>
     */
    public function getCurrencyData(string $countryCode): array
    {
        $currencyObj = new Currency();
        $currencyData = [];

        $currencyCode = $this->getCurrencyCode($countryCode);

        if (!empty($currencyCode)) {
            $currencyData = ['code' => $currencyCode, 'symbol' => $currencyObj->getSymbol($currencyCode)];
        }

        return $currencyData;
    }

    /**
     * @return array<mixed>
     */
    public function getContinentData(string $countryCode): array
    {
        $continentData = [];
        $continent = $this->listContinent();
        $continentCode = $this->getContinent($countryCode);

        if (!empty($continentCode)) {
            $continentData = ['code' => $continentCode, 'name' => $continent[$continentCode]];
        }

        return $continentData;
    }
}
