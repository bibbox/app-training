#!/bin/bash

source bibbox.cfg

INSTANCE="${INSTANCE:-eb3kitlearning}"

sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" /docker-entrypoint-initdb.d/eb3kitlearning.sql

/usr/local/bin/docker-entrypoint.sh