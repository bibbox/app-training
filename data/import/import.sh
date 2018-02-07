#!/bin/bash

source bibbox.cfg

INSTANCE="${INSTANCE:-eb3kitlearning}"

sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" /opt/eb3kitlearning.sql

f=/opt/eb3kitlearning.sql

echo "$0: running $f"; "${mysql[@]}" < "$f"; echo ;;