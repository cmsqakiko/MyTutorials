*** Keywords ***
InRange
    FOR     ${x}        IN RANGE        5
        Log To Console      ${x}
    END

*** Test Case ***
Testing
  InRange
