# Arduino-SmartCitizen
A custom web interface to store data from Arduino Smartcitizen on a local server in a csv file

The code is an extract from the repo provided by SmartCitizen at https://github.com/fablabbcn/Smart-Citizen-Kit

Few minor fixes to make it work on the a local Apache server. Tested on Ubuntu and Windows 10.

If the Apache server is on Windows, you need to make a small adjustment to the Constants.h file and add \r (carriage return) before all the \n (new line).


```
static char* WEB[7] = {
  "local ip address",
  "PUT /add.php HTTP/1.1",
  "\r\nHost: 10.131.214.126",
  "\r\nUser-Agent: SmartCitizen",
  "\r\nX-SmartCitizenMacADDR: ",
  //"X-SmartCitizenApiKey: ",
  "\r\nX-SmartCitizenVersion: ",
  "\r\nX-SmartCitizenData: "
};
```

PS : As we are doing a manual GET/PUT the interpretation of these on a Windows Apache server is different compared to Ubuntu and hence the need to add \r.

Updated add.php to save data to multiple csv files based on the User-Agent parameter sent from the board.
