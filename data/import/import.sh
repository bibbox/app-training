#!/bin/bash
echo "Run BIBBOX config"
cp /opt/bibbox.cfg /tmp/runbibbox.cfg
source /tmp/runbibbox.cfg

echo "Update SQL File"
INSTANCE="${INSTANCE:-eb3kitlearning}"
f=/tmp/importeb3kitlearning.sql
cp /opt/eb3kitlearning.sql $f
sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" $f

echo "Run Import"
echo "$0: running $f"; "${mysql[@]}" < "$f"; echo ;