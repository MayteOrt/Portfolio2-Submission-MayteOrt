<?php
    // Server
    $server = "localhost";

    // Username
    $username = "root";

    // Password
    $password = "";

    // Database
    $database = "bake";

    // Global connection
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        // Is $connection null?
        // If so, connect to the database server.
        // If not, do nothing (because the connection already exists).
        if($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function bakeTable() {
        // Use global $connection locally.
        global $connection;

         // Is $connection null?
         // If so, do nothing (because a connection has not been made yet).
        if($connection != null) {
            // Get the results of a query using the connection
            // TODO: Write SQL SELECT statement to read first parent name, phone, donation and grade.
            $name = "SELECT` parentname`,`phone`, `donation`,`grade` FROM `signup`;";
            $results = mysqli_query($connection,$name);

            // Start the HTML table.
            echo("<table><tbody>");

            // For every row, generate a new HTML row.
            while($row = mysqli_fetch_assoc($results)) {
                // Start the row.
                echo("<tr>");

                // TODO: for each key, add a column entry in HTML using echo().
                echo ("<td>".$row["parentname"]."</td>");
                echo ("<td>".$row["phone"]."</td>");
                echo ("<td>".$row["donation"]."</td>");
                echo ("<td>".$row["grade"]."</td>");

                // Reminder: HTML tables use <td> (https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table#examples).
                
                // End the row.
                echo("</tr>");
            }

            // End the HTML table.
            echo("</tbody></table>");
        }
    }

       //LAB 8 update 
       function updateTable() {
        // Use the global $connection.
        global $connection;
        // Perform validation.
        // (1) Do the keys exist?
        if(isset($_POST["parentname"]) &&
           isset($_POST["phone"]) &&
           isset($_POST["donation"]) &&
           isset($_POST["grade"])) {

            // (2) Confirm the values.
            // Convert string input (to prevent injection attacks).
            $parentname = htmlspecialchars($_POST["parentname"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $donation = htmlspecialchars($_POST["donation"]);
            $grade = htmlspecialchars($_POST["grade"]);
            // With type="number", this will probably be a number,
            //  but, just to be sure, use intval() to force a conversion.

            // Is $connection null?
            // If so, do nothing.
            if($connection != null) {
                // Using the $connection, insert data into the database.
                $results = mysqli_query($connection, "INSERT INTO signup (parentname, phone, donation, grade,) VALUES('{$parentname}', '{$phone}','{$donation}', '{$grade}')");
            }
        }
    }
    
    function close() {
        // Use the global $connection locally.
        global $connection;

        // Unlike connect(), we test for a value *not* equal to null.
        if($connection != null) {
            // Close the connection.
            mysqli_close($connection);
        }
    } 
 
?>