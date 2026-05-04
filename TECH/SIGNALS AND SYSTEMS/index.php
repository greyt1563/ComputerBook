<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Folder Listing</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        ul { list-style-type: none; }
        li { margin-bottom: 5px; }
        .folder { font-weight: bold; color: #007bff; }
        .file { color: #333; }
        a { text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <h2>Directory Contents</h2>
    <ul id="directory-list">
        <?php
        $dir = ".";
        $entries = scandir($dir);
        if ($entries !== false) {
            
            $entries = array_diff($entries, ['.', '..']);
            sort($entries);
            foreach ($entries as $entry) {
                if ($entry === "index.php") {
                    continue;
                }
                if (is_dir($entry)) {
                    echo "<li class='folder'>[DIR] <a href='$entry/'>$entry</a></li>";
                } else {
                    echo "<li class='file'>[FILE] <a href='$entry'>$entry</a></li>";
                }
            }
        } else {
            echo "<li>Error: Could not read directory contents.</li>";
        }
        ?>
    </ul>

</body>
</html>
