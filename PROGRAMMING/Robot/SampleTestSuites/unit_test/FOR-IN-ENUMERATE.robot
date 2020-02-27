*** Keywords ***
Show log
  FOR    ${var}   ${upp}  ${low}   IN ENUMERATE
  ...   FOO     foo 
  ...   BAR     bar
  ...   BAZ     baz
    Log To Console    ${\n}"${upp}"'s lowercase version is "${low}"
  END


*** Test Case ***
Testing
    Show log