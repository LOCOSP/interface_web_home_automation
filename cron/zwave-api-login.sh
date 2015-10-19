#!/bin/bash

source /var/www/html/interface/cron/zwave-api-login.conf

/usr/bin/curl \
  -i \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -X POST \
  -d "{\"form\": true, \"login\": \"${ZWAVE_API_LOGIN}\", \"password\": \"${ZWAVE_API_PASSWORD}\", \"keepme\": false, \"default_ui\": 1}" \
  ${ZWAVE_API_HOST}:${ZWAVE_API_PORT}/ZAutomation/api/v1/login \
  -c ${DATA_DIR}/cookie.txt
