# PHP Zaawansowane &ndash; zadania
## Interfejsy, klasy abstrakcyjne i finalne


### Zadanie 1 A - do zrobienia z wykładowcą

Stwórz abstrakcyjną klasę **User** mającą:
  1. Atrybuty **username** i **password** (zastanów się, jaki powinny mieć poziom dostępu).
  2. Abstrakcyjną metodę **checkLogin** przyjmującą jako argumenty:
   * login,
   * hasło.
  3. Abstrakcyjną metodę **setLogin** przyjmującą jako argument:
   * login.
  4. Abstrakcyjną metodę: **setPassword**, przyjmującą jako argument:
   * hasło.
  5. Publiczną finalną metodę **login** przyjmującą jako argumenty:
   * **username**,
   * **password**.  
Metoda **login** sprawdza hasło za pomocą metody **checkLogin**.


### Zadanie 1 B

Stwórz dwie klasy **Client** i **Admin** będące rozszerzeniami klasy **User**, w których zaimplementujesz metody abstrakcyjne.

W klasie **Admin** logowanie powinno spełniać następujące wymagania:
  1. Użytkownik podał prawidłowy login.
  2. Hasło miało minimum dziesięć znaków i było prawidłowe (warunek długości hasła sprawdź w metodzie **setPassword**)

W klasie **Client** logowanie powinno wymagać, aby:
  1. Użytkownik podał prawidłowy login.
  2. Hasło miało minimum osiem znaków i było prawidłowe (warunek długości hasła sprawdź w metodzie **setPassword**).

Stwórz obiekty każdej z klas i ustaw loginy oraz hasła. Sprawdź, czy logowanie działa.
Logowanie powinno wymagać prawidłowego hasła i po trzech nieudanych próbach konto powinno być blokowane.

### Zadanie 2

Stwórz klasę **UserSet** reprezentującą zbiór użytkowników klasy **Client**.
Dla nowo stworzonej klasy zaimplementuj metodę **add** przyjmującą jako argument obiekt klasy **Client**.
Zaimplementuj dla tej klasy interfejs **Iterator**, który spowoduje wyświetlenie loginów i haseł kolejnych użytkowników.
Dodaj metodę **checkLogin** przyjmującą jako argument hasło i zwracającą wszystkich użytkowników mogących się zalogować danym hasłem &ndash; wykorzystaj pętlę **foreach**.


### Zadanie 3

Stwórz interfejs o nazwie **Url** służący do parsowania adresu url w celu uzyskania parametrów przekazanych metodą GET.
Interfejs powinien zawierać konstruktor z jednym argumentem $url - adresem do sparsowania oraz metodę publiczną getParam($name),
która w zamierzeniu ma zwrócić wartość parametru o nazwie $name wyciągnięty z $url.

Następnie stwórz klasę **StandardUrl**, w której zaimplementujesz interfejs. 
Jej zadaniem będzie sparsowanie standardowego url np. ``url_example.php?param1=99&param2=string`` w taki sposób żeby za pomocą metody
**getParam($param1)** uzyskać 99 itp.

W momencie gdy klasa będzie działała prawidłowo utwórz plik url_example.php w którym zainkludujesz klasę z interfejsem.
W pliku stwórz instancję obiektu **StandardUrl** przekazując w konstruktorze przykładowego urla (może być jak w przykładzie).
Następnie wyświetl listę z nazwami wszystkich parametrów i ich wartościami.
