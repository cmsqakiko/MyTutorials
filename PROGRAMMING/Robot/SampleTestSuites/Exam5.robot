
*** Keywords ***
Show log
    FOR    ${var}   ${Eng}  ${Opp}   IN ENUMERATE
  ...   ONE         ENO 
  ...   TWO         OWT
  ...   THREE       EERHT
    Log To Console    ${\n} Eng: ${Eng.lower()} ${\n} Opposit: ${Opp.upper()}
    END

*** Test Case ***
Testing
    Show log
    

    