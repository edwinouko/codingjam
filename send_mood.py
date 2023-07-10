# this file receives the input from input_mood.js and uses a model to predict the mood of the user then sends it as a json to the server
import openai
import os
import json

openai.api_key = os.getenv("OPENAI_API_KEY")
def main():
    # ensure response.txt is empty
    f = open("response.txt", "w")
    f.write("")
    f.close()
    # read mood.txt
    f = open("mood.txt", "r")
    mood = f.read()
    f.close()
    if not mood:
        return
    content = "Classify the sentiment of this input in one word as either SAD, HAPPY or NEUTRAL: " + mood
    full_query = "curl https://api.openai.com/v1/chat/completions -H \"Content-Type: application/json\" -H \"Authorization: Bearer " + openai.api_key + "\"  -d '{  \
     \"model\": \"gpt-3.5-turbo\", \"messages\": [{\"role\": \"user\", \"content\": \"" + content + "\"}], \"temperature\": 0.7}'"
    
    # send the query to the openai api
    response = os.popen(full_query).read()
    print("response_from_chatgpt3: " + response)
    # convert response json to dictionary
    response = json.loads(response)
    response_text = response["choices"][0]["message"]["content"]
    # API to send get request to the server
    response_api = "https://emotionplushie.azurewebsites.net/api/moodRes?mood=" + response_text.lower()
    response = os.popen("curl " + response_api).read()
    print(response)

if __name__ == "__main__":
    main()