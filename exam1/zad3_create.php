<?php

if (!isset($_COOKIE['loggedUser'])) {
  setcookie("loggedUser", "jacek", time() + 3600);
}
