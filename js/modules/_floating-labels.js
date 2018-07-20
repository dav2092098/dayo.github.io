// Form floating labels module

const floatingLabels = () => {
  // Scripts for floating labels
  console.log('floating labels');
  // Cache all form elements
  const formElements = document.querySelectorAll('form .form-element-transparent');

  // Cycle through all form elements and add event listener for each
  formElements.forEach((formElement) => {
    formElement.addEventListener('blur', () => {
      // If input field contains text, add background to hide label
      if (formElement.value.length !== 0) {
        formElement.style.background = '#fff';
      } else {
        // If input field doesn't contains text, make background transparent to make the label visible
        formElement.style.background = 'transparent';
      }
    });
  });
};

export { floatingLabels };
