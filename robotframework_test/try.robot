*** Settings ***
Library Selenium2Library
Suite Setup Open Browser
Suite Teardown Close All Browser

*** Variable ***
${Browser}    chome   		
${Homepage}    https://www.google.com


*** Test Case***
Browser Will Open Now
	Google and check results  devops  newrelic.com


*** Element ***


*** Keywords ***
Google and check results
	[Arguments]  ${searchkey}  ${result}
	Input Text id=A8SBwf  ${searchkey}
	Click Button  id=FAuhyb
	Waint Until Page Contains  ${resul}
	
Go to homepage
	Open Browser  ${Homepage}  #{Browser}