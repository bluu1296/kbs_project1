<!DOCTYPE html>
<html>
<head>
	<title>HTML5 and CSS Calendat</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- STYLE  SECTION -->
  <style type="text/css">

  body {
  	font-family: "Montserrat";  /* just a cutsom font */
  }

  a:-webkit-any-link{		
	text-decoration:none !important;	/* do not underline links */
	color: black; !important;	/* give links a default color */
  }



  

  .wrapper {
  	margin: 10em;					/* just a temp margin */
  	border: 0.1em solid #ccc;	/* wrap the calendar inside a box */
  	width: 20em;				/* define a width for the box */
  	height: 24em;				/* define a height for the box */
  	box-shadow: 0.1em 0.2em 0.8em #ccc;	/* box shadow for better view */

  }

  .header {
  	height: 4em;					/* define a height for the header */
  	background-color: #3f51b5;		/* give the header a background color */
  	color: white;					/* give the header a text color */
  	text-align: center;				/* center the text inside the header */
  }

    .calendar-body .col-xs-1 {
  	width: 2.5em;					/* give each column a fixed width */
  	margin-left: 0.2em;				/* have some space between columnd */
  	text-align: center;				/* align text in the center */
  }


.header p {
	padding-top: 1.2em;				/* vertical centering */
	text-transform: uppercase;		/* all caps text  */
  }

.header span {
  	padding: 1.3em;			/* vertical and horizontal centering icons */
}

.inactive {					/* inactive dates get a light gray text color */
	color: #ccc;
}

.weekdays {	
	padding: 1em;			/* giving weekdays some space around */
}

.dates {
	padding: 0.2em 1em 0.2em 1em;	/* giving dates some space  */
}

.line {								/* a gray line separator  */
	height: 0.1em;
	border: 0.1em solid #EEEEEE;
}

.current-date {					/* styling the current date section  */
	text-transform: uppercase;
	text-align: center;
	padding: 0.7em;
}

.calendar-body .row .col-xs-1 p:hover {
	color: #4778a6;			/* hover state on all dates  */
} 


  </style>

	<!-- HTML SECTION  -->

<div class="wrapper">
	<div class="header">
	<span class="glyphicon glyphicon-chevron-left pull-left"></span>
	<span class="glyphicon glyphicon-chevron-right pull-right"></span>
	<p>January 2015</p>
	</div><!-- end header -->
		<div class="calendar-body">
			<div class="row weekdays">
				<div class="col-xs-1">
					<p>Su</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>Mo</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>Tu</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>We</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>Th</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>Fr</p>
				</div><!-- end col-xs-1 -->
				<div class="col-xs-1">
					<p>Sa</p>
				</div><!-- end col-xs-1 -->
			</div><!-- end row -->

			<div class="row dates">
				<div class="col-xs-1"><a href="#"><p class="inactive">28</p></a></div>
				<div class="col-xs-1"><a href="#"><p class="inactive">29</p></a></div>
				<div class="col-xs-1"><a href="#"><p class="inactive">30</p></a></div>
				<div class="col-xs-1"><a href="#"><p class="inactive">31</p></a></div>
				<div class="col-xs-1"><a href="#"><p>1</p></a></div>
				<div class="col-xs-1"><a href="#"><p>2</p></a></div>
				<div class="col-xs-1"><a href="#"><p>3</p></a></div>
			</div><!-- end row -->

			<div class="row dates">
				<div class="col-xs-1"><a href="#"><p>4</p></a></div>
				<div class="col-xs-1"><a href="#"><p>5</p></a></div>
				<div class="col-xs-1"><a href="#"><p>6</p></a></div>
				<div class="col-xs-1"><a href="#"><p>7</p></a></div>
				<div class="col-xs-1"><a href="#"><p>8</p></a></div>
				<div class="col-xs-1"><a href="#"><p>9</p></a></div>
				<div class="col-xs-1"><a href="#"><p>10</p></a></div>
			</div><!-- end row -->

			<div class="row dates">
				<div class="col-xs-1"><a href="#"><p>11</p></a></div>
				<div class="col-xs-1"><a href="#"><p>12</p></a></div>
				<div class="col-xs-1"><a href="#"><p>13</p></a></div>
				<div class="col-xs-1"><a href="#"><p>14</p></a></div>
				<div class="col-xs-1"><a href="#"><p>15</p></a></div>
				<div class="col-xs-1"><a href="#"><p>16</p></a></div>
				<div class="col-xs-1"><a href="#"><p>17</p></a></div>
			</div><!-- end row -->

			<div class="row dates">
				<div class="col-xs-1"><a href="#"><p>18</p></a></div>
				<div class="col-xs-1"><a href="#"><p>19</p></a></div>
				<div class="col-xs-1"><a href="#"><p>20</p></a></div>
				<div class="col-xs-1"><a href="#"><p>21</p></a></div>
				<div class="col-xs-1"><a href="#"><p>22</p></a></div>
				<div class="col-xs-1"><a href="#"><p>23</p></a></div>
				<div class="col-xs-1"><a href="#"><p>24</p></a></div>
			</div><!-- end row -->	

			<div class="row dates">
				<div class="col-xs-1"><a href="#"><p>25</p></a></div>
				<div class="col-xs-1"><a href="#"><p>26</p></a></div>
				<div class="col-xs-1"><a href="#"><p>27</p></a></div>
				<div class="col-xs-1"><a href="#"><p>28</p></a></div>
				<div class="col-xs-1"><a href="#"><p>29</p></a></div>
				<div class="col-xs-1"><a href="#"><p>30</p></a></div>
				<div class="col-xs-1"><a href="#"><p>31</p></a></div>
			</div><!-- end row -->

			<div class="line"></div>

			<div class="current-date">Monday, January 26</div>

		</div><!-- end calendar-body -->

</div><!-- end wrapper -->


</html><!-- this script got from www.htmlbestcodes.com-Coded by: Krishna Eydat -->
<html>
<head>
</head>
<body>
<center>
<script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</center>
<br/><div style="clear:both"></div><div><a target="_blank" href="http://www.htmlbestcodes.com/"><span style="font-size: 8pt; text-decoration: none">HTML Best Codes</span></a></div>
</body>
</html>
