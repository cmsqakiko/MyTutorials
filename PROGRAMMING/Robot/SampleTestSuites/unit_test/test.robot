*** Settings ***
# Settings here.
*** Variables ***
# Declare your variables here.
*** Keywords ***
# Create your custom keywords here.
*** Test Cases***
# Implement your test cases here.


*** Settings ***
Library                                  SampleLibrary
Resource                                 resource.robot
Default Tags                             sample-test-tag
Variables                                resource-variables.yaml
*** Variables***
${element}                              Hello World!
${var}                                 2

*** Keywords***
Print Hello World
    Log To Console                     Hello World!


*** Test Cases***
This test should print out Hello World
    Print Hello World

Second Attempt
    Log To Console                      First Test

    Log To Console                      ${var}