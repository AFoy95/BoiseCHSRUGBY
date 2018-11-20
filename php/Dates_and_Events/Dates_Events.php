
<?php
   include'../../php_Classes/Dao.php';
   session_start();
   ?>
<html>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <body>
      <div id="header">
         <header>
            <title>Schedules</title>
         </header>
         <head>
            <link href="/css/Schedules.css" type="text/css" rel="stylesheet" />
			<link href="/js/dyCalendarJS-1.2.1/css/dycalendar.min.css" type="text/css" rel="stylesheet"/><!-- Imported from github -->
         </head>
         <h1>CHS<img src="/photos/logo.PNG"/>RUGBY</h1>
         <div class="topnav">
            <a href="/php/top-level/main_page.php">Main-page</a>
            <a href="/php/top-level/About_Us.php">About-Us</a>
            <a href="/php/top-level/Personal_Bios.php">Personal-Bios</a>	
            <a class="active "href="/php/top-level/Schedules.php">Schedule</a>	
            <a href="/php/top-level/Tables.php">Tables</a>
            <a href="/php/login_handles/login.php">Admin Login</a>
            <?php if($_SESSION['logged_in']){
               echo" 
               <a href=/php/login_handles/logout.php> LOGOUT</a> 
               ";}?>
         </div>
      </div>
      <div id="background">
         <div class ="sidenav">
            <div>
               <button class="dropbtn">Dates and Events</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/Dates_Events.php">Dates and Events</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">Practice Times</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/Practice.php">Practice</a>
               </div>
            </div>
            <div>
               <button class="dropbtn">California Links</button>
               <div class = "dropdown-content">
                  <a href="/php/Dates_and_Events/California.php">General info</a>
                  <a href="#" download="California Trip">California Schedule</a>
               </div>
            </div>
         </div>
		 <div class ="content">
		  <div class="some-class">
            <h1>Today calendar (default skin)</h1>
            <div class="calendar-container">
                <div id="dycalendar-today" class="dycalendar-container"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default skin)</h1>
            <div class="calendar-container">
                <div id="dycalendar-month" class="dycalendar-container"></div>
            </div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Day calendar (default skin)</h1>
            <div class="calendar-container">
                <div id="dycalendar-day" class="dycalendar-container"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Today calendar (skin-blue)</h1>
            <div class="calendar-container">
                <div id="dycalendar-today-with-skin" class="dycalendar-container skin-blue"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Today calendar (skin-black shadow-default)</h1>
            <div class="calendar-container">
                <div id="dycalendar-today-with-skin-shadow" class="dycalendar-container skin-black shadow-default"></div>
            </div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Month calendar (default current month) (skin-red)</h1>
            <div class="calendar-container">
                <div id="dycalendar-month-with-skin" class="dycalendar-container skin-red"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (21st October 1990) (skin-green shadow-default)</h1>
            <div class="calendar-container">
                <div id="dycalendar-month-with-skin-shadow" class="dycalendar-container skin-green shadow-default"></div>
            </div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Month Calendar 1 target class = "dycalendar-month"</h1>
            <div class="dycalendar-month dycalendar-container skin-purple"></div>
        </div>

        <div class="some-class">
            <h1>Month Calendar 2 target class = "dycalendar-month"</h1>
            <div class="dycalendar-month dycalendar-container skin-blue shadow-default"></div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Month Calendar with prev-next-button id = "dycalendar-month-prev-next-button"</h1>
            <div id="dycalendar-month-prev-next-button" class="dycalendar-container skin-green shadow-default"></div>
        </div>

        <div class="some-class">
            <h1>Month Calendar with prev-next-button class = "dycalendar-month-prev-next-button"</h1>
            <div class="dycalendar-month-prev-next-button dycalendar-container skin-red shadow-default"></div>
        </div>

        <div class="some-class">
            <h1>Month Calendar with prev-next-button class = "dycalendar-month-prev-next-button"</h1>
            <div class="dycalendar-month-prev-next-button dycalendar-container skin-purple shadow-default"></div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-default)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-default"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-black)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-black"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-blue)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-blue"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-green)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-green"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-purple)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-purple"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-red)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-red"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge shadow-spacegray)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge shadow-spacegray"></div>
            </div>
        </div>

        <hr />

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge default skin gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-black gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-black gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-blue gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-blue gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-green gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-green gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-purple gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-purple gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-red gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-red gradient"></div>
            </div>
        </div>

        <div class="some-class">
            <h1>Month calendar (default current month) (round-edge skin-spacegray gradient)</h1>
            <div class="calendar-container">
                <div class="dycalendar-month dycalendar-container round-edge skin-spacegray gradient"></div>
            </div>
        </div>
		 </div>
      </div>
      <div class="footer">
         <p> &copy; boisechsrugby.com</p>
         <p>&emsp;Admin: Austin Foy</p>
         <p>&emsp;Contact information: <a href="mailto:afoy95@live.com">
            afoy95@live.com</a>.
         </p>
      </div>
	  	  <script src = "/../../js/sideNav.js"></script>
		  <script src = "/../../js/dyCalendarJS-1.2.1/js/jquery.min.js"/></script> <!-- Imported from github -->
		  <script src = "/../../js/dyCalendarJS-1.2.1/js/dycalendar-jquery.min.js"/></script> <!-- Imported from github -->
		  <script src = "/../../js/dyCalendarJS-1.2.1/js/default.js"/></script> <!-- Imported from github -->
   </body>
</html>

