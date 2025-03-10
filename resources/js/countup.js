document.addEventListener("DOMContentLoaded", function () {
    const startTime = new Date("2025-02-21T00:00:00").getTime(); 
    
    function updateCountUp() {
        const now = new Date().getTime();
        const elapsed = now - startTime;
        
        const days = Math.floor(elapsed / (1000 * 60 * 60 * 24));
        const hours = Math.floor((elapsed % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((elapsed % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((elapsed % (1000 * 60)) / 1000);
        
        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;
    }
    
    updateCountUp();
    setInterval(updateCountUp, 1000);
});