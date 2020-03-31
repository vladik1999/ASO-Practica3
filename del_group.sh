#!/bin/bash
sudo samba-tool group delete $1
sleep 2
echo $1" deteled"