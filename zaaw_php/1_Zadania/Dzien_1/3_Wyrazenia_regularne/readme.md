# Zaawansowane PHP
# Wyrażenia regularne


### Zadanie 1
Napisz funkcje sprawdzającą, czy hasło spełnia wszystkie poniższe wymagania:
  1. Ma od 10 do 15 znaków.
  2. Ma minimum jedną małą literę.
  3. Ma minimum jedną wielką literę.
  4. Nie zawiera dwóch wielkich lub dwóch małych liter z rzędu.

Jeżeli hasło nie spełnia któregoś z wymagań &ndash; funkcja powinna zwrócić **false**.
Napisz formularz, który będzie korzystał z podanej funkcji i walidował hasło.


### Zadanie 2
Napisz funkcję która znajdzie w tekście wszystkie cytaty i zwróci je w postaci tablicy z napisami. 
Dla uproszczenia zakładamy że cytaty są otoczone cudzysłowami. 
Np.:
```
$citeArray = findCitations('To jest jakiś tekst. "To jest cyctat1". To jest dalsza część tekstu. "To jest drugi cyctat".');
```
Powinno zwrócić następującą tablicę:
```
["To jest cyctat1", "To jest drugi cyctat"]
```


### Zadanie 3
Napisz funkcję, która wyczyści z napisu wszystkie znaki specjalne.

Do pomocy w testowaniu wyrażeń regularnych możesz skorzystać z [**regex101**][regex101]


<!-- Links -->
[regex101]: https://regex101.com/
