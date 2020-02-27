


#get a value from an outside variable so you can use it 

*** Settings ***

*** Variable ***
@{NUM}         ${1}    ${2}   ${3}
@{LETTER}      a       b      c

*** Keywords ***
For-in-Zip
    FOR     ${numero}      ${letters}       IN ZIP      ${NUM}      ${LETTER}
        Log To Console                  ${\n}The letter is ${letters} and the number is ${numero}.
    END


*** Test Case ***
Testing
  For-in-Zip