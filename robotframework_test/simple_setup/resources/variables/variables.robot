*** Variables ***
${website_url}                  https://www.vn88.com/
${username}                     cmsqavnd02
${password}                     cmsqavnd02
${success_message}              All slots game for this provider has been checked. Please check the log.html for more details.
${number_of_games_per_page}     22
${test_browser}                 chrome
${GPI_SLOTS}                    css=li.col-md-3:nth-child(1) > a:nth-child(1) > span:nth-child(1) > img:nth-child(1)
${disabled_paginator}           css=.main-container .main-section .slots-container .pagination .next.disabled .page-link
${next_button}                  css=.main-container .main-section .slots-container .pagination .next .page-link