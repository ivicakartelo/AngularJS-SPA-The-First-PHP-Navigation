<?php
    define("DB_HOST", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "cmsoop");

    $link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $sql = "SELECT menu_id, name,
				CONCAT(LEFT(content,400))
				AS content, published
			  	FROM menu ORDER BY menu_id DESC";
    $result = mysqli_query($link, $sql);
    print '<ul>';

    While ($row = mysqli_fetch_assoc($result))
    {
    print '<li>';
    print "<a href='#/second/" . $row["menu_id"] . "'>" . $row["name"] . "</a>";
    print "</li>";
    }
    print "</ul>";
?>