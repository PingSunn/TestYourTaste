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

    <div class="h-screen" style="background-image: url('img/bg.jpg');">
        <div class="flex justify-center items-center h-screen">
            <div class="bg-white shadow-2xl rounded-2xl p-6 w-4/6 h-5/6">
                <?php $conn = connectDb(); 
                    // SQL query
                    $sql1 = "SELECT * FROM questions";
                    $sql2 = "SELECT * FROM choices";

                    $resultQuestion = $conn->query($sql1);
                    $resultChoices = $conn->query($sql2);

                    if ($resultQuestion->num_rows > 0) {
                        // Loop through questions
                        while ($questionLoop = $resultQuestion->fetch_assoc()) {
                            echo $questionLoop["question_text"] . " -> ";
                            
                            // Fetch choices associated with the current question
                            $sql2 = "SELECT * FROM choices WHERE question_id = " . $questionLoop["id"];
                            $resultChoices = $conn->query($sql2);
                            
                            if ($resultChoices->num_rows > 0) {
                                // Loop through choices
                                while ($choicesLoop = $resultChoices->fetch_assoc()) {
                                    echo $choicesLoop["choice_text"] . ", ";
                                }
                            } else {
                                echo "No choices available.";
                            }
                            echo "<br>";
                        }
                    } 
                ?>
                <!-- <div>
                    <div class="flex justify-center">
                        <h1 class="question"> <span class="font-bold"><?php ?>. </span> คำถาม คำถามคำถาม</h1>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <input type="radio" id="choiceQ<?php ?>" name="answerQ<?php ?>">
                                <label for="choiceQ<?php ?>"> AAAAAAA </label>
                            </div>
                            <div>
                                <input type="radio" id="choiceQ<?php ?>" name="answerQ<?php ?>">
                                <label for="choiceQ<?php ?>"> BBBBBBBB </label>
                            </div>
                            <div>
                                <input type="radio" id="choiceQ<?php ?>" name="answerQ<?php ?>">
                                <label for="choiceQ<?php ?>"> CCCCCCC </label>
                            </div>
                            <div>
                                <input type="radio" id="choiceQ<?php ?>" name="answerQ<?php ?>">
                                <label for="choiceQ<?php ?>"> DDDDDDDD </label>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div>
    <div class="flex justify-center">
        <h1 class="question"> <span class="font-bold">
            <?php 
            $conn = connectDb(); 
            $sql1 = "SELECT * FROM questions";
            $resultQuestion = $conn->query($sql1);
            if ($resultQuestion->num_rows > 0) {
                $questionLoop = $resultQuestion->fetch_assoc();
                echo $questionLoop["id"] . ". " . $questionLoop["question_text"];
            }
            disconnectDb($conn);
            ?> 
        </span> คำถาม คำถามคำถาม</h1>
    </div>
    <div class="flex justify-center">
        <div class="grid grid-cols-2 gap-4">
            <?php 
            $conn = connectDb(); 
            $sql2 = "SELECT * FROM choices";
            $resultChoices = $conn->query($sql2);
            if ($resultChoices->num_rows > 0) {
                while ($choicesLoop = $resultChoices->fetch_assoc()) {
                    echo '<div>';
                    echo '<input type="radio" id="choiceQ' . $choicesLoop["id"] . '" name="answerQ' . $choicesLoop["question_id"] . '">';
                    echo '<label for="choiceQ' . $choicesLoop["id"] . '">' . $choicesLoop["choice_text"] . '</label>';
                    echo '</div>';
                }
            }
            disconnectDb($conn);
            ?>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>







</body>

</html>