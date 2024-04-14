### Functional Requirements


|Requirement ID: 1 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website shall scrape prices using web scraper|
|Rationale:        | Updating the website manually is not cost or time effective|
|Fit Criterion:    | Website database must be filled with prices from the webscrape|
|Dependencies      | N/A                                    |

|Requirement ID: 2 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Prices that are webscraped shall be stored in a database|
|Rationale:        | To be able to update prices every 24 hours and display them on website|
|Fit Criterion:    | When a product's price changes and the website is updated with the new price|
|Dependencies      | N/A                                    |

|Requirement ID: 3 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website shall display up-to-date prices every 24 hours|
|Rationale:        | Customers must be aware of price per part and total price at all times|
|Fit Criterion:    | Price per part is updated immediately when a user adjusts any dropdown option|
|Dependencies     | 1 and 2                                |

|Requirement ID: 4 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website prompts user to answer a questionaire before continuing to customization|
|Rationale:        | To be able to use AI to generate a custom PC build for the user|
|Fit Criterion:    | Anytime user clicks on "build a PC" the questionaire pops up. |
|Dependencies      | N/A                                       |

|Requirement ID: 5 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website implement AI to generate a custom computer based on users response to questions|
|Rationale:        | Gives users a solid starting point within their budget|
|Fit Criterion:    | All part dropdown bars have a part selected after user finishes the questionaire|
|Dependencies      | 4                                      |

|Requirement ID: 6 |  Priority: Medium                      |
|:-----------------|:---------------------------------------|
|Description:      | Their is an option to skip the questionaire so that users can start from strach to create their own build|
|Rationale:        | It is not necessary to force users to complete the questionaire every time they want to build a PC if they do not want to|
|Fit Criterion:    | Their is an option to skip the questionair everytime the questionaire pops up|
|Dependencies      | 4                                      |

|Requirement ID: 7 |  Priority: Medium                      |
|:-----------------|:---------------------------------------|
|Description:      | Dropdown bar options display price along with product|
|Rationale:        | Users should not have to select the part in order to see the price|
|Fit Criterion:    | Anytime user clicks on dropdown to change option|
|Dependencies      | 13                                      |

|Requirement ID: 8 |  Priority: High                        |
|:-----------------|:---------------------------------------|
|Description:      | Parts that cannot recieve a price from database must display a "Not Available" warning|
|Rationale:        | To avoid users from customizing a PC based around a part that is not available|
|Fit Criterion:    | Dropdown displays "Not Available" when the price field of a part in the database is empty or null|
|Dependencies      | 1 and 2                                |

|Requirement ID: 9 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | PHP code must use post method wherever possible to maintain data security|
|Rationale:        | Post data is not visible in the URL and can be safely encrypted using HTTPS|
|Fit Criterion:    | No sensitive data is every visible in the URL field|
|Dependencies      | N/A                                      |

|Requirement ID: 10 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The webscraper shall webscrape the prices from Amazon|
|Rationale:        | This will allow the customer to have the best chance at a fair price|
|Fit Criterion:    | 5 randomly selected parts will have their cheapest price listed on Amazon, compared to the top 5 other competitive websites, eighty percent of the time|
|Dependencies      | 1                                      |

|Requirement ID: 11 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | At a minimum, the website questionaire shall ask the user their budget, purpose of the computer (work, gaming, etc.), and their favorite activities to do on the computer|
|Rationale:        | These questions will help the AI stay within the budget and recommend a personalized PC |
|Fit Criterion:    | The AI's recommended PC build is within the users budget one-hundred percent of the time|
|Dependencies      | 1, 4, and 5                            |

### Non-Functional Requirements

|Requirement ID: 12 |  Priority: High                    |
|:-----------------|:---------------------------------------|
|Description:      | Website shall maintain a color scheme of green and black|
|Rationale:        | The color scheme will allow users to begin building a relationship with our brand|
|Fit Criterion:    | Previous users of our website can recognize our brand based on our color scheme|
|Dependencies      | N/A                                      |

|Requirement ID: 13 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | All parts are organized by dropdown bars with all possible parts listed in the dropdown options|
|Rationale:        | Allows users to easily view and switch out parts on their PC|
|Fit Criterion:    | A random group of people without previous knowledge of our website can understand how to change the PC parts|
|Dependencies      | N/A                                      |

|Requirement ID: 14 |  Priority: High                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be attractive to a gamer and work-from-home audiences|
|Rationale:        | Persuades new users to come to our website|
|Fit Criterion:    | A mixed group of gamers and people who work from home, without incentive, would begin using the website within five minutes of their first encounter|
|Dependencies      | N/A                                      |

|Requirement ID: 15 |  Priority: Medium                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be easy for anyone 12 and up to use |
|Rationale:        | A large part of our target audience is young children so we need to appeal to them|
|Fit Criterion:    | There is an ninety percent completion rate when a panel of 12-year-old children are tasked with completing their own PC build|
|Dependencies      |                                       |

|Requirement ID: 16 |  Priority: Medium                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall minimize the amount of mistakes made my the user|
|Rationale:        | By minimizing mistakes, we can eliminate the need for a customer support team and reduce number of emails sent to support|
|Fit Criterion:    | One month's use of the website shall result in less than 15 emails sent to support related to website errors|
|Dependencies      | 15                                      |

|Requirement ID: 17 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The website shall send an email receipt upon completion of an order|
|Rationale:        | An email receipt will allow users to have proof of purchase and order confirmation|
|Fit Criterion:    | Anytime an order is completed, an email receipt is sent to the user within 30 minutes|
|Dependencies      | N/A                                    |

|Requirement ID: 18 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be up and running 24 hours every day, all year|
|Rationale:        | We could lose revenue if our website is every down|
|Fit Criterion:    | Over a year long period, the website down time is less than 1% |
|Dependencies      | 18                                     |

|Requirement ID: 19 |  Priority: High                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be able to support up to 75 concurrent users|
|Rationale:        | The website must be able to support multiple users to maintain a one-hundred percent up time|
|Fit Criterion:    | With 75 users on the webiste simultaneously, the website doesn't crash and the response time is less than 5 milliseconds|
|Dependencies      | N/A                                      |

|Requirement ID: 20 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The website shall display the total price of the PC on the right hand side of the screen at all times during the build process|
|Rationale:        | User is aware of their current total price at all times and helps user stay within their budget|
|Fit Criterion:    | Anytime a dropdown is adjusted, the total price is immediately updated within 10 milliseconds|
|Dependencies      | 1, 2, 3, and 13                        |
