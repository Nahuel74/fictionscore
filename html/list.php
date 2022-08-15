<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiction Score!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin="crossorigin">
    <link
        href="https://fonts.googleapis.com/css2?family=Shojumaru&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css\main-style.css">
    <link rel="stylesheet" type="text/css" href="../css\list-style.css">
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">NEW</a>
            <a href="list.php">LIST</a>
            <a href="login.php">LOG IN</a>
        </nav>
    </header>

    <table>
        <thead>
            <tr>
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
                    <span class="th">Personal<br>Opinion</span>
                </th>
                <th>
                    <span class="th">Extra<br>points</span>
                </th>
                <th>
                    <span class="th">Score</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="td">
                    <input type="text" disabled="disabled" class="input-table">
                </td>
                <td class="td">
                    <input type="text" disabled="disabled" class="input-table">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" min="-1" max="10" class="input-table">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" min="-1" max="10" class="input-table">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" min="-1" max="10" class="input-table">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" min="-1" max="10" class="input-table">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" min="-1" max="10" class="input-table">
                </td>
                <td class="td">
                    <input
                        type="number"
                        disabled="disabled"
                        min="0"
                        max="10"
                        class="input-table unlisted"
                        id="extra-points">
                </td>
                <td class="td">
                    <input type="number" disabled="disabled" id="score">
                </td>
            </tr>
        </tbody>
    </table>
</body>