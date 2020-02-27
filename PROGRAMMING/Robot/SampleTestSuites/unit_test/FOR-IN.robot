


#       LALAGAY ng Value ang laman ng variable the uutusan kung ano gagawin
#       A basic For Loop in the Robot Framework can be implemented using the format:

#FOR    ${variable}    IN    ${value1}    ${value2}
#    Keyword
#END
*** Variable ***
@{list1}         1
...              2
...              3
...              4
...              5

*** Keywords ***
Show log
  FOR    ${var}    IN   cat     dog
    Log To Console    ${var}
  END

Show log2
  FOR    ${var}    IN     @{list1}
    Log To Console    ${var}
  END

*** Test Case ***
Testing
    Show log

Testing2
    Show log2