# Welcome to the [WVNHS Search Page](http://www.wvnhs.com/search)!

This page is the newest addition to Wayne Valley's National Honor Society website, and allows users to quickly search through all of the members in the organization. Each member's first and last name appear, as well as a proof-of-concept dummy info button. It was created as an example to practice new Web Development technologies and philosophies. These include:
* <strong>Javascript namespace objects
* <strong>Bootstrap CSS
* <strong>Angular.js
* <strong>CSS @media queries
* <strong>Improved project documentation
*<strong> Organized stylesheet and js scripts</strong>

##Improved Design
The site works seamlessly on both mobile and desktop based browsers because of the Bootstrap integration. An @media query is used to add table padding when viewed from a larger screen without affecting the mobile experience.

##Back-end Upgrades
Using an Angular.js MVC design, the table contents were bound to an array of database entries loaded in the app's controller using php and json encoding. After the data is retrieved, each entry is converted to a namespaced NHS.member JavaScript object. The table then loads the data using Angular's ng-repeat function, with a real-time filter to the input field. 
All files and content for the system have been organized into easily readable res, lib, js, and css directories.

##Improved Documentation
You're looking at it.
