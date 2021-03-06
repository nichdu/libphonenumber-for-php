<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[1-37-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[1-37-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[1-37-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '116\\d{3}',
    'PossibleNumberPattern' => '\\d{6}',
    'ExampleNumber' => '116000',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          11811[89]|
          72\\d{3}
        ',
    'PossibleNumberPattern' => '\\d{5,6}',
    'ExampleNumber' => '118118',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => '
          112|
          90000
        ',
    'PossibleNumberPattern' => '\\d{3,5}',
    'ExampleNumber' => '112',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          11(?:
            [25]|
            313|
            4\\d{2}|
            6(?:
              00[06]|
              11[17]|
              123
            )|
            7[0-8]|
            8(?:
              1(?:
                [02-9]\\d|
                1[013-9]
              )|
              [02-46-9]\\d{2}
            )
          )|
          2(?:
            2[02358]|
            33|
            4[01]|
            50|
            6[1-4]
          )|
          32[13]|
          7\\d{4}|
          8(?:
            22|
            88
          )|
          9(?:
            0(?:
              000|
              1(?:
                [02-9]\\d|
                1[013-9]
              )|
              [2-4]\\d{2}|
              510
            )|
            12
          )
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '11313',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => '
          2(?:
            2[02358]|
            33|
            4[01]|
            50|
            6[1-4]
          )|
          32[13]|
          8(?:
            22|
            88
          )|
          912
        ',
    'PossibleNumberPattern' => '\\d{3}',
    'ExampleNumber' => '222',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'SE',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
/* EOF */