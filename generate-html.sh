#!/bin/bash

mkdir -p gen

# base
php index.php home 0 > gen/index.html

# pages
PAGES="home myself projects social cv"

for page in $PAGES; do
  echo $page;
  php index.php $page 0 > "gen/$page.html"
done

# anim
php index.php home 1 > "gen/index+a.html"
