#!/bin/bash

# get text input from user
cd ~/Desktop/coding_jam_project/text_input/
php -S localhost:8000
python3 ../send_mood.py
# display the response from Edgar's API by running a php server UI
cd ~/Desktop/coding_jam_project/response/
php -S localhost:8000
