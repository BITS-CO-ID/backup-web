#!/bin/bash

cd ~

# Backup SQL Database
echo -ne "\r Backup Database \r"
db="database-$(date +"%Y-%m-%d").sql.gz" 
mysqldump --user=root --password=suck-IT26 --host=localhost \
    --all-databases | gzip >$db
echo -en "\r Selesai Membuat Arsip Database..."

