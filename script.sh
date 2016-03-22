#!/bin/bash
COUNTER=0
while [ $COUNTER -lt 10 ]; do
    printf "$COUNTER\n"
    sleep 1
    let COUNTER=COUNTER+1
done
exit