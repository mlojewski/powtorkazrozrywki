# Podstawy PHP &ndash; egzamin


## Wytyczne

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz egzamin.

**Pamiętaj, że pull request musi być stworzony, aby wykładowca dostał Twoje odpowiedzi**.

* Podczas egzaminu możesz korzystać z notatek, kodu napisanego wcześniej, internetu i prezentacji.
* Zabroniona jest jakakolwiek komunikacja z innymi kursantami.



## Pytania otwarte
Odpowiedzi wpisz w pliku **answers.txt**.

### Pytanie 1 (1 pkt)  
Opisz własnymi słowami, czym różnią się od siebie zmienne lokalne od zmiennych globalnych.

### Pytanie 2 (1 pkt)  
Co to jest zmienna superglobalna? Jakie znasz zmienne superglobalne? Opisz, do czego służą.

### Pytanie 3 (1 pkt)  
Opisz różnicę między:

* (0.5 ptk) ```require``` a ```include```,
* (0.5 ptk) ```require``` a ```require_once```.

## Zadania praktyczne
Kod wpisz w odpowiednim pliku, zgodnie z poleceniem zadania.  
**BARDZO WAŻNE** - Wasze zadania są sprawdzanie przy pomocy automatycznego systemu. Żeby odpowiedzi zostały uznane za poprawne strony **MUSZĄ** wyświetlać te same komunikaty co w treści zadania.

### Zadanie 1 (2 pkt)  
(0.5 ptk) W pliku **zad1_sender.php** znajduje się tablica z danymi. Napisz link który prześle te dane do strony **zad1_receiver.php** metodą GET. Klucze GET powinny być takie same jak klucze w tablicy.  
(1 ptk) W pliku **zad1_receiver.php** napisz kod, który odbierze dane wysłane metodą GET. W przypadku w którym zostały poprawnie przekazane dane o nazwach: `name`, `mail` i `id` powinny one zostać wyświetlone na stronie.  
(0.5 ptk) W pliku **zad1_receiver.php** zabezpiecz kod w taki sposób żeby w przypadku w którym nie zostały przekazane wymagane dane GET (czyli `name`, `mail` i `id`) na stronie wyświetli się napis `Źle przekazane dane GET`.  

### Zadanie 2 (3 pkt)  
W pliku **zad2_form.html** jest napisany formularz do logowania się. Popraw formularz w taki sposób żeby:

* (0.25 ptk) przesyłał dane na stronę **zad2_reciver.php**,  
* (0.25 ptk) przesyłał dane metodą POST.  
**Nie zmieniaj inputów które są w formularzu**

(1 ptk) W pliku **zad2_receiver.php** napisz kod, który odbierze dane wysłane metodą POST. W przypadku w którym zostały poprawnie przekazane dane o nazwach: `mail` i `password` powinny one zostać wyświetlone na stronie.  
(1 ptk) W pliku **zad2_receiver.php** zabezpiecz kod w taki sposób W przypadku w którym nie zostały one przekazane na stronie powinien na stronie pojawić się napis `Źle przekazane dane POST`.  
(0.5 ptk) W przypadku w którym na stronę **zad2_reciver.php** wejdziemy za pomocą innej metody niż POST na stronie powinien wyświetlić się napis `Wymagane dane POST`.  

### Zadanie 3 (3 pkt)  
(1 ptk) W pliku **zad3_create.php** napisz kod, który stworzy ciasteczko o nazwie ```loggedUser``` (tylko gdy ono nie istnieje) i włoży do niego napis "Jacek". Ciasteczko ma żyć przez następne dwa dni. Jeżeli ciasteczko istnieje, to powinien wyświetlić komunikat "Ciasteczko loggedUser istnieje".  
(1 ptk) W pliku **zad3_delete.php** napisz kod, który usunie ciasteczko o nazwie ```loggedUser``` (tylko gdy ono istnieje). Jeżeli ciasteczko nie istnieje, to powinien wyświetlić komunikat "Ciasteczko loggedUser nie istnieje".  
(1 ptk) W pliku **zad3_show.php** napisz kod, który wyświetli zawartość ciasteczka o nazwie ```loggedUser```. Jeżeli ciasteczko nie istnieje, to powinien wyświetlić komunikat "Ciasteczko loggedUser nie istnieje".  

### Zadanie 4 (3 pkt)  
(1 ptk) W pliku **zad4_reset.php** napisz kod, który wstawi do sesji pod klucz ```pageCounter``` wartość ```0```.  
(1 ptk) W pliku **zad4_delete.php** napisz kod, który wyświetli z sesji wartość znajdującą się pod kluczem ```pageCounter``` a następnie usunie ją z sesji. Jeżeli w sesji nie ma podanego klucza strona powinna wyświetlić komunikat `Sesja nie posiada wartości pod kluczem pageCounter`.  
(1 ptk) W pliku **zad4_show.php** napisz kod, który wyświetli z sesji wartość znajdującą się pod kluczem ```pageCounter``` a następnie zwiększy ją o jeden. Jeżeli w sesji nie ma podanego klucza strona powinna wyświetlić komunikat `Sesja nie posiada wartości pod kluczem pageCounter`.  

### Zadanie 5 (1 pkt)  
Napisz funkcję ```computeBankInvestment($amount, $percentage, $years)``` gdzie:

* ```$amount``` to liczba reprezentująca kwotę pieniędzy,
* ```$percentage``` to liczba reprezentująca procent zwrotu po pierwszym roku,
* ```$years``` to liczba lat.

Dla uproszczenia możesz uznać, że wszystkie te zmienne to liczby całkowite.  
Funkcja powinna **zwracać**, ile pieniędzy będziemy mieli na koncie po podanym czasie. Obowiązuje roczna kapitalizacja odsetek.
Np.
```PHP
computeBankInvestment(1000, 5, 1); // => 1050
computeBankInvestment(1000, 5, 2); // => 1102.5
```

### Zadanie 6 (2 pkt)  
Napisz funkcję ```getNextPower($number, $barrier)```, która **zwróci** pierwszy wynik potęgowania liczby ```$number``` większy niż liczba ```$barrier```. Dla uproszczenia możesz uznać, że obie te zmienne to liczby całkowite.  
Na przykład dla argumentów 2 i 7 wynikiem działania funkcji jest 8, ponieważ dwa do potęgi trzeciej jest większe niż siedem.
```PHP
2^1 = 2 // warunek nie jest spełniony
2^2 = 4 // warunek nie jest spełniony
2^3 = 8 // warunek jest spełniony
```
```PHP
findNextPower(2, 7) //=> 8
findNextPower(3, 12385); // => 19683
findNextPower(5, 210345) //=> 390625
```

**Nie używaj funkcji wbudowanej w PHP ```pow(n, m)```.**

### Zadanie 7 (3 pkt)  
Napisz funkcję o nazwie ``` checkIf2DArrayIsRectangle($array) ```, która sprawdzi, czy wszystkie jej rzędy mają taką samą długość. Funkcja powinna **zwracać** wartość booleanowską (```true``` albo ```false```).
Np.
```PHP
$array1 = array (
    array(  1,  2,  3,  4,  5),
    array( 12, 23, 33, 44, 55),
    array(  4,  7,  3,  3,  6),
    array(  1,  5, 43,  7,  6),
    array(124, 97, 83, 33, 16)
); // Wszystkie rzędy mają tę sam długość (pięć elementów)
checkIf2DArrayIsRectangle($array1); // => true


$array2 = array (
    array( 1,  2,  3,  4,  5,  6), // jeden rząd o innej długości
    array(12, 23, 33, 44, 55),
    array( 4,  7,  3,  3,  6)
);
checkIf2DArrayIsRectangle($array2); // => false
```


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
