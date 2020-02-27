*** Setting ***
Documentation                                           Running Test on VN88.com
Library                                                 Selenium2Library

Suite Setup                                             Open Home Page
Suite Teardown                                          Close All Browsers


*** Variables ***

${website_url}                  https://www.vn88.com/
${username}                     cmsqavnd02
${password}                     cmsqavnd02
${success_message}              All slots game for this provider has been checked. Please check the log.html for more details.
${number_of_games_per_page}     22
${test_browser}                 chrome
${GPI_SLOTS}                    css=li.col-md-3:nth-child(1) > a:nth-child(1) > span:nth-child(1) > img:nth-child(1)
${disabled_paginator}           css=.main-container .main-section .slots-container .pagination .next.disabled .page-link
${next_button}

*** Keywords ***

Open Home Page
    [Tags]  Open Home Page
    Open Browser                                        ${website_url}      ${test_browser}


Buffer Page
    Sleep                                               00:08

Submit Valid Credentials    
    Input text                                          username            ${username}
    Input password                                      password            ${password}
    Click element                                       css=.form-inline > div:nth-child(3) > button:nth-child(1)

Wait success login
    wait until page contains                            ${username}
    
Check Slots GP
    click link                                          /slots
    Sleep                                               00:02

Check Slots Page
    Sleep                                               00:02
    click element                                       ${GPI_SLOTS}
    Sleep                                               00:05

Game Launcher
    [Tags]    gameTests
    : FOR   ${INDEX}                                    IN RANGE    1    ${number_of_games_per_page}
    \       ${does_not_contain}=                        Run Keyword And Return Status    Page Should Contain Element    css=div.col-md-i7:nth-child(${INDEX}) > div:nth-child(1) > div:nth-child(3) > a:nth-child(1) 
    \       Run Keyword Unless                          ${does_not_contain}    Exit For Loop
    \       click element                               css=div.col-md-i7:nth-child(${INDEX}) > div:nth-child(1) > div:nth-child(3) > a:nth-child(1) 
    \       Select Window                               NEW
    \       Log Title
    \       close Window
    \       Select Window                               MAIN
    Log to console                                      Page contains ${INDEX} games.....

Paginator
    : FOR   ${index1}                                   IN RANGE    1   100
    \   ${passed}=                                      Run Keyword And Return Status    Page should contain element    ${disabled_paginator}
    \   Exit For Loop If                                ${passed}==True
    \   Click Element                                   ${next_button}
    \   sleep                                           00:07
    \   Game Launcher

Execute Game Test
    Game Launcher
    Paginator

Execute User Log-out
    click link                                          /logout
    wait until page contains element                    username
    

*** Test Cases ***

Load Page
    Maximize Browser Window
    Buffer Page

Check Login
    Submit Valid Credentials

Check succesful login redirect
    Wait success login

Check Slots Page
    Check Slots GP
    Check Slots Page
    Execute Game Test
    Log to console                                      ${success_message}

Check Successful logout
    Execute User Log-out

