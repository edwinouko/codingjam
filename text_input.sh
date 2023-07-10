#!/bin/bash

# get text input from user
cd ~/Desktop/CODING_JAM_PROJECT
php -S localhost:9000

# display the response from Edgar's API by running a php server UI
cd ~/Desktop/CODING_JAM_PROJECT/response/
php -S localhost:8000
