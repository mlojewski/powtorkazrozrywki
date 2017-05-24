### Zadania domowe


#### Zadanie 1
W pliku zadanie1.php zaimplementuj funkcję o nazwie **createFile($name, $string)**.
Jej zadaniem będzie zapisanie podanego argumentu **$string** w pliku o nazwie **$name** i rozszerzeniu **txt**. 
Plik należy utworzyć jeśli nie istnieje w katalogu bieżącym.
Jeśli istnieje to należy nadpisać jego zawartość tak aby zawierał jedynie podany **$string**.


#### Zadanie 2
Plik z zadaniem zawiera funkcję **circleArea($radius_1)** zwracającą zaokrągloną do części dziesiątych
liczbę z oznaczającą pole koła o podanym promieniu. 
Należy dopisać regułą sprawdzającą czy **$radius_1** jest większy od zera.
W przypadku niepoprawności wywołujemy wyjątek zawierający jako informację "Liczba niepoprawna".

Następnie w funkcji **handleRequest($radius_2)** należy napisać kod, który pomimo wywołania **circleArea($radius_2)** 
z błędny promieniem obsłuży wyjątek. Obsługa wyjątku polega na tym, iż funkcja zwraca wiadomość pobraną z przechwyconego 
wyjątku i na końcu (po spacji !) dopisuje liczbę **$radius_2** czyli dla przykładu "Liczba niepoprawna -1".

Gdy liczba jest poprawna zwraca wynik obliczenia pole koła.


#### Zadanie 3
Napisz funkcję o nazwie **whatVariable($variable)**, której zadaniem będzie rozpoznanie 
czy podana jako argument zmienna jest poprawnym adresem:
*  email
*  url
*  ip

Jeśli zmienna należy do jednego z powyższych typów funkcja ma wyświetlić string 
z jej nazwą (pisaną małymi literami).

w przeciwnym przypadku ma zwrócić string "Incorrect Input".
Funkcję zapisz w pliku zadanie03.php.


#### Zadanie 4
W pliku z zadaniem znajduje się formularz do wysyłania emalii.
Posiada trzy pola. Pierwsze zawiera adres nadawcy, który ma zostać wykorzystany
w nagłówku email jako adres do odpowiedzi. Drugi z zawiera adres odbiorcy wiadomości, 
natomiast trzeci zawierać treść wiadomości email.
Po wypełnieniu danymi formularz musi umożliwić wysłanie wiadomości na podany adres.
Dopisz kod PHP, który zrealizuje to zadanie nie wykorzystując dodatkowych bibliotek.


#### Zadanie 5
Dopisz działanie funkcji **showProduct($attribute, $path)** zawartej w pliku zadanie05.php.
Zadaniem funkcji, która wykorzystując bibliotekę XMLRead, ma sparsować plik XML
znajdujący się pod podaną ścieżką **$path** jest zwrócenie tablicy.

Tablica ma zawierać jako klucz wartość atrybutu **id** produktu zaś jako wartość klucza, wartość atrybutu dla tego produktu.
W przypadku nie znalezienie w żadnym z węzłów atrybutu o podanej nazwie ma zwrócić pustą tablicę.
