#!/bin/bash

# Direktori Log
cd /var/log

# Log Rotate
logrotate --force /etc/logrotate.conf

# Hapus Log
find /var/log/ -name '*[0-5]*' -exec rm {} \;

# Pesan
echo -en "\r File Log Berhasil Dihapus \r"
echo -en "\r Terimakasih sudah menggunakan Script Auto Clean Log BITS.CO.ID \r"
