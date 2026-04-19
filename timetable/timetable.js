
const buttons = document.querySelectorAll('.p-btn');
const schedules = document.querySelectorAll('.schedule');


schedules.forEach((schedule, index) => {
    if (index !== 0) {
        schedule.style.display = 'none';
    }
});

buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        
    
        const btnNum = e.target.getAttribute('data-btn-num');
   
        schedules.forEach(schedule => {
            schedule.style.display = 'none';
        });

      
        const targetSchedule = document.querySelector(`.p-btn--${btnNum}`);
    
        if (targetSchedule) {
            targetSchedule.style.display = 'block';
        }
    });
});
