#!/bin/bash
echo "Creating s4 posix user "$1
email=$1"@iesmvm.local"
group=$(wbinfo --group-info=$2)
group_id=$(echo $group | cut -d: -f3)

echo "Creating user: "$1
echo "Email address: "$email
echo "Home directory : "$3
echo "Department: "$5
echo "Group id: "$group_id
samba-tool user add $1 $4 --home-directory $3 --mail-address $email --gid-number $group_id --department $5

echo "Adding user to group: "$2
samba-tool group addmembers $2 $1