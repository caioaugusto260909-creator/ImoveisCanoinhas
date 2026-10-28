const btns = document.querySelectorAll('.btn');
const reelEls = document.querySelectorAll('.reel');
const jackpotValue = document.querySelector('.slot-header strong');
const symbols = ['7', '💰', '♠', '♦', '♥', '★'];

btns.forEach((button) => {
  button.addEventListener('mouseenter', () => {
    button.style.filter = 'brightness(1.12)';
  });

  button.addEventListener('mouseleave', () => {
    button.style.filter = 'brightness(1)';
  });

  button.addEventListener('click', () => {
    if (button.textContent.includes('Jogar agora') || button.textContent.includes('Começar a jogar') || button.textContent.includes('Resgatar bônus')) {
      button.classList.add('pulse');
      setTimeout(() => button.classList.remove('pulse'), 300);

      reelEls.forEach((reel) => {
        reel.style.transform = 'scale(1.18) rotateY(180deg)';
        setTimeout(() => {
          reel.style.transform = 'scale(1) rotateY(0deg)';
        }, 160);
      });
    }
  });
});

let jackpot = 184900;

setInterval(() => {
  jackpot += Math.floor(Math.random() * 2100) + 300;
  jackpotValue.textContent = `R$ ${jackpot.toLocaleString('pt-BR')}`;

  reelEls.forEach((reel) => {
    const randomSymbol = symbols[Math.floor(Math.random() * symbols.length)];
    reel.textContent = randomSymbol;
    reel.style.transform = 'scale(1.08)';
    setTimeout(() => {
      reel.style.transform = 'scale(1)';
    }, 120);
  });
}, 1500);
