<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country;

abstract class CountryBase
{
    public const COUNTRY_NAME = 'country_name';

    public const COUNTRY_CODE = 'country_code';

    public const COUNTRY_PHONE = 'country_phone';

    public const COUNTRY_STATE = 'country_states';

    public const COUNTRY_LANGUAGE_ALL = 'country_language_all';

    public const COUNTRY_LANGUAGE_MAIN = 'country_language_main';

    public const COUNTRY_CONTINENT = 'country_continent';

    public const COUNTRY_CURRENCY = 'country_currency';

    public const COUNTRY_CAPITAL = 'country_capital';

    /**
     * @var array<string, CountryInterface>
     */
    protected array $countries;

    public function __construct()
    {
        $this->addCountryClass();
    }

    /**
     * @return array<mixed>
     */
    public function getCountries(): array
    {
        $result = [];

        foreach ($this->countries as $countryObj) {
            $result[$countryObj->getCode()] = $countryObj->getName();
        }

        return $result;
    }

    public function checkCountryExist(string $countryCode): ?CountryInterface
    {
        try {
            $countryObj = $this->countries[$countryCode] ?? null;
            if (null === $countryObj) {
                throw new CountryException($countryCode);
            }

            return $countryObj;
        } catch (CountryException $e) {
            error_log($e->getMessage(), 0);

            return null;
        }
    }

    /**
     * @return array<mixed>
     */
    public function listContinent(): array
    {
        return [
            'AS' => 'Asia', 'AN' => 'Antarctica', 'AF' => 'Africa',
            'EU' => 'Europe', 'NA' => 'North America', 'SA' => 'South America',
            'OC' => 'Oceania',
        ];
    }

    protected function getCountryObject(string $countryCode): ?CountryInterface
    {
        return $this->checkCountryExist($countryCode);
    }

    protected function getCountryName(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getName() : null;
    }

    protected function getCountryCode(string $countryName): ?string
    {
        $countries = $this->getCountries();

        $countryCode = array_search($countryName, $countries, true);

        return $countryCode ? (string) $countryCode : null;
    }

    /**
     * @return array<int|string, string>
     */
    protected function getStates(string $countryCode): array
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getStates() : [];
    }

    /**
     * @return array<int|string, string>
     */
    protected function getLanguages(string $countryCode): array
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getLanguages() : [];
    }

    protected function getMainLanguage(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getMainLanguage() : null;
    }

    protected function getContinent(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getContinent() : null;
    }

    protected function getPhoneCode(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getPhoneCode() : null;
    }

    protected function getCurrencyCode(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getCurrencyCode() : null;
    }

    protected function getCapital(string $countryCode): ?string
    {
        $country = $this->getCountryObject($countryCode);

        return $country instanceof CountryInterface ? $country->getCapital() : null;
    }

    private function addCountryClass(): void
    {
        $pathSearch = glob(__DIR__.'/countries/*.php');
        if ($pathSearch) {
            foreach ($pathSearch as $filename) {
                $countryClass = pathinfo($filename, \PATHINFO_FILENAME);

                if (class_exists('ishdidev\country\countries\\'.$countryClass)) {
                    $countryClass = "ishdidev\country\countries\\".$countryClass;
                    $countryObj = new $countryClass();
                    $this->setCountries($countryObj);
                }
            }
        }
    }

    private function setCountries(object $countryObj): void
    {
        if ($countryObj instanceof CountryInterface) {
            $this->countries[$countryObj->getCode()] = $countryObj;
        } else {
            unset($countryObj);
        }
    }
}
