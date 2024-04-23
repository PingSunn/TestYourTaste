<?php require_once ('connect_db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body>

    <div class="bg-cover bg-center h-screen" style="background-image: url('img/bg.jpg');">
        <div class="flex justify-center items-center h-screen">
            <div class="bg-white shadow-2xl rounded-3xl p-6 w-4/5 h-5/6">
                <?php
                    $conn = connectDb(); 
                    $sql1 = "SELECT * FROM questions";
                    $resultQuestion = $conn->query($sql1);
                    $sql2 = "SELECT * FROM choices";
                    $resultChoices = $conn->query($sql2);

                    // Fetch all choices into an associative array
                    $choices = [];
                    while ($row = $resultChoices->fetch_assoc()) {
                        $choices[$row['question_id']][] = $row;
                    }

                    if ($resultQuestion->num_rows > 0) {
                        // Loop through each question
                        while ($question = $resultQuestion->fetch_assoc()) {
                            // Display question details
                            echo '<div class="mb-10 mt-5">';
                            echo '<div class="flex justify-center">';
                            echo '<h1 class="question mb-5"> <span class="font-bold">' . $question["id"] . '. </span>' . $question["question_text"] . '</h1>';
                            echo '</div>';
                            echo '<div class="flex justify-center">';
                            echo '<div class="grid grid-cols-2 gap-4">';
                            
                            // Check if choices exist for this question
                            if (isset($choices[$question['id']])) {
                                $questionChoices = $choices[$question['id']];
                                // Display each choice
                                foreach ($questionChoices as $index => $choice) {
                                    $choiceID = $choice['id'];
                                    $choiceText = $choice['choice_text'];
                                    echo '<div class="ps-4">';
                                    echo '<input class="text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500" type="radio" id="choiceQ' . $question["id"] . '_' . $index . '" name="answerQ' . $question["id"] . '">';
                                    echo '<label class="w-full py-4 ms-2 text-md font-medium text-gray-900" for="choiceQ' . $question["id"] . '_' . $index . '">' . $choiceText . '</label>';
                                    echo '</div>';
                                }
                            }
                            
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    disconnectDb($conn);
                ?>
            </div>
        </div>
    </div>
</body>

</html>