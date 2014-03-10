#!/bin/bash

# base
php index.php > index.html

# pages
PAGES="home myself projects social cv"

for page in $PAGES; do
  echo $page;
  php index.php $page 0 > "index.php?page=$page"
done

# anim
php index.php home 1 > "index.php?anim=1"
php index.php home 1 > "index.php?page=home&anim=1"
