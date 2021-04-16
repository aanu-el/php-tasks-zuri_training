<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElleSavvy | Basic Calculator</title>
</head>

<body>

    <h2>Simple Calculator For You</h2>
    <p>To use, simple input the numbers and click the <b>Submit</b> Button</p>

    <form action="index.php" method="post">

        <label for="addition"> Addition:
            <input type="number" name="num1"> +
            <input type="number" name="num2">
            =
            <?php

            if (isset($_POST['submit'])) {

                if (empty($_POST['num1'])) {
                    echo "Input a number";
                } else {
                    $num1 = $_POST['num1'];
                };

                if (empty($_POST['num2'])) {
                    echo "Input a valid number";
                } else {
                    $num2 = $_POST['num2'];
                };

                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                $add = $num1 + $num2;

                echo "$add";
            }

            ?>
        </label>
        <br><br>

        <label for="subtraction"> Subtraction:
            <input type="number" name="num3"> -
            <input type="number" name="num4">
            = <?php

                if (isset($_POST['submit'])) {

                    if (empty($_POST['num3'])) {
                        echo "Input a Valid Number";
                    } else {
                        $num3 = $_POST['num3'];
                    };

                    if (empty($_POST['num4'])) {
                        echo "Input a valid number";
                    } else {
                        $num4 = $_POST['num4'];
                    };

                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];

                    $subtract = $num3 - $num4;

                    echo $subtract;
                }

                ?>
        </label>
        <br><br>

        <label for="division"> Division:
            <input type="number" name="num5"> /
            <input type="number" name="num6">
            = <?php

                if (isset($_POST['submit'])) {

                    if (empty($_POST['num5'])) {
                        echo "Input a valid number";
                    } else {
                        $num5 = $_POST['num5'];
                    };

                    if (empty($_POST['num6'])) {
                        echo "Input a valid number";
                    } else {
                        $num6 = $_POST['num6'];
                    };

                    $num5 = $_POST['num5'];
                    $num6 = $_POST['num6'];

                    $division = $num5 / $num6;

                    echo $division;
                };


                ?>
        </label>
        <br><br>

        <label for="multiplication"> Multiplication:
            <input type="number" name="num7"> x
            <input type="number" name="num8">
            = <?php

                if (isset($_POST['submit'])) {

                    if (empty($_POST['num7'])) {
                        echo "Input a valid number";
                    } else {
                        $num7 = $_POST['num7'];
                    };

                    if (empty($_POST['num8'])) {
                        echo "Input a valid number";
                    } else {
                        $num8 = $_POST['num8'];
                    };

                    $num7 = $_POST['num7'];
                    $num8 = $_POST['num8'];

                    $multi = $num7 * $num8;

                    echo $multi;
                }



                ?>
        </label>
        <br><br>

        <label for="modulus"> Modulus:
            <input type="number" name="num9"> %
            <input type="number" name="num10">
            = <?php


                if (isset($_POST['submit'])) {

                    if (empty($_POST['num9'])) {

                        echo "Kindly Input a Number in Modulus section";
                    } else {
                        $num9 = $_POST['num9'];
                        // echo $num9;
                    };

                    if (empty($_POST['num10'])) {

                        echo "Kindly Input a Valid Number in Modulus section";
                    } else {
                        $num10 = $_POST['num10'];
                        // echo $num10;
                    };

                    $num9 = $_POST['num9'];
                    $num10 = $_POST['num10'];

                    $modulus = $num9 % $num10;

                    echo $modulus;
                };


                ?>
        </label>
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>