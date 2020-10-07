# Simulateur de loi Pinel

Development of a simulator of loi Pinel.

[![Build Status](https://travis-ci.com/ThomasCms/orleans-0918-php-loipinel.png)](https://travis-ci.com/ThomasCms/orleans-0918-php-loipinel)

## Pedagogical objective

Client project, carried out for the company Projet I/O, in order to put into practice the different concepts seen during
the 3rd month of training at the Wild Code School:
* Symfony 4, Doctrine 2 et Twig
* Development of advanced functionalities : authentication, user roles, files import, pdf export
* Methodology Scrum / Agile

* Duration of the project : 8 weeks

**Setup on ubuntu :**
* 1) create a .env.local file, then copy .env content and paste it in .env.local. Set your database login iformations
* 2) run 'composer install'
* 3) run 'yarn install'
* 4) run 'bin/console d:d:c'
* 5) run 'bin/console d:migration:migrate'
* 6) IF YOU ARE IN DEV ENVIRONNMENT run 'bin/console d:f:l' this will create you users, you can check emails and password to login with those users in /src/DataFixtures/UserFixtures from line 19
* 7) run 'yarn encore dev' OR 'yarn encore production' if you are in production environnment
* 8) run (sudo) 'apt-get install xvfb -y'
* 9) run (sudo) 'apt-get install libqt5webkit5 -y'
* 10) run (sudo) 'apt-get install libqt5svg5 -y'
* 11) enjoy !  

**THIS PROJECT IS NOT UP TO DATE AND CONTAINS VULNERABILITIES**

### Langages
* HTML 5
* CSS 3
* JavaScript
* PHP 7

### Frameworks
* Bootstrap 4
* Symfony 4 (Doctrine 2 + Twig)

### Méthodologie
* Scrum / Agile

### Versioning
* Git / Git Workflow

### Tools
* PhpStorm
* Travis CI

### Contributors

* Anthony Jonas - [accuratecopy](https://github.com/accuratecopy)
* Jovanéla Daribo - [carly97232](https://github.com/carly97232)
* Christophe Lesieur - [chrlesieur](https://github.com/chrlesieur)
* Rémy Ducry - [GamerPsy](https://github.com/GamerPsy)
* Thomas Coumes - [ThomasCms](https://github.com/ThomasCms)
