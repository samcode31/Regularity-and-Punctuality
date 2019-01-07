<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mount Hope</title>
		<link rel="icon" type="image/png" href="../img/logo/logo.png">
		<!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="../css/admin_styles.css">
        <!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom JS -->
        <script src="../js/adminScript.js"></script>	
    </head>
    <body>
        <div class="top-nav">
            <div class="nav-logo"></div>
            <div class="nav-brand">
                <span>Mount Hope Secondary</span>
                <span id="application-name">Regularity & Punctuality Application</span>
            </div>
            <button type="button" class="top-nav-btn update">Update Attendance</button>
            <button type="button" class="top-nav-btn reports">Reports</button>
            <button type="button" class="top-nav-btn settings">Settings</button>
            <button type="button" class="top-nav-btn logout">Logout</button>
        </div>
        <div class="container">
            <div class="container-content">
                <div class="container-header">
                    <div class="search-bar">
                        <label>Search Employee</label>
                        <input type="text" name="search" placeholder="Search firstname or lastname">
                    </div>
                    <select class="employee-group">
                        <option>Teachers</option>
                        <option>Administration</option>
                        <option>Civil Staff</option>
                    </select>
                    <div class="search-date">
                        <label>Select Date</label>
                        <input type="date" id="date-selector">
                    </div>
                    <button type="button" class="btn-update">Update Attendance</button>
                    <!--<div class="container-icon"></div>-->                    
                </div>
                <div class="container-body">
                    <table>
                        <tr>
                            <th id="col-name"></th>
                            <th id="col-am">AM Attendance</th>
                            <th id="col-pm">PM Attendance</th>
                        </tr>
                        <tr>
                            <td id="employee-name">Cassar, Samuel</td>
                            <td>
                                <input type="radio">Present
                                <input type="time">
                                <input type="radio">Absent
                                <select>
                                    <option>UAL</option>
                                    <option>SL</option>
                                    <option>OL</option>
                                </select>
                            </td>
                            <td>
                                <input type="radio">Present
                                <input type="time">
                                <input type="radio">Absent
                                <select>
                                    <option>UAL</option>
                                    <option>SL</option>
                                    <option>OL</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>