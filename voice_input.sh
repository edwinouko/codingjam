#!/bin/bash

# get voice input from user
cd ~/Desktop/CODING_JAM_PROJECT
dotnet run

# get the sentiment of the voice input and send it to Edgar's API
python3 send_mood.py

# display the response from Edgar's API by running a php server UI
cd ~/Desktop/CODING_JAM_PROJECT/response/
php -S localhost:8000

