<?php include "1-qna.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
  

    <title>Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .question {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            padding-top: 23px;
            width: 80%;
            margin: auto;
        }

        .option {
            font-size: 16px;
            margin-bottom: 5px;
            padding: 10px;
            width: 70%;
            margin: auto;
        }

        .correct {
            color: green;
            font-weight: bolder;
            background-color: #F0F8FF;
        }

        .incorrect {
            color: red;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: #E6E6FA;
            padding: 20px;
            border-radius: 11px;
        }
    </style>
    <link rel="stylesheet" href="2-quiz.css">
</head>

<body>
    <div class="container">

        <p class="text-center"> Green colored option are correct.</p>
        <?php
        // Loop through each quiz question and print it out
        foreach ($quiz as $key => $question) {
            // Print the question
            echo "<div class='question'>" . ($key + 1) . ". " . $question['q'] . "</div>";

            // Loop through each answer option and print it out
            foreach ($question['o'] as $optionKey => $option) {
                // Determine if the option is the correct answer or not
                $class = '';
                if ($optionKey == $question['a']) {
                    $class = 'correct';
                } elseif (isset($_POST['submit'])) {
                    $class = 'incorrect';
                }

                // Print the option
                echo "<div class='option " . $class . "'>" . ($optionKey + 1) . ". " . $option . "</div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>