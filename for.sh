#!/bin/bash

###################################
### Filename: show_user.sh
### Script by Emma Cheney
### Created: 3rd June 2013
### Version 1.0
###################################

clear
echo "number of parameters supplied $#"
echo "list of parameter supplied"

if [ $# -eq 0 ] ; then

echo 'Please enter some parameters'

exit 0

fi  

for (( i = ${#*}; i > 0; i-- ))
{

echo ${!i}

} 
