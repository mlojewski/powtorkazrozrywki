# Podstawy PHP &ndash; egzamin 2

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

### Pytanie 1 (1,5 pkt)  
Jakie znasz relacje w MySQL? Opisz je i podaj przykład, w jakim taka relacja może być użyta.

### Pytanie 2 (2 pkt)  
Jakie są cztery główne założenia programowania obiektowego? Opisz je.

## Zadania praktyczne
Kod wpisz w odpowiednim pliku, zgodnie z poleceniem zadania.  
**BARDZO WAŻNE** - Wasze zadania są sprawdzanie przy pomocy automatycznego systemu. Żeby odpowiedzi zostały uznane za poprawne strony **MUSZĄ** wyświetlać te same komunikaty co w treści zadania, a funkcjie i metody **MUSZĄ** posiadać nazwy dokładnie takie same jak podane w zadaniu.

### Zadanie Przygotowawcze
Wypełnij dane do połączenia z bazą danych wpisując je do odpowiednich zmiennych znajdujących się w pliku `config.php`. W zadaniach wymagających połączenia do bazy danych korzystaj z tych zmiennych (plik `config.php` jest już dołączony do plików odpowiedzi).  
Zaimportuj też dane znajdujące się w pliku `exam.sql` do swojej bazy danych.

**Zanim zaczniesz rozwiązywać zadanie dokładnie przeczytaj całą jego treść**

### Zadanie 1 (5 pkt)  
W bazie danych mamy następujące tablice:
```SQL
* Users: id : int, username : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : real(7,2)
* Orders: id : int, description : text
```
  
Napisz następujące zapytania SQL (zapytania mają być wpisane w odpowiednie zmienne znajdujące się w pliku zad1.php):
  1. (1 ptk) Stworzenie tabelki `Destinations`:
  
    ```SQL
    * Destinations: id : int, user_id : int, address : text, lat : decimal(13,10), long : decimal(13,10)
    ```
    Kolumna `id` ma być kluczem głównym, kolumna `user_id` ma być kluczem zewnętrznym łączącym tabelkę `Destinations` z tabelką `Users` za pomocą relacji wiele do jednego (Użytkownik może mieć wiele destynacji, destynacja może być przypisana tylko do jednego użytkownika). 
  2. (1 ptk) Stworzenie relacji wiele do wielu między tabelami `Items` a `Orders`. Tabelka łącząca ma się nazywac `Items_Orders`.
  3. (0.5 ptk) Dodanie do tabelki `Items_Orders` (stworzonej w punkcie 2) wpisu łączącego zamówienie (tabelka `Orders`) o id 6 z przedmiotem (tabelka `Items`) o id 2.
  4. (0.5 ptk) Wybranie wszystkich przedmiotów o cenie większej niż 50, posortowanych rosnąco po cenie.
  5. (0.5 ptk) Włożenie do tabeli `Orders` nowego zamówienia o opisie "Przykładowy opis 1".
  6. (0.5 ptk) Usuniecie użytkownika o `id` 10.
  7. (0.5 ptk) Wybranie wszystkich użytkowników, którzy maja jakaś wiadomość.

### Zadanie 2 (3 pkt)
W pliku `zad2_receiver.php` napisz kod PHP, który wypisze na stronie wszystkie wiadomości dla użytkownika o `id` przekazanym przez GET (zmienna o nazwie `userId`). Strona powinna spełniać nastepujące wymogi:
  1. (1 ptk) Wiadomości powinny zostać wyświetlone w formacie `<id wiadomości>, <treść waidomości>` po jednej wiadomości w linii. 
  2. (1 ptk) W przypadku w którym użytkownik nie posiada żadnej wiadomości w systemie na stronie powinien pojawić się komunikat `Brak wiadomości dla danego użytkownika`
  3. (0.5 ptk) W pzypadku wejścia na stronę inną metodą niż GET na stronie powinien wyświetlić się komunikat `Proszę wejść na stronę metodą GET`. 
  4. (0.5 ptk) W przypadku wejścia na stronę i nie przesłania id strona powinna wyświetlić komunikat `Brak przesłania wymaganych danych GET`.

W pliku `zad2_sender.html` znajduje się kilka linków które pomogą Ci przetestować twój kod.

**Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.**

### Zadanie 3 (2 pkt)
W pliku `zad3.php` jest formularz służący do dodania nowego przedmiotu do bazy danych. Przeanalizuj go. Następnie w tym samym pliku napisz kod, który:
  1. (1 ptk) W przypadku wejścia na tę stronę metodą POST pobierze informacje przesłane jako: `name`, `description`, `price`. Jeżeli nie zostaną przesłane wszystkie dane to strona powinna wyświetlić komunikat `Brak przesłania wymaganych danych POST`. 
  2. (1 ptk) Wpisze te dane do bazy danych do tabeli `Items`. Po dodaniu przedmiotu powinien wyświetlić komunikat: `Do bazy danych został dodany nowy przedmiot o id <id dodanego przedmiotu>`.

**Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.**

### Zadanie 4 (3 ptk)
W pliku zad4.php znajduje się klasa `MyDate`. Przeanalizuj dokładnie jej kod a następnie:
  1. (1 ptk) Dopisz konstruktor który stworzy obiekt `MyDate` nastawiony na 1 Stycznia roku 2000.
  2. (1 ptk) Dopisz publiczne getery i setery dla atrybutów klasy. Setery nie powinny pozwolić na nastawienie danych znajdujących się poza opisanymi zakresami. W przypadku próby takiego zapisu atrybut klasy nie powinien być zmieniony (do sprawdzenia czy przekazana zmienna jest liczbą całkowitą użyj funkcji `is_integer`).
  3. (1 ptk) Dopisz ciało metody `moveForwardByDay()`. Metoda ta powinna przesuwać datę do przodu o jeden dzień.
  Pamiętaj o zachowaniu poprawnych wartości zarówno dni (nie powinno przekroczyć wartości 31), jak i miesięcy (nie powinno przekrowczyć wartości 12) i lat. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.


### Zadanie 5 (3.5 pkt)
Napisz kod PHP klasy `VIPUser`. Klasa ma spełniać następujące właściwości:
  1. (0.5 ptk) Dziedziczyć po klasie `User` (znajduje się w pliku **User.php**).
  2. (0.5 ptk) Mieć dodatkowy publiczny atrybut: ```vipCardNumber```.
  3. (1 ptk) Mieć konstruktor, który przyjmuje następujące dane: imię, nazwisko, mail, numer karty VIP. Imię, nazwisko i mail mają być przekazywane do konstruktora klasy nadrzędnej. Konstruktor ma sprawdzać, czy podany numer jest prawidłowy (założenia są opisane w punkcie 4). Jeżeli jest  &ndash; to go nastawiać, jeżeli nie  &ndash; to numer ma być nastawiony na ```null```.
  4. (1 ptk) Mieć prywatną metodę ```checkCard($newNumber)``` &ndash; numer jest prawidłowy, jeżeli jest większy niż 999 i podzielny przez 2. Funkcja ma zwracać wartość logiczną.
  5. (0.5 ptk) Mieć publiczne funkcję ```setVipCardNumber($newCardNumber)``` i ```getVipCardNumber()```. Funkcja set ma nastawiać zmienną `vipCardNumber` (jeżeli podany nowy numer spełnia założenia z punktu 4, jeżeli nie to ma zostać poprzednia wartość), a funkcja get &ndash; ją zwracać.

**Nie zmieniaj nic w pliku User.php**

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
