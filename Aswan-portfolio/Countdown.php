<?php
// Set the target date and time (adjust as needed)
$targetDate = strtotime("2023-12-31 23:59:59");

// Get the current date and time
$currentDate = time();

// Calculate the remaining time
$remainingTime = $targetDate - $currentDate;

// Calculate the days, hours, minutes, and seconds
$days = floor($remainingTime / (60 * 60 * 24));
$hours = floor(($remainingTime % (60 * 60 * 24)) / (60 * 60));
$minutes = floor(($remainingTime % (60 * 60)) / 60);
$seconds = $remainingTime % 60;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Countdown Timer</title>
</head>
<body>
    <h1>Countdown Timer</h1>
    <div id="timer">
        <div>
            <span id="days"><?php echo $days; ?></span>
            <div>Days</div>
        </div>
        <div>
            <span id="hours"><?php echo $hours; ?></span>
            <div>Hours</div>
        </div>
        <div>
            <span id="minutes"><?php echo $minutes; ?></span>
            <div>Minutes</div>
        </div>
        <div>
            <span id="seconds"><?php echo $seconds; ?></span>
            <div>Seconds</div>
        </div>
    </div>

    <script>
        // Function to update the countdown timer
        function updateTimer() {
            var daysElement = document.getElementById("days");
            var hoursElement = document.getElementById("hours");
            var minutesElement = document.getElementById("minutes");
            var secondsElement = document.getElementById("seconds");

            // Decrease the remaining time by 1 second
            var days = parseInt(daysElement.innerHTML);
            var hours = parseInt(hoursElement.innerHTML);
            var minutes = parseInt(minutesElement.innerHTML);
            var seconds = parseInt(secondsElement.innerHTML);

            if (seconds > 0) {
                seconds--;
            } else {
                if (minutes > 0) {
                    minutes--;
                    seconds = 59;
                } else {
                    if (hours > 0) {
                        hours--;
                        minutes = 59;
                        seconds = 59;
                    } else {
                        if (days > 0) {
                            days--;
                            hours = 23;
                            minutes = 59;
                            seconds = 59;
                        }
                    }
                }
            }

            // Update the timer display
            daysElement.innerHTML = days;
            hoursElement.innerHTML = hours;
            minutesElement.innerHTML = minutes;
            secondsElement.innerHTML = seconds;
        }

        // Update the timer every second
        setInterval(updateTimer, 1000);
    </script>
</body>
</html>
