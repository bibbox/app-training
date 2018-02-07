source bibbox.cfg

INSTANCE="${INSTANCE:-eb3kitlearning}"

sed -i "s/eb3kitlearning/${INSTANCE}.${bibboxbaseurl}/g" 02-eb3kitlearning.sql