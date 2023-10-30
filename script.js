scrollEffects();

function scrollEffects() {
    window.addEventListener('scroll', () => {
        const getAllRow = document.querySelectorAll('.animated');

        for (const i of getAllRow) {
            
            const windowHeight = window.innerHeight;
            const revealTop = i.getBoundingClientRect().top;
            const revealPoint = 150;

            if (revealTop < windowHeight - revealPoint) {
                i.classList.add('active');
            }else{
                i.classList.remove('active');
            }

        }
    });
}