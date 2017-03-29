#!/bin/bash
cp -rf /root/temp/* /root/octobercms
supervisord -c /etc/supervisor/supervisord.conf
