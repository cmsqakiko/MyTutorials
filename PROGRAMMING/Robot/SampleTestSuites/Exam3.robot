*** Variable ****

@{list1}         a
...              b
...              c
...              d
...              e

@{list1}         1
...              2
...              3
...              4
...              5

*** Keywords ***
Show log
  FOR    ${var} IN      @{list1}     @{list2}
    Log To Console   ${\n} ${var} 
  END

*** Test Case ***
Testing
    Show log

    