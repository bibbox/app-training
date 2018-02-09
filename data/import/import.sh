#!/bin/bash
echo "Run BIBBOX config"
source /opt/bibbox.cfg

echo "Update SQL File"
INSTANCE="${INSTANCE:-eb3kitlearning}"
cp /opt/eb3kitlearning.sql /opt/importeb3kitlearning.sql
sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" /opt/importeb3kitlearning.sql

echo "Run Import"
f=/opt/importeb3kitlearning.sql
echo "$0: running $f"; "${mysql[@]}" < "$f"; echo ;;