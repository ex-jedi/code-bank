# Phone template filter

This is a Perch template filter for formatting phone numbers. The phone filter uses [libphonenumber-for-php](https://github.com/giggsey/libphonenumber-for-php), a library based on Google's [libphonenumber](https://github.com/googlei18n/libphonenumber), for formatting and validating phone numbers.


## installation
- Download the latest version
- Place the `pipit_phone` directory in the folder `perch/addons/templates/filters/`
- Include the class in the file `perch/addons/templates/filters.php`:

```php
include('filters/pipit_phone/PipitTemplateFilter_phone.class.php');
```


## Configuration

### Enable template filters

You need to enable template filters in your config file `perch/config/config.php`:

```php
define('PERCH_TEMPLATE_FILTERS', true);
```

### Set a default country [optional]

You can set a default country to format the numbers to its standards:

```php
define('PIPIT_PHONE_COUNTRY', 'GB');
```



## Usage

```html
<a href="<perch:content id="phone_number" filter="phone" country="gb" output="tel_link">" >
    <perch:content id="phone_number" filter="phone" country="gb" output="international">
</a>
```


If you have defined a default country `PIPIT_PHONE_COUNTRY` in your Perch configuration, you can omit the `country` attribute:


```html
<a href="<perch:content id="phone_number" filter="phone" output="tel_link">" >
    <perch:content id="phone_number" filter="phone" output="international">
</a>
```


## Tag Attributes

| Attribute  | Description                     |
|------------|---------------------------------|
| country    | The country of the phone number. Takes a two-letter country code [ISO 3166](https://www.iso.org/iso-3166-country-codes.html) |
| output     | The formatting option to be used to output the phone number. See table below. |

### Output options

| Option           | Description                                                               |
|------------------|---------------------------------------------------------------------------|
| international    |  International formatting of the phone number                             |
| national         |  Nationaly formatting of the phone number                                 |
| tel_link         |  The phone number formatted for tel URI - RFC3966 (prefixed with `tel:`)  |