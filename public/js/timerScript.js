
for(let timeContainers of document.querySelectorAll('.time_container'))
{
    let countDown;


    timeContainers.addEventListener('mouseover',e =>{

        let time = timeContainers.querySelector('#theTime').innerHTML;
        let timeContainer = timeContainers.querySelector('#theTimeCounter');

        let date = new Date(time).getTime();

         countDown = setInterval( function (){

            let currentTime = new Date().getTime()

            let difference = date - currentTime;

            let days = Math.floor(difference / (1000 * 60 * 60 * 24));
            let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((difference % (1000 * 60)) / 1000);

            timeContainer.innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            console.log('hiaaaaaaaaaaaaa')

        }, 500 );

        timeContainer.classList.remove('hidden');

        timeContainers.style.backgroundColor = 'pink';
        console.log(time);
    });

    timeContainers.addEventListener('mouseout',e =>{

        let timeContainer = timeContainers.querySelector('#theTimeCounter');

        timeContainer.classList.add('hidden');

        clearInterval(countDown)

        timeContainers.style.backgroundColor = 'blue';
        console.log('no im not doing anything');
    });
}
