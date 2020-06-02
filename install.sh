#!/bin/bash
apt-get update

if [ -z "$1" ]; then
  echo "Nothing further to do";
  exit;
fi;

PWD=`pwd`
NEXTPWD=$PWD/$1
NEXT=$NEXTPWD/install.sh

if [ -f "$NEXT" ]; then
  INSTALLPWD=$NEXTPWD
  source $NEXT
else 
  echo "$NEXT does not exist"
fi