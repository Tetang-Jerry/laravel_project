let currentbalance=0;

document.addEventListener('DOMContentLoaded', (event) => {
    const balanceField = document.getElementById('balance');
    const toggleBalanceButton = document.getElementById('toggleBalance');
    currentbalance=balanceField.textContent;
    balanceField.textContent="******"
    let isHidden = true;

    toggleBalanceButton.addEventListener('click', () => {
       
        if (isHidden) {
            // Show the balance
            balanceField.textContent = currentbalance;
            toggleBalanceButton.classList.remove('fa-eye-slash');
            toggleBalanceButton.classList.add('fa-eye');
           
        } else {
            // Hide the balance
            balanceField.textContent = '******';
            toggleBalanceButton.classList.remove('fa-eye');
            toggleBalanceButton.classList.add('fa-eye-slash');
   
        }
        isHidden = !isHidden;
       
    });
});

let currentbalance2=0;

document.addEventListener('DOMContentLoaded', (event) => {
    const balanceField2 = document.getElementById('balance2');
    const toggleBalanceButton2 = document.getElementById('toggleBalance2');
    currentbalance2=balanceField2.textContent;
      balanceField2.textContent="******"
    let isHidden = true;

    toggleBalanceButton2.addEventListener('click', () => {
       
        if (isHidden) {
            // Show the balance
            balanceField2.textContent = currentbalance2;
            toggleBalanceButton2.classList.remove('fa-eye-slash');
            toggleBalanceButton2.classList.add('fa-eye');
           
        } else {
            // Hide the balance
            balanceField2.textContent = '******';
            toggleBalanceButton2.classList.remove('fa-eye');
            toggleBalanceButton2.classList.add('fa-eye-slash');
        }
        isHidden = !isHidden;
       
    });
});



