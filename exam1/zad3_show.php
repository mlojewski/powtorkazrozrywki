<?php


if (isset($_COOKIE['loggedUser'])) {
  echo ($_COOKIE['loggedUser']);
}else {
  echo "ciasteczka ni ma";
}
