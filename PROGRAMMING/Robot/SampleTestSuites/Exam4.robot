##    USING NESTED LOOPS    

*** Variable ***
@{list1}         Display
...              this
...              Output
...              - - - - -



*** Keywords ***
Show log
  FOR    ${var}    IN RANGE  1     3
    eva    ${var}
  END

eva
  [Arguments]     ${varr}
  FOR    ${var1}    IN     @{list1}
    Log To Console    ${\n}${var1}
  END


*** Test Case ***
Testing
    Show log