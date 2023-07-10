#!/bin/bash

# get voice input from user
cd ~/Desktop/coding_jam_project/
dotnet run

# get the sentiment of the voice input and send it to Edgar's API
python3 send_mood.py

# display the response from Edgar's API by running a php server UI
cd ~/Desktop/coding_jam_project/response/
php -S localhost:8000

