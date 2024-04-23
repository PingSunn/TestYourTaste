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

                <div class="mb-10 mt-5">
                    <div class="flex justify-center">
                        <h1 class="question mb-5"> <span class="font-bold"></span></h1>
                    </div>
                    <div class="flex justify-center">
                        <div class="grid grid-cols-2 gap-4">

                            <div class="ps-4">
                                <input class="text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500"
                                    type="radio" id="choiceQ" name="answerQ">
                                <label class="w-full py-4 ms-2 text-md font-medium text-gray-900" for="choiceQ"> A
                                </label>
                            </div>
                            <div class="ps-4">
                                <input class="text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500"
                                    type="radio" id="choiceQ" name="answerQ">
                                <label class="w-full py-4 ms-2 text-md font-medium text-gray-900" for="choiceQ"> B
                                </label>
                            </div>
                            <div class="ps-4">
                                <input class="text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500"
                                    type="radio" id="choiceQ" name="answerQ">
                                <label class="w-full py-4 ms-2 text-md font-medium text-gray-900" for="choiceQ"> C
                                </label>
                            </div>
                            <div class="ps-4">
                                <input class="text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500"
                                    type="radio" id="choiceQ" name="answerQ">
                                <label class="w-full py-4 ms-2 text-md font-medium text-gray-900" for="choiceQ"> D
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>