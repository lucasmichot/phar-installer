PHAR installer
==============

Central repository for PHAR packages.

The initial idea of this project came from the following Homebrew-PHP PR :
* https://github.com/Homebrew/homebrew-php/pull/1211
* https://github.com/Homebrew/homebrew-php/pull/1226

Homebrew-PHP is fantastic taps to handle commpiled binaries, but as there is a growing numbers of PHP CLI applciations, the need of simple tool to install versionned PHARs and utilities came.

Usage

Search for PHARs

```sh
pharin search [<phar-name>]
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

Display outdated PHARs versions.

```sh
pharin upgrade <phar-name>
```

Display all available versions for a PHAR.

```sh
pharin versions <phar-name>
```

Go to the homepage of a PHAR.

```sh
pharin home <phar-name>
```

