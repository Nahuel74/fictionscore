<!DOCTYPE html>
<head>
<?php require "../partials/head-par.php" ?>
<link rel="stylesheet" type="text/css" href="../css/list-style.css">
</head>

<body>

    <?php
        require "../partials/header-par.php";
        require "../partials/must-log.php";
    ?>

    <table>
        <thead>
            <tr>
                <th>
                    <span class="th">Id</span>
                </th>
                <th>
                    <span class="th">Name</span>
                </th>
                <th>
                    <span class="th">Type</span>
                </th>
                <th>
                    <span class="th">Main<br>Character</span>
                </th>
                <th>
                    <span class="th">Secondary<br>Characters</span>
                </th>
                <th>
                    <span class="th">Antagonist</span>
                </th>
                <th>
                    <span class="th">Script</span>
                </th>
                <th>
                    <span class="th">Extra<br>points</span>
                </th>
                <th>
                    <span class="th">Score</span>
                </th>
                <th>
                    <span class="th">Options</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                require_once "../partials/edit-list-par.php";             
            ?>
        </tbody>
    </table>
</body>