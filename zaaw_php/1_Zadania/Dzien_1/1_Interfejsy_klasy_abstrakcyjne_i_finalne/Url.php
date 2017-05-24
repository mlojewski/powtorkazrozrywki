<?php
interface Url {
public function __construct($url);
public function getParam($name);
}
/**
 *
 */
class StandardUrl implements Url
{
  private $url;
  function __construct($url)
  {
    $this->url = $url;
  }
  public function getParam($name)
  {
    $var1 = parse_url($this->url);
    $query = $var1['query'];
    $result = [];
    parse_str($query, $result);
    echo $result['param1'];
  }
}
$try1 = new StandardUrl('url_example.php?param1=99&param2=strin');
$try1->getParam("url_example.php?param1=99&param2=strin");
