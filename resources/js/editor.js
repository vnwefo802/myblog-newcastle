alert('Hello world');


let inputCode = document.querySelector('.input');

const canvas = document.querySelector('.canvas');


function renderInput(input) {
    canvas.innerHTML = input;
}

inputCode.addEventListener('input', () => {

    let input = inputCode.value;
    renderInput(input);
});

