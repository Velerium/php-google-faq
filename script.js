const questions = document.getElementsByClassName('accordionQ');
const answers = document.getElementsByClassName('accordionA');

for (let i = 0; i < questions.length; i++) {
    questions[i].addEventListener('click', function(){
        if (answers[i].style.display !== 'block') {
            answers[i].style.display = 'block';
        } else {
            answers[i].style.display = 'none';
        }
    });
}