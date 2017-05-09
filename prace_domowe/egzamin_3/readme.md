# Podstawy PHP &ndash; egzamin 3

## Wytyczne

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz egzamin.


**Pamiętaj, że pull request musi być stworzony, aby wykładowca dostał Twoje odpowiedzi**.

Odpowiedzi do zadań 1&ndash;2 wpisz w pliku **zadanie01_02.txt**.
Resztę zadań rozwiąż w odpowiednich plikach **js**.
Nie zmieniaj nic w plikach HTML.

* Podczas egzaminu możesz korzystać z notatek, kodu napisanego wcześniej, internetu i prezentacji.
* Zabroniona jest jakakolwiek komunikacja z innymi kursantami.

## Zadanie 1
(2 pkt)  

Co to jest propagacja eventów? Jakie znasz typy propagacji? Czym się od siebie różnią?


## Zadanie 2
(1 pkt)  

Wytłumacz, dlaczego dobrze jest umieszczać kod JavaScript w następującej funkcji:

  ```javascript
  document.addEventListener('DOMContentLoaded', function() {
    ... //JS code goes here
  }
  ```

Co się może stać, jeśli w powyższej funkcji kodu JavaScript nie umieścimy?


## Zadanie 3
(3 pkt)  

Stwórz klasę **User** w JavaScript, która będzie miała:

1.  Konstruktor przyjmujący parametr imię i zapisujący go w parametrze **name**.

2.  Funkcję dodaną poprzez prototyp o nazwie **welcomeUser**, która zwróci string przywitanie "Welcome " + user.name np. "Welcome piotr" (pamiętajcie o spacji między wyrazami).


## Zadanie 4
(5 pkt)  

 - Nie używaj eventu DOMContentLoaded. Skrypt jest wczytany do pliku html przed końcem body.
 - Do każdego podpunktu stwórz odpowiednią funkcję o nazwie podanej w treści zadania.
 - Każda funkcja niech zwraca tablicę.


 Wykonaj następujące polecenia:

* **1. Szukanie nazw tagów:**
   - znajdź wszystkie elementy o **klasie** ```sample_class```,
   - stwórz funkcję ```getElementsTag(elements)``` do której przekaż , jako argument , znalezione elementy,
   - stwórz w funkcji tablicę i wypełnij ją nazwami tagów. Pobierz je z elementów przekazanych jako argument.
   - zwróć tablicę.


* **2. Szukanie nazw klas:**
  - Znajdź element o **id** ```sample_id```.
  - stwórz funkcję ```getElementsClass(element)``` do której przekaż , jako argument , znaleziony element.
  - stwórz w funkcji tablicę i wypełnij ją nazwami klas. Pobierz klasy z przekazanego jako argument elementu.
  - zwróć tablicę.


* **3. Szukanie tekstu:**
  - Znajdź wszystkie elementy listy znajdujące się w elemencie o **klasie** ```sample_class_2```,
  - stwórz funkcję ```getElementsInnerText(liElements)```, do której przekaż, jako argument, znalezione elementy.
  - stwórz w funkcji tablicę i wypełnij ją tekstami pobranymi z każdego elementu li (tych przekazanych jako argument)
  - zwróć tablicę.


* **4. Szukanie adresów linków:**
  - Znajdź wszystkie linki,
  - stwórz funkcję ```getElementsAdress(aElements)```, do której przekaż, jako argument, znalezione elementy.
  - stwórz w funkcji tablicę i wypełnij ją adresami pobranymi z linków,
  - zwróć tablicę.


* **5. Szukanie tagów dzieci:**
    - Znajdź wszystkie dzieci elementu o **klasie** ```sample_class_3```,
    - do funkcji, która wyszukuje tagi elementów,  przekaż, jako argument, znalezione dzieci.

Korzystaj z JavaScriptu lub jQuery.


## Zadanie 5
(3 pkt)  

Do wszystkich guzików znajdujących się na stronie dopisz event, który po naciśnięciu spowoduje, że na **divie** pokaże się tekst trzymany w `data-text`. Korzystaj z JavaScriptu.


## Zadanie 6

(6 pkt)  

Na stronie znajduje się lista zakupów. Popatrz na HTML i zobacz jak lista jest zbudowana. Dopisz odpowiednią obsługę eventów tak aby:

1. Po kliknięciu przycisku pierwszego do listy został dopisany nowy produkt (np.: chleb).

2. Po kliknięciu przycisku drugiego z listy był usuwany ostatni element.

3. Po kliknięciu przycisku trzeciego na końcu listy był dodawny nowy produkt, który jest klonem drugiego produktu.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
