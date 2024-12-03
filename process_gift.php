<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['gifts'])) {
        $selected_gifts = $_GET['gifts'];
        $sanitized_indices = array_map('escapeshellarg', $selected_gifts);
        $indices_string = implode(' ', $sanitized_indices);

        $command = escapeshellcmd("python3 gift_selector.py $indices_string");
        $output = shell_exec($command);

        echo "<h2>Gift Selection Results:</h2>";
        echo $output;
    } else {
        echo "<p>No gifts selected. Please choose your gifts and submit.</p>";
    }
} else {
    echo "Invalid Request";
}
?>