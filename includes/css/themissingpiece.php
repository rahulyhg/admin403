<style type="text/css">
/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
*/

* {
	margin: 0;
	padding: 0;
}

body {
	margin-top: 20px;
	background: #36393D url(<?php echo HTTPPATH; ?>/images/themissingpiece/img01.gif) repeat-x;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #D1E9A3;
}

form {
}

input, textarea {
	font: normal 1em Arial, Helvetica, sans-serif;
	color: #36393D;
}

h1, h2, h3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: normal;
	color: #FFFFFF;
}

h1 {
	font-size: 3em;
}

h2 {
	font-size: 2em;
}

h3 {
	font: bold 1em Arial, Helvetica, sans-serif;
}

a {
	color: #FFFFFF;
}

a:hover {
	text-decoration: none;
}

/* Header */

#header {
	width: 980px;
	height: 140px;
	margin: 0 auto;
	background: #D1E9A3 url(<?php echo HTTPPATH; ?>/images/themissingpiece/img02.gif) repeat-x;
}

#logo {
	float: left;
	height: 100px;
	padding: 0 0 0 115px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img03.gif) no-repeat;
	color: #36393D;
}

#logo h1 {
	padding: 20px 0 0 0;
}

#logo p {
}

#logo a {
	text-decoration: none;
	color: #36393D;
}

#search {
	float: right;
	width: 200px;
	padding: 0 20px 0 0;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img04.gif) no-repeat right top;
}

#search form {
	height: 25px;
	padding: 65px 0 0 25px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img05.gif) no-repeat 0 60px;
}

#search fieldset {
	border: none;
}

#search-text {
	width: 170px;
	background: #FFFFFF;
	border: none;
}

#search legend, #search-submit {
	display: none;
}

#menu {
	clear: both;
	height: 40px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img09.gif) no-repeat right bottom;
}

#menu ul {
	height: 28px;
	padding: 12px 0 0 20px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img08.gif) no-repeat left bottom;
	list-style: none;
}

#menu li {
	display: inline;
}

#menu a {
	padding: 0 20px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img06.gif) no-repeat left center;
	text-decoration: none;
	font-weight: bold;
	color: #36393D;
}

#menu a:hover {
	text-decoration: underline;
}

#menu .current_page_item a {
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img07.gif) no-repeat left center;
	color: #B42600;
}

/* Page */

#page {
	width: 980px;
	margin: 0 auto;
	padding: 20px 0 0 0;
}

#back2top {
	height: 72px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img19.gif) no-repeat left bottom;
}

#back2top a {
	display: block;
	width: 40px;
	padding: 27px 0 0 25px;
	text-decoration: none;
	text-align: center;
}

#back2top a:hover {
	text-decoration: underline;
}

/* Content */

#content {
	float: left;
	width: 600px;
}

.post {
	padding: 20px 0;
}

.post .title {
	font-size: 2.6em;
}

.post .title a {
	text-decoration: none;
}

.post .title a:hover {
	border-bottom: 1px dotted #000000;
}

.post .byline {
	margin-bottom: 2em;
}

.post .date {
	display: block;
	float: left;
	width: 69px;
	height: 64px;
	margin-top: 7px;
	background: #CCE698 url(<?php echo HTTPPATH; ?>/images/themissingpiece/img14.gif) no-repeat;
	text-align: center;
	font-size: 11px;
	font-weight: bold;
	color: #BF3600;
}

.post .date .month {
	display: block;
	height: 16px;
	padding: 1px 0 0 0;
	background: #BF3600 url(<?php echo HTTPPATH; ?>/images/themissingpiece/img14.gif) no-repeat;
	color: #FFFFFF;
}

.post .date .day {
	height: 47px;
	font: bold 36px Georgia, "Times New Roman", Times, serif;
}

.post .date .year {
	margin-top: -8px;
	display: block;
	text-indent: -9999px;
}

.post .entry {
	margin: 0 20px 0 40px;
}

.post .entry p, .post .entry ol, .post .entry ul {
	margin-bottom: 1.6em;
	line-height: 100%;
	list-style-position: inside;
}

.post .links {
	height: 22px;
	padding: 5px 0 0 10px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img15.gif) no-repeat;
}

.post .links a {
	text-decoration: none;
	font-weight: bold;
}

.post .links a:hover {
	text-decoration: underline;
}

.post .links .more {
	padding-left: 15px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img16.gif) no-repeat 0 5px;
}

.post .links .comments {
	padding-left: 15px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img17.gif) no-repeat 0 6px;
}

.post .links .rss {
	padding-left: 15px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img18.gif) no-repeat 1px 6px;
}

/* Sidebar */

#sidebar {
	float: right;
	width: 320px;
}

#sidebar ul {
	background: #D6EBAD url(<?php echo HTTPPATH; ?>/themissingpiece/images/img10.gif) repeat-y;
	list-style: none;
	color: #36393D;
}

#sidebar li {
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img12.gif) no-repeat left bottom;
}

#sidebar li ul {
	padding: 10px 20px 30px 20px;
	line-height: 200%;
	background: none;
}

#sidebar li li {
	padding: 0 0 0 10px;
	background: url(<?php echo HTTPPATH; ?>/images/themissingpiece/img13.gif) no-repeat left center;
}

#sidebar h2 {
	height: 42px;
	padding: 8px 0 0 10px;
	background: #BA3300 url(<?php echo HTTPPATH; ?>/images/themissingpiece/img11.gif) no-repeat;
	font-size: 1.6em;
}

#sidebar a {
	text-decoration: none;
	color: #BA3300;
}

#sidebar a:hover {
	text-decoration: underline;
}

/* Calendar */

#calendar {
}

#calendar_wrap {
	padding: 10px 20px 30px 20px;
}

#calendar table {
	width: 200px;
	border-collapse: collapse;
	text-align: center;
}

#calendar caption {
	padding: 2px 0;
	font-weight: bold;
	color: #BA3300;
}

#calendar thead th {
	padding: 2px 0;
	border-top: 2px solid #BFD19A;
	border-bottom: 2px solid #BFD19A;
}

#calendar tbody td {
	padding: 4px 0;
}

#calendar tfoot td {
	padding: 2px 0;
	border-top: 2px solid #BFD19A;
	font-weight: bold;
}

#prev {
	text-align: left;
}

#next {
	text-align: right;
}

#today {
	background: #BFD19A;
	font-weight: bold;
}

/* Footer */

#footer {
	clear: both;
	padding: 50px 0;
	background: #242628 url(<?php echo HTTPPATH; ?>/images/themissingpiece/img20.gif) repeat-x;
	font-size: 11px;
	color: #666666;
}

#footer p {
	text-align: center;
	line-height: 2em;
}

#footer a {
	color: #666666;
}

.errorMessage {
	font-weight: bold;
	color: #FF0000;
}
.pad {
	margin: 6px;
	padding: 6px;
}
</style>
