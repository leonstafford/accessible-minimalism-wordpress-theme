#!/bin/bash

######################################
##
## Build Accessible Minimalism for wp.org
##
## script archive_name dont_minify
##
## places archive in $HOME/Downloads
##
######################################

# check for dependencies
if ! command -v zip > /dev/null
then
    echo "zip not available on your system, please install and retry" >&2
    exit 1
fi

# run script from project root
EXEC_DIR=$(pwd)

TMP_DIR="$HOME/plugintmp"
rm -Rf "$TMP_DIR"
mkdir -p "$TMP_DIR"

rm -Rf "$TMP_DIR/accessible-minimalism-wordpress-theme"
mkdir "$TMP_DIR/accessible-minimalism-wordpress-theme"

# clear dev dependencies
rm -Rf "$EXEC_DIR/vendor/*"
# load prod deps and optimize loader
composer install --quiet --no-dev --optimize-autoloader

# cp all required sources to build dir
cp -r "$EXEC_DIR"/*.php "$TMP_DIR"/accessible-minimalism-wordpress-theme/
cp -r "$EXEC_DIR"/style.css "$TMP_DIR"/accessible-minimalism-wordpress-theme/

cd "$TMP_DIR" || exit

# tidy permissions
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;

zip --quiet -r -9 "./$1.zip" ./accessible-minimalism-wordpress-theme

cd - || exit

mkdir -p "$HOME/Downloads/"

cp "$TMP_DIR/$1.zip" "$HOME/Downloads/"

# reset dev dependencies
cd "$EXEC_DIR" || exit
# clear dev dependencies
rm -Rf "$EXEC_DIR/vendor/*"
# load prod deps
composer install --quiet
