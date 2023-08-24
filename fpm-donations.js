// FPM Donate JavaScript
// Version: 1.0

// Function to handle payment frequency selection
function handleFrequencySelection() {
  const frequencyButtons = document.querySelectorAll('.payment-trigger');
  
  frequencyButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active class from all buttons
      frequencyButtons.forEach(btn => {
        btn.classList.remove('active');
      });
      
      // Add active class to the clicked button
      this.classList.add('active');
      
      // Display corresponding frequency info
      const frequencyInfo = document.querySelector('.frequency span');
      frequencyInfo.classList.remove('active');
      const targetInfo = document.querySelector(`.frequency span[data-id="${this.dataset.id}"]`);
      if (targetInfo) {
        targetInfo.classList.add('active');
      }
    });
  });
}

// Function to handle amount selection
function handleAmountSelection() {
  const amountButtons = document.querySelectorAll('.btn-amt');
  
  amountButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active and initial-select classes from all buttons
      amountButtons.forEach(btn => {
        btn.classList.remove('active', 'initial-select');
      });
      
      // Add active class to the clicked button
      this.classList.add('active');
    });
  });
}

// Function to handle custom amount entry
function handleCustomAmountEntry() {
  const amountInput = document.querySelector('#amount');
  
  amountInput.addEventListener('focus', function() {
    // Remove active class from all predefined amount buttons
    const amountButtons = document.querySelectorAll('.btn-amt');
    amountButtons.forEach(btn => {
      btn.classList.remove('active', 'initial-select');
    });
  });
}

// Initialize all handlers when the document is fully loaded
document.addEventListener('DOMContentLoaded', function() {
  handleFrequencySelection();
  handleAmountSelection();
  handleCustomAmountEntry();
});
