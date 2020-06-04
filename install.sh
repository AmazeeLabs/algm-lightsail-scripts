#!/bin/bash
apt-get update
apt-get install wamerican

mkdir /storage
echo "/dev/xvdf /storage ext4 defaults,discard 0 0" >> /etc/fstab
mount /storage

if [ -z "$1" ]; then
  echo "Nothing further to do";
  exit;
fi;

if [ ! -z "$SLACK_WEBHOOK" ]; then
    echo "$SLACK_WEBHOOK" > /algm/SLACK_WEBHOOK
fi

PWD=`pwd`
NEXTPWD=$PWD/$1
NEXT=$NEXTPWD/install.sh

if [ -f "$NEXT" ]; then
  INSTALLPWD=$NEXTPWD
  source $NEXT
else 
  echo "$NEXT does not exist"
fi
