<?php

namespace Ten24\UtilitiesBundle\Locale;

class LocaleHelper
{
    /**
     * Get provinces, keyed by abbreviation
     * @return array
     */
    static public function getProvinces()
    {
        return array(
            'AB' => 'Alberta',
            'BC' => 'British Columbia',
            'MB' => 'Manitoba',
            'NB' => 'New Brunswick',
            'NL' => 'Newfoundland and Labrador',
            'NS' => 'Nova Scotia',
            'ON' => 'Ontario',
            'PE' => 'Prince Edward Island',
            'QC' => 'Quebec',
            'SK' => 'Saskatchewan');
    }

    /**
     * Get states, keyed by abbreviation
     * @return array
     */
    static public function getStates()
    {
        return array(

            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming');
    }

    /**
     * Return province abbreviations
     *
     * @return array
     */
    static public function getProvinceAbbreviations()
    {
        return array_keys(static::getProvinces());
    }

    /**
     * Return state abbreviations
     *
     * @return array
     */
    static public function getStateAbbreviations()
    {
        return array_keys(static::getStates());
    }

    /**
     * Return province names
     *
     * @return array
     */
    static public function getProvinceNames()
    {
        return array_values(static::getProvinces());
    }

    /**
     * Return state names
     *
     * @return array
     */
    static public function getStateNames()
    {
        return array_values(static::getStates());
    }

}