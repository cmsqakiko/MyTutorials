*** Keywords ***
Show log
  FOR    ${var}    IN RANGE  1     5
    Eval    ${var}
  END

#[Arguments] denotes a variable that can be passed to another keyword
Eval
  [Arguments]        ${varr}
  FOR    ${x}    IN RANGE  1     
    Log To Console    ${\n} The passed number is: ${varr}
  END

*** Test Case ***
Testing
    Show log

