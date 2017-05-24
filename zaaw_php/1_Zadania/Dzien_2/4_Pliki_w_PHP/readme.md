# Zaawansowane PHP
## Pliki PHP


### Zadanie 1
Stwórz formularz, który umożliwi upload pliku graficznego (przykładowe pliki znajdziesz w katalogu **images**) i zapisze ten plik w katalogu wybranym według algorytmu:
  1. Z nazwy pliku stwórz MD5 Hash.
  2. Na podstawie bieżącej daty wybierz podkatalog, jeżeli nie istnieje &ndash; stwórz go,
  3. Na postawie dwóch pierwszych znaków wybierz podkatalog w tym podkatalogu, jeżeli nie istnieje &ndash; stwórz go,
  4. Na postawie dwóch ostatnich znaków wybierz podkatalog w tym podkatalogu, jeżeli nie istnieje &ndash; stwórz go,
  5. Zapisz plik w ostatnim podkatalogu.

Przykładowa struktura katalogu: ```2016-01-03/ad/4a/coderslab_image.jpg```

Stwórz skrypt ```showImage.php```, który umożliwi wyświetlenie tego pliku, ale nie za pomocą HTML i tagu IMG. Poszukaj podpowiedzi w Google.

### Zadanie 2
Stwórz mechanizm czyszczenia plików w podkatalogach. Pliki starsze niż zadana liczba sekund powinny zostać usunięte.
