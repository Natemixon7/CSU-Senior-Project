### Functional Requirements


|Requirement ID: 1 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website shall scrape prices using web scraper|
|Rationale:        | Updating the website manually is not cost or time-effective |
|Fit Criterion:    | Website database must be filled with prices from the webscrape|
|Dependencies      | N/A                                    |

|Requirement ID: 2 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Prices that are web scraped shall be stored in a database|
|Rationale:        | To be able to update prices every 24 hours and display them on website|
|Fit Criterion:    | When a product's price changes and the website is updated with the new price|
|Dependencies      | N/A                                    |

|Requirement ID: 3 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website shall display up-to-date prices every 24 hours|
|Rationale:        | Customers must be always aware of the price per part and total price|
|Fit Criterion:    | Price per part is updated immediately when a user adjusts any dropdown option|
|Dependencies     | 1 and 2                                |

|Requirement ID: 4 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Website prompts the user to log in when trying to move forward in the PC building process|
|Rationale:        | Making user login help track orders and web traffic|
|Fit Criterion:    | No page except home is accessed when not logged in |
|Dependencies      | N/A                                       |

|Requirement ID: 5 |  Priority: Very High                   |
|:-----------------|:---------------------------------------|
|Description:      | Dropdown box selections must save users' selection through page refresh|
|Rationale:        | Users do not have to reselect the box when a page crashes or the internet disconnects|
|Fit Criterion:    | All part dropdown bars do not change on page refresh |
|Dependencies      | N/A                                      |

|Requirement ID: 6 |  Priority: Medium                      |
|:-----------------|:---------------------------------------|
|Description:      | Apply error messages throughout the login and register process|
|Rationale:        | Help guide user to successful login and account creation|
|Fit Criterion:    | Wrong password and username displays error message|
|Dependencies      | 4                                      |

|Requirement ID: 7 |  Priority: Medium                      |
|:-----------------|:---------------------------------------|
|Description:      | Dropdown bar options display product name with dropdown bars|
|Rationale:        | Users should not have to select the part in order to see the price|
|Fit Criterion:    | Anytime a user clicks on the dropdown to change option|
|Dependencies      | 13                                      |

|Requirement ID: 8 |  Priority: High                        |
|:-----------------|:---------------------------------------|
|Description:      | Parts that cannot receive a price from the database must display a "Not Available" warning|
|Rationale:        | To avoid users from customizing a PC based around a part that is not available|
|Fit Criterion:    | Dropdown displays "Not Available" when the price field of a part in the database is empty or null|
|Dependencies      | 1 and 2                                |

|Requirement ID: 9 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | PHP code must use the post method wherever possible to maintain data security|
|Rationale:        | Post data is not visible in the URL and can be safely encrypted using HTTPS|
|Fit Criterion:    | No sensitive data is ever visible in the URL field|
|Dependencies      | N/A                                      |

|Requirement ID: 10 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The web scraper shall web scrape the prices from Amazon or NewEgg|
|Rationale:        | This will allow the customer to have the best chance at a fair price|
|Fit Criterion:    | 5 randomly selected parts will have their cheapest price listed on Amazon, compared to the top 5 other competitive websites, eighty percent of the time|
|Dependencies      | 1                                      |

|Requirement ID: 11 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | Home and login or logout option is always available in the top right|
|Rationale:        | Allows the user to quickly return to the home page and/or logout/login when necessary |
|Fit Criterion:    | Users are redirected to log in one hundred percent of the time they try to reach another page|
|Dependencies      | 4                            |

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
|Description:      | The website shall be attractive to gamer and work-from-home audiences|
|Rationale:        | Persuades new users to come to our website|
|Fit Criterion:    | A mixed group of gamers and people who work from home, without incentive, would begin using the website within five minutes of their first encounter|
|Dependencies      | N/A                                      |

|Requirement ID: 15 |  Priority: Medium                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be easy for anyone 12 and up to use |
|Rationale:        | A large part of our target audience is young children so we need to appeal to them|
|Fit Criterion:    | There is a ninety percent completion rate when a panel of 12-year-old children are tasked with completing a PC build|
|Dependencies      |                                       |

|Requirement ID: 16 |  Priority: Medium                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall minimize the amount of mistakes made by the user|
|Rationale:        | By minimizing mistakes, we can eliminate the need for a customer support team and reduce the number of emails sent to support|
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
|Rationale:        | We could lose revenue if our website is ever down|
|Fit Criterion:    | Over a year-long period, the website downtime is less than 1% |
|Dependencies      | 18                                     |

|Requirement ID: 19 |  Priority: High                    |
|:-----------------|:---------------------------------------|
|Description:      | The website shall be able to support up to 75 concurrent users|
|Rationale:        | The website must be able to support multiple users to maintain a one-hundred percent up time|
|Fit Criterion:    | With 75 users on the website simultaneously, the website doesn't crash and the response time is less than 5 milliseconds|
|Dependencies      | N/A                                      |

|Requirement ID: 20 |  Priority: Very High                  |
|:-----------------|:---------------------------------------|
|Description:      | The website shall display the total price of the PC on the bottom side of the screen at all times during the build process|
|Rationale:        | User is aware of their current total price at all times and helps the user stay within their budget|
|Fit Criterion:    | Anytime a dropdown is adjusted, the total price is immediately updated within 10 milliseconds|
|Dependencies      | 1, 2, 3, and 13                        |
