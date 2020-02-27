*** Variable ****

@{list1}         a
...              b
...              c
...              d
...              e


*** Keywords ***
Show log
  FOR    ${var}    IN     @{list1}
    Log To Console   ${\n} ${list1} 
  END

*** Test Case ***
Testing
    Show log

    