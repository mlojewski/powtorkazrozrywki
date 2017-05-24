### Zadania domowe

#### Zdanie 1
Zapisz poszczególne klasy, które utworzyłeś w zadaniu 1 ( **1_Interfejsy_klasy_abstrakcyjne_i_finalne** ) 
rozwiązywanych podczas zajęć w różnych plikach o nazwie odpowiadającej nazwie klasy.
Wykorzystaj mechanizm autoload do ładowania tych klas w pliku zadanie01.php.
Dwie metody w nim zawarte powinny zwrócić instancje obiektów załadowanych automatycznie.


#### Zadanie 2
Zaimplementuj w klasie Enigma metodę **getCode(String $code)**, która zwróci zmodyfikowany
string **$code**. Modyfikacja polega na przesunięciu każdej z liter o 4 pozycje w alfabecie.
W pliku zadanie2.php jest utworzona klasa oraz tablica z alfabetem.
W przypadku ostatnich liter alfabetu odliczanie należy kontynuować od początku tablicy.


#### Zadanie 3
W pliku zadanie3.php znajduje się klasa **Password** z jedną publiczną statyczną metodą **checkComplexity($pass)**.
Metoda przyjmuje jako argument stringa i sprawdza jego złożoność.
Zwraca true jeśli string jest długości minimum 6 liter lub cyfr, zawiera minimum jedną wielką literę i minimum
jedną cyfrę. W przeciwnym przypadku zwraca false.

Do pomocy w testowaniu wyrażeń regularnych możesz skorzystać z [**regex101**][regex101]


### Zadanie 4

Korzystając z interfejsu napisanego w zadaniu 3 podczas zajęć (dokończ go samodzielnie jeśli nie udało się to w czasie zajęć)
dopisz nową klasę **ExtendedUrl**. Klasa ta ma zaimplementować interfejs oraz prawidłowo sparsować niestandardowy adresu
url np. **url_example.php/param1.99/param2.string** .
W utworzonym pliku url_example.php zainkluduj nową klasę, podmień instancje obiektu i przekazany do konstruktora url na ten nowy.

Czy lista parametrów i wartości wyświetlają się prawidłowo pomimo zmiany typu obiektu ?

<!-- Links -->
[regex101]: https://regex101.com/
