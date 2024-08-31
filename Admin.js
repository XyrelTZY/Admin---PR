function updateTime() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    
    document.getElementById('current-time').innerHTML = `<strong>${timeString}</strong>`;
}

// Update time every second
setInterval(updateTime, 1000);

// Initial call to display time immediately
updateTime();

function handleScroll() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) { // Change the value as needed
            header.classList.add('shrink');
        } else {
            header.classList.remove('shrink');
        }
    }

    // Add event listener for scroll
    window.addEventListener('scroll', handleScroll);
