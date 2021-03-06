# PHAR installer

## ** Still in early development ** 
do not use or install at the moment

Central repository for PHAR packages.

The initial idea of this project came from the following Homebrew-PHP PR :
* https://github.com/Homebrew/homebrew-php/pull/1211
* https://github.com/Homebrew/homebrew-php/pull/1226

Homebrew-PHP is fantastic taps to handle commpiled binaries, but as there is a growing numbers of PHP CLI applciations, the need of simple tool to install versionned PHARs and utilities came.

## Table of contents

* [Installation](#installation)
* [Usage](#usage)
* [Referencing PHARs](#referencing-phars)

## Installation

Installation can be achieved many ways:

Download and install `pahrin.phar`

```sh
curl -sS http://<domain>/installer | php
mv pharin.phar /usr/local/bin/pharin
```

Install via Homebrew

```sh
brew update
brew install php/pharin
```

## Usage

Update the list of available PHARs

```sh
pharin update
```

Search for PHARs

```sh
pharin search [<phar-name>]
```

Update pharin itself

```sh
pharin self-update
```

List installed PHARs

```sh
pharin list [<phar-name>]
```

Install a PHAR, use latest stable version, or a specific one with `--version` argument.

```sh
pharin install <phar-name> [--version=<version>]
```

Remove all versions of a PHAR, or only a specific one with `--version` argument.

```sh
pharin remove <phar-name> [--version=<version>]
```

Upgrade a PHARs to their latest stable versions.

```sh
pharin upgrade <phar-name>
```

Display outdated PHARs.

```sh
pharin outdated <phar-name>
```

Display all available versions for a PHAR.

```sh
pharin versions <phar-name>
```

Go to the homepage of a PHAR.

```sh
pharin home <phar-name>
```

## Referencing PHARs

PHAR referencing can be achieved in two different ways.
* You can create a pull-request with details informations about the PHAR, the name, the URL, and add entries for each versions
* You can also provide a minimum JSON file including only the name an the website. `pharin` will then check `http://exemple.com/pharin.json` that will contains the full details of PHAR versions.
* If the URL points to a Github repository, `pharin` will try to load `pharin.json`file at the root of the `master` branch.
