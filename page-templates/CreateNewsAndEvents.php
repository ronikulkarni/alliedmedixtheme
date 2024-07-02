<?php 
//Template Name: NewsAndEvents
get_header(); ?>

<p>&nbsp;</p>
<p>&nbsp;</p>

<script> 

    var currDate = document.getElementById('currDate')
    var errorElement = document.getElementById('error')
   
    currDate.addEventListener('blur', function(event)  => {
        alert "in event listener"
        let messages = []
        if (isValidDate(currDate)) {
        } else {
            messages.push("Invalid date input. Please enter in YYYY-MM-DD format.");
        }
        alert messages
        if (messages.length) > 0 {
          e.preventDefault()
          errorElement.innerText = messages.join('. ')
        }

    });


    function isValidDate(dateString) {
    // First, check if the input is in the format YYYY-MM-DD
    if (!/^\d{4}-\d{2}-\d{2}$/.test(dateString)) {
        return false;
    }

    // Parse the date parts to integers
    var parts = dateString.split("-");
    var year = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10);
    var day = parseInt(parts[2], 10);

    // Check if month and day are within valid ranges
    if (month < 1 || month > 12 || day < 1 || day > 31) {
        return false;
    }

    // Check for specific months with 30 or 31 days
    if (month == 4 || month == 6 || month == 9 || month == 11) {
        if (day > 30) {
            return false;
        }
    } else if (month == 2) {
        // Check for February and leap years
        var isLeapYear = (year % 4 == 0 && year % 100 != 0) || (year % 400 == 0);
        if (day > 29 || (day == 29 && !isLeapYear)) {
            return false;
        }
    }

    // Otherwise, the date is valid
    return true;
}

</script> 

<form action="<?php echo get_template_directory_uri(); ?>/create_newsevents.php" method="POST">
    <h3 style="text-align: left; vertical-align: top; padding: 0px 600px;">Create News and Events</h3>
    <div id="error"></div>
    <table class="center-table" style="border-spacing: 10px 20px;">
    <tr><td style="text-align: right;">
        <label for="currdate">Date:</label></td><td></td><td style="text-align: left;"><input id="currDate" name="currDate" type="text" value="" required/></td></tr><script>  
        function getDate(){
        var todaydate = new Date();
        var month = todaydate.getMonth() + 1;
        if (month < 10) {
            month = "0" + month; }
        if (day < 10 ) {
            day = "0" + day; }
        var day = todaydate.getDate();
        var year = todaydate.getFullYear();
        var datestring = year + "-" + month + "-" + day;
        document.getElementById("currDate").value = datestring;
        } 
        getDate();
        </script>
        <tr><td style="text-align: right;"><label for="title">Title:</label></td><td></td><td style="text-align: left;"><input id="title" name="title" type="text" value="" required/></td></tr>
        <tr><td></td><td></td><td style="text-align: left;">
        <input id="newsevents" checked="checked" name="newsevents" type="radio" value="News" /> <label for="html">News</label> 
        <input id="newsevents" name="newsevents" type="radio" value="Events" /> <label for="css">Events</label></td></tr>
        <tr><td style="text-align: right;"><label for="image">Image:</label></td><td></td><td style="text-align: left;"><input id="image" name="image" type="file" value="" required/></td></tr>
        <tr><td style="text-align: right;"><label for="description">Description:</label></td><td></td><td style="text-align: left;"><textarea id="description" cols="50" required name="description" rows="4"></textarea></td></tr>
        <tr><td></td><td></td><td style="text-align: left;"><button type="submit" value="Submit">Submit</button> <button type="reset" value="Reset">Reset</button></td></tr></table></form>
        <p>&nbsp;</p>

<?php get_footer(); ?>