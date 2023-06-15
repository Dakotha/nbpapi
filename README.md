# Zadanie rekrutacyjne

## Opis zadania
            
Zadaniem jest napisanie aplikacji w czystym PHP (bez użycia frameworków), która będzie korzystać z API NBP (Narodowy Bank Polski) do pobierania kursów walut. Aplikacja powinna umożliwiać zapisywanie pobranych kursów walut do bazy danych oraz wyświetlanie ich w formie tabeli. Dodatkowo, aplikacja powinna umożliwiać przewalutowanie danej kwoty z wybranej waluty na inną i zapisywanie wyników przewalutowań do bazy danych.

API NBP: [http://api.nbp.pl](http://api.nbp.pl)

## Podczas oceny rozwiązania pod uwagę były brane:

* Poprawność działania aplikacji
* Jakość kodu (czytelność, organizacja, nazewnictwo zmiennych, komentarze itp.)
* Wykorzystanie obiektowego podejścia w czystym PHP
*  Estetykę pracy i kodu
* Poprawność integracji z API NBP i bazą danych
* Zgodność z wymaganiami

## Jak uruchomić projekt?

Zmień nazwę pliku **config.example.php** na **config.php** i dodaj w nim dane związane z Twoją bazą danych.

W swojej bazie danych musisz utworzyć dwie tabele:
* currencies (tabele możesz utworzyć poniższym kodem)
```
CREATE TABLE
  `currencies` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `table` varchar(1) NOT NULL,
    `no` varchar(255) NOT NULL,
    `date` varchar(255) NOT NULL,
    `currency` varchar(255) NOT NULL,
    `code` varchar(255) NOT NULL,
    `mid` float NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 34 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_bin
```  
* converts (tabele możesz utworzyć poniższym kodem)
```
CREATE TABLE
  `converts` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `date` timestamp NOT NULL DEFAULT current_timestamp(),
    `amount` float NOT NULL,
    `from` varchar(255) NOT NULL,
    `to` varchar(255) NOT NULL,
    `convert` float NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE = InnoDB AUTO_INCREMENT = 7 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_bin
```
