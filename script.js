document.addEventListener('DOMContentLoaded', function() {
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
                <h1 class="question py-5 px-10"><span class="font-bold">${question.id}. </span>${question.text}</h1>
            </div>
                <div class="grid grid-cols-2 gap-2 text-center">
                    ${Object.keys(choices[key]).map(choiceKey => `
                        <div class="border ${getBorderStyle(choiceKey)} hover:bg-gray-300">
                            <input class="opacity-0 absolute" type="radio" id="choice${key}${choiceKey}" name="answer${key}">
                            <label class="block py-2 px-10 text-md font-medium" for="choice${key}${choiceKey}">${choices[key][choiceKey].text}</label>
                        </div>
                    `).join('')}
                </div>
        `;
        
        // Append question element to the container
        container.appendChild(questionDiv);
    }
}

// Function to get border style for each choice
function getBorderStyle(choiceKey) {
    switch(choiceKey) {
        case '1':
            return 'rounded-tl-xl border-gray-300';
        case '2':
            return 'rounded-tr-xl border-gray-300';
        case '3':
            return 'rounded-bl-xl border-gray-300';
        case '4':
            return 'rounded-br-xl border-gray-300';
        default:
            return 'border-gray-300';
    }
}

});