document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('exam-area').addEventListener('scroll', progressBar);
            // Select the container where you want to append questions and choices
            const container = document.querySelector('.structure');

            // Loop through each question
            for (const key in questions) {
                if (questions.hasOwnProperty(key)) {
                    const question = questions[key];

                    // Create question element
                    const questionDiv = document.createElement('div');
                    questionDiv.innerHTML = `
            <div>
            <h1 class="question py-5 px-2 text-lg font-semibold hover:text-lg"><span class="font-bold">${question.id}. </span>${question.text}</h1>

            </div>

                <div class="grid grid-cols-2 gap-2 text-center">
                ${Object.keys(choices[key]).map(choiceKey => `
                        <label class="px-2 group cursor-pointer">
                            <input type="radio" class="peer sr-only" name="answer${key}" value="${choices[key][choiceKey].value}" />
                            <div class="max-w-xl rounded-md p-4 font-normal ring-2 ring-transparent transition-all hover:shadow-2xl peer-checked:text-[#a86138] peer-checked:ring-[#8b4927] peer-checked:ring-offset-2 peer-checked:font-medium">
                            ${choices[key][choiceKey].text}
                            </div>
                        </label>
                        `).join('')}
                </div>


        `;

                // Append question element to the container
                container.appendChild(questionDiv);
            }
        }

        // Function to get border style for each choice
        // function getBorderStyle(choiceKey) {
        //     switch(choiceKey) {
        //         case '1':
        //             return 'rounded-tl-xl border-gray-300';
        //         case '2':
        //             return 'rounded-tr-xl border-gray-300';
        //         case '3':
        //             return 'rounded-bl-xl border-gray-300';
        //         case '4':
        //             return 'rounded-br-xl border-gray-300';
        //         default:
        //             return 'border-gray-300';
        //     }
        // }

    }
);

function progressBar() {
    const barId = document.getElementById('rangeProgressBar');
    const clientHeight = document.getElementById('exam-area').clientHeight;
    const scrollTop = document.getElementById('exam-area').scrollTop;
    const scrollHeight = document.getElementById('exam-area').scrollHeight;
    console.log("Client " + document.getElementById('exam-area').clientHeight);
    console.log("ScrollTop " + document.getElementById('exam-area').scrollTop);
    console.log("ScrollHeight" + document.getElementById('exam-area').scrollHeight);

    // Calculate the scrollable distance
    const scrollableDistance = scrollHeight - clientHeight;

    // Calculate the scroll progress
    const progress = (scrollTop / scrollableDistance) * 100;

    // Update the width of the progress bar
    barId.style.width = progress + "%";

}

function show() {
    // Disable the button to prevent multiple clicks
    document.getElementById('calculateBtn').disabled = true;


    // Optionally, change the text of the button
    document.getElementById('calculateBtn').textContent = 'Calculating...';
    
}
    let sum = 0;

    document.querySelectorAll('input[type="radio"]').forEach(function(radio) {
        if (radio.checked) {
            sum += parseInt(radio.value);
        }
    });
    console.log(sum);