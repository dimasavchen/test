<?php
echo '<!DOCTYPE html>
<html lang="sk">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulár</title>
    <style>
        table {
            width: 100%;
            height: 120%;
            border-collapse: collapse;
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
    <form action="#" method="POST">
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
                    <label><input type="checkbox" name="predmety[]" value="INS" checked> INS</label>
                    <label><input type="checkbox" name="predmety[]" value="CVM"> CVM</label>
                    <label><input type="checkbox" name="predmety[]" value="CUJ"> CUJ</label>
                    <label><input type="checkbox" name="predmety[]" value="PRA"> PRA</label>
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
</html>';
