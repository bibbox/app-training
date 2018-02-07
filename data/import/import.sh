#!/bin/bash

source bibbox.cfg

INSTANCE="${INSTANCE:-eb3kitlearning}"

sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" eb3kitlearning.sql.im

f=/docker-entrypoint-initdb.d/eb3kitlearning.sql.im

echo "$0: running $f"; "${mysql[@]}" < "$f"; echo ;;