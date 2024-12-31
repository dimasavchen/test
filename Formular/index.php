<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних із форми
    $meno = htmlspecialchars($_POST['meno'] ?? '');
    $heslo = htmlspecialchars($_POST['heslo'] ?? '');
    $odbor = htmlspecialchars($_POST['odbor'] ?? '');
    $trieda = htmlspecialchars($_POST['trieda'] ?? '');
    $volitelne = [
        'INS' => isset($_POST['ins']),
        'CVM' => isset($_POST['cvm']),
        'CUJ' => isset($_POST['cuj']),
        'PRA' => isset($_POST['pra'])
    ];
    $pripomienky = htmlspecialchars($_POST['pripomienky'] ?? '');

    // Додаткові дії з даними
    echo "<h2>Отримані дані:</h2>";
    echo "<p>Meno: $meno</p>";
    echo "<p>Heslo: $heslo</p>";
    echo "<p>Odbor: $odbor</p>";
    echo "<p>Trieda: $trieda</p>";
    echo "<p>Voliteľné predmety: ";
    foreach ($volitelne as $predmet => $checked) {
        if ($checked) echo "$predmet ";
    }
    echo "</p>";
    echo "<p>Pripomienky: $pripomienky</p>";
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulár</title>
    <style>
        table {
            width: 700px;
            height: 400px;
            border-collapse: collapse;
            margin: auto; text-align: center;
            margin-top: 200px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #000;
            background-color: #d7d7d7;
        }

        input[type="text"], select {
            width: 100%;
            box-sizing: border-box;
        }

        input[type="text"] {
            height: 30px;
        }

        input[type="checkbox"], input[type="radio"] {
            margin-right: 5px;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <table>
            <tr>
                <th>Meno</th>
                <th><input type="text" name="meno" placeholder="Uveďte meno" required></th>
                <th>Heslo</th>
                <th><input type="text" name="heslo" placeholder="Uveďte heslo" required></th>
            </tr>
            <tr>
                <td>Odbor</td>
                <td>
                    <label><input type="radio" name="odbor" value="TIS"> TIS</label>
                    <label><input type="radio" name="odbor" value="ELE" checked> ELE</label>
                </td>
                <td>Trieda</td>
                <td>
                    <select name="trieda">
                        <optgroup label="Prvý ročník">
                            <option>1. A</option>
                            <option>1. B</option>
                            <option>1. C</option>
                            <option>1. D</option>
                        </optgroup>
                        <optgroup label="Druhý ročník">
                            <option>2. A</option>
                            <option>2. B</option>
                            <option>2. C</option>
                            <option>2. D</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Voliteľne predmety</td>
                <td colspan="3">
                    <label><input type="checkbox" name="ins" value="INS" checked> INS</label>
                    <label><input type="checkbox" name="cvm" value="CVM"> ELE</label>
                    <label><input type="checkbox" name="cuj" value="CUJ"> CUJ</label>
                    <label><input type="checkbox" name="pra" value="PRA"> PRA</label>
                </td>
            </tr>
            <tr>
                <td>Pripomienky</td>
                <td colspan="3"><input type="text" name="pripomienky" placeholder="Uveďte pripomienky" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="reset">Vymazať</button></td>
                <td colspan="2"><button type="submit">Odoslať</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
