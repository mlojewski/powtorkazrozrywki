<img alt="Logo" src="http://coderslab.pl/wp-content/themes/coderslab/svg/logo-coderslab.svg" width="400">

# Zaawansowane PHP - Snippety
> Krótkie kawałki kodu, które pokazują zależności, rozwiązują popularne problemy oraz pokazują jak używać niektórych funkcji.


#### 1. Jaka jest różnica między klasą abstrakcyjną a interfejsem ?

Oprócz tej najbardziej oczywistej różnicy polegającej na tym, że klasa abstrakcyjna może zawierać kod a interfejs już nie istnieją jeszcze
inne wymienione poniżej:
* klasa może implementować wiele interfejsów a rozszerzać tylko jedną klasę
* wszystkie metody w interfejsie są publiczne, w klasie abstrakcyjnej mogą być również chronione
* klasy abstrakcyjne mogą zawierać atrybuty a interfejsy nie mają takiej możliwości

Ostatecznie jest jeszcze dobra praktyka, która mówi o stosowaniu klas abstrakcyjnych w przypadku gdy inne klasy, które będą dziedziczyły po niej, 
są ze sobą ściśle powiązane i wspólnie realizują konkretną funkcjonalność. Interfejsy luźniej traktują przeznaczenie klas je implementujących.


#### 2. Czy można umieścić klasy, które późnie będą automatycznie ładowane w różne katalogi ?

Tak tylko zamiast metody __autoload musimy użyć nowszej spl_autoload_register. 
Przykład użycia poniżej.

```PHP
function classLoader($classname){
    $file = $DOCUMENT_ROOT.'/class/'.$classname.'.class.php';
    if (file_exists($file) && is_readable($file) && !class_exists($classname, false)){
        require_once($file);
    }else{
        throw new Exception('Class cannot be found ( ' . $classname . ' )');
    }
}

spl_autoload_register('classLoader');
```

#### Najcześćiej używane funkcje na stringach wraz z przykładami.

**strlen** - zwraca długość stringu
```PHP
$str = 'abcdef';
echo strlen($str); // 6
```

**trim** - usuwa białe znaki
```PHP
$text   = "\t\tThese are a few words :) ...  ";
var_dump($text); \\ string(32) "        These are a few words :) ...  "
var_dump( trim($text) ); \\ string(32) "These are a few words :) ..."
```

**str_replace** - zamienia wyraz w szukanym zdaniu na inny podany w parametrze
```PHP
$bodytag = str_replace("body", "main", "<body class='main'>");
```

**strpos** - zwraca pozycję wystąpienia szukanego znaku w stringu. 
             Używając ten metody w instrukcji warunkowej if należy uważać gdyż pozycja 0 może zostać zinterpretowana jako false.
```PHP
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme); // $pos = 0

//Poprawne użycie w instrukcji warunkowej if
if ($pos !== false) {
     echo "The string '$findme' was found in the string '$mystring'";
} else {
     echo "The string '$findme' was not found in the string '$mystring'";
}
```

**addslashes** oraz **stripslashes** - dodaje/usuwa ukośniki przed wymagającymi tego zabiegu znakami specjalnymi
```PHP
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);

// Outputs: Is your name O'reilly?
echo stripslashes($str);
```

**parse_str** - zamienia podany string na tablicę z wartościami
```PHP
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first;  // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz
```


#### Podstawowe znaczenie wyrażeń regularnych

|      Wyrażenie      |                        Znaczenie                       |
|:-------------------:|:------------------------------------------------------:|
|         foo         |                      string "foo"                      |
|         ^foo        |                "foo" na początku strniga               |
|        ^foo$        |              "foo" zajmuje całość stringa              |
|        [abc]        |                       a, b, lub c                      |
|        [a-z]        |                    każda mała litera                   |
|        [^A-Z]       |            każda litera, która nie jest duża           |
|      (gif|jpg)      |                    "gif" lub "jpeg"                    |
|        [a-z]+       |              jedna lub więcej mała litera              |
|      [0-9\.\-]      |           każda cyfra, kropka lub znak minus           |
|  ^[a-zA-Z0-9]{1,}$  | każdy wyraz, który ma minimum jedną  literę lub liczbę |
|     ([wx])([yz])    |                   wy, wz, xy, lub xz                   |
|     [^A-Za-z0-9]    |         każdy symbol z wyłączeniem liter i cyfr        |
| ([A-Z]{3}|[0-9]{4}) |              trzy litery lub cztery cyfry              |

#### Przydatne sposoby zastosowania HEADER w skryptach

* Czyszczenie Cache przeglądarki
```HTML
header("Cache-Control: no-cache, mustrevalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header('Pragma: no-cache');
```

* Przekierowanie na inny adres
```HTML
header("Location: http://www.example.com/");
```

* Zmiana kodu odpowiedzi serwera - przydatna m.in w momencie przebudowy aplikacji
```HTML
header('HTTP/1.1 404 Not Found');
header('HTTP/1.1 403 Forbidden');
header('HTTP/1.1 301 Moved Permanently');
header('HTTP/1.1 500 Internal Server Error');
```


#### Zapis i odczyt pliku

Do tego celu służą dwie funkcje:

Odczyt
```PHP
$file = file_get_contents('people.txt');
```
Zapis
```PHP
file_put_contents($file, $txt);
```

#### Parsowanie XML

Do parsowania pliku XML użyteczne są dwie metody:

```PHP
$products = simplexml_load_file('products.xml');
```
Wczytuje od razu cały plik a następnie możemy dostać się do odpowiednich węzłów.

```PHP
$products = new XMLReader();
$products->xml($xml);
```
Wczytuje dokument węzeł po węźle.