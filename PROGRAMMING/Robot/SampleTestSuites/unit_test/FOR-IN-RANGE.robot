  
  
*** Keywords ***
  
Print Hello World 5x
    FOR    ${var}    IN RANGE  1     5
        Log To Console    Hello World
    END
InRange
    FOR     ${x}        IN RANGE        1       
        Log To Console      ${x}    
    END

*** Test Case ***

Test1
    Print Hello World 5x
  
Test2
    InRange