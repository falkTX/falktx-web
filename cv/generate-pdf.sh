#!/bin/bash

set -e

cd $(dirname $0)

rm -f cv.pdf cv.log cv.aux
touch cv.log
latex2pdf cv.tex 1>/dev/null
rm -f cv.log cv.aux
mv cv.pdf ../files/
