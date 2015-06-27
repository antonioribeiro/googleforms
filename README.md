# Post to Google Forms

[![Latest Version](https://img.shields.io/github/release/antonioribeiro/googleforms.svg?style=flat-square)](https://github.com/antonioribeiro/googleforms/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/antonioribeiro/googleforms/master.svg?style=flat-square)](https://travis-ci.org/antonioribeiro/googleforms)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/antonioribeiro/googleforms.svg?style=flat-square)](https://scrutinizer-ci.com/g/antonioribeiro/googleforms/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/antonioribeiro/googleforms.svg?style=flat-square)](https://scrutinizer-ci.com/g/antonioribeiro/googleforms)
[![Total Downloads](https://img.shields.io/packagist/dt/pragmarx/googleforms.svg?style=flat-square)](https://packagist.org/packages/pragmarx/googleforms)

Need to create a form and send data straight to a [Google Forms Spreadsheet](https://www.google.com/forms/about/)? This is your package!

## Install

Via Composer

``` bash
$ composer require pragmarx/googleforms
```

## Usage

``` php
$googleform = new PragmaRX\GoogleForms\Client('12345lvDG6F4ISHQbT4duG2lwl6OAHY');

$data = [
    'entry.386548658' => Input::get('name'),
    'entry.361290697' => Input::get('city'),
    'entry.740093423' => Input::get('school'),
    'entry.1928496279' => Input::get('email'),
    'entry.494802185' => Input::get('phone'),
];

return [
    'success' => $googleForm->post($data)
];
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email acr@antoniocarlosribeiro.com instead of using the issue tracker.

## Credits

- [Antonio Carlos Ribeiro](https://github.com/antonioribeiro)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
