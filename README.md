# simple-webpage
A simple webpage written in PHP, Javascript, Ajax and CSS.

Project backend features:
1)	Register functionality with Ajax returning 4 different status codes: 200, 422, 500, 400. Also an error code when client-side problems.
2)	Login functionality with Ajax returning 3 different status codes: 200, 404, 400. Also an error code when client-side problems.
3)	Session functionality with logout option in all pages. Using Ajax.
4)	Cookies functionality in “form sender.php”. When accepted, the message does not show up anymore, otherwise shows up again. Using Ajax.
5)	Each ticket bought is assigned to the user, by writing the ticket in a file like “form0 $user.txt”. Using Ajax.
6)	Donations are summed up through all users in the file donations.txt. Using Ajax.

Project frontend features:
1)	Register and login feedback box changes color according to the Ajax response.
2)	Sticky “I miei biglietti” link
3)	Floating speech bubbles for recensions
4)	Rotatable cube using jQuery with 6 famous places in Rome, with hyperlinks to Wiki sites
5)	Sponsorship logos
6)	Go to Top functionality using jQuery
7)	Marquee “Designed By” in footer
8)	After a donation is made, the form vanishes and a new message box is shown.
9)	Tried to make it as eye pleasing as possible

Have a look at [video.mp4](video.mp4) for a 5 minute presentation of all features.
