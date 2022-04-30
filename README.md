# Azure AD

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
[![Latest Version](https://img.shields.io/github/release/victorap93/azuread.svg?style=flat-square)](https://github.com/victorap93/azuread/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/victorap93/azuread.svg?style=flat-square)](https://packagist.org/packages/victorap93/azuread)

Azure AD is an easy way to use Azure AD 2.0 Protocols to get authorization token


## Installation

The recommended way to install this is through
[Composer](https://getcomposer.org/).

```bash
composer require victorap93/azuread
```

## How to use

### Get the nedded parameters:

Read this [step](https://docs.microsoft.com/pt-br/azure/active-directory/develop/v2-oauth2-auth-code-flow#request-an-access-token-with-a-client_secret) to know how to get neded params.


### Get Token by using Microsoft **client secret**:

```php
require_once "./vendor/autoload.php";

use \victorap93\AzureAD;

$tenantId = "";
$clientId = "";
$scope = "https://graph.microsoft.com/.default";
$clientSecret = "";

$AzureAD = new AzureAD;
$azure_token = $AzureAD->getMSTokenBySecret($tenantId, $clientId, $scope, $clientSecret);
echo $azure_token->access_token;
```


### Get Token by using Miscrosoft **username** and **password**:

```php
require_once "./vendor/autoload.php";

use \victorap93\AzureAD;

$tenantId = "";
$clientId = "";
$scope = "https://graph.microsoft.com/.default";
$username = "";
$password = "";

$AzureAD = new AzureAD;
$azure_token = $AzureAD->getMSTokenByCredentials($tenantId, $clientId, $scope, $username, $password);
echo $azure_token->access_token;
```


## Help and docs

- [Application types for the Microsoft identity platform](https://docs.microsoft.com/pt-br/azure/active-directory/develop/v2-app-types)


## License

Azure AD is made available under the MIT License (MIT). Please see [License File](LICENSE) for more information.
