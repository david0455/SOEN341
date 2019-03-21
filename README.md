# SOEN341 UC2

## Objective and Features
Develop a Twitter-like web application with core features requested by users:
- Posting tweets
- "Like" a tweet
- Follow a user

*Additional Features*:
- Showcase best dog of the day
- Profile Picture

## Project Description
Social media has taken over the Internet in the recent years, and as a result, occupies a prominent portion of every individual's life. This web application's purpose is to allow people to connect with each other, share their thoughts, and remain up to date with current events, all in one unified platform. It also allows people to interact and demonstrate different emotions through features such as messages, tweets and likes.

## Team members
- David Chen | [davidchen2171](https://github.com/davidchen2171)
- Donya Meshgin | [meshgin](https://github.com/meshgin)
- Farhan-Nabil Alamgir | [nabilalamgir](https://github.com/nabilalamgir)
- Jack Leung | [Jack-Leung](https://github.com/Jack-Leung)
- Olivier Bertrand-Vachet | [Olihockey17](https://github.com/Olihockey17)
- Radu Stefan Plotoaga | [RaduP13](https://github.com/RaduP13)
- Samiha Rahman | [samiha-rahman](https://github.com/samiha-rahman)
- Thierry Le Bourdais | [ThierryRomain](https://github.com/ThierryRomain)
- Victor Tudoran | [VictorTudoran](https://github.com/VictorTudoran)
- Wei-Cheng Su | [Weigiu](https://github.com/Weigiu)

## Technologies/Resources
- WordPress
- HTML
- CSS
- JavaScript
- PHP
- Travis CI
- PHP CodeSniffer



## Build installation instructions

1. Install wordpress on a server or localhost ;
2. Upload the latest build, woofer-theme.zip, under **appearance > themes**  ;
3. Under **settings > permalinks** set the permalink structure to [siteurl].com/%postname%/
4. Create 7 pages that have explore, following, liked, login, profile, register and user-profile as their page template ;
5. Add the desired pages in the menu by going in **appearance > menu** and setting the menu placement to **left menu**.

*Note : at 4 places in the theme files the server url is hardcoded. To properly use the register and login links in the navigation bar at the right, do a find/replace in the theme file for 'https://orphic.ca/soen341/' and replace for your site url*.