// Get the current day of the week (0 for Sunday, 1 for Monday, and so on)
var currentDay = new Date().getDay();

// Get the table element
var table = document.getElementById("tbl");

// Get all the table rows
var rows = table.getElementsByTagName("tr");

// Loop through the rows and compare the day of the week
for (var i = 1; i < rows.length; i++) {
    var firstCell = rows[i].getElementsByTagName("td")[0];
    //   var cells = rows[i].getElementsByTagName("td");

    var rowDay = firstCell.innerText;
    // Check the day of the week for the first cell in the row

    if (rowDay === getCurrentDayOfWeek(currentDay)) {
        rows[i].classList.add("highlight");
    }
}

function getCurrentDayOfWeek(dayIndex) {
    var daysOfWeek = ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"];
    return daysOfWeek[dayIndex];
}

