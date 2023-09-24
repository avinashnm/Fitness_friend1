// Get the two steps of the sign up form
const step1 = document.getElementById('step-1');
const step2 = document.getElementById('step-2');

// Toggle the visibility of the two steps
function toggleSteps() {
  step1.classList.toggle('hidden');
  step2.classList.toggle('hidden');
}

// Add event listeners to the next and previous buttons
document.querySelector('.nextStep').addEventListener('click', toggleSteps);
document.querySelector('.prevStep').addEventListener('click', toggleSteps);
