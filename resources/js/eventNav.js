
    document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".nav-link");
        const sections = document.querySelectorAll(".event-section");

        links.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                const targetSection = this.getAttribute("data-section");

                // Hide all sections
                sections.forEach(section => section.classList.add("hidden"));

                // Show the selected section
                document.getElementById(targetSection).classList.remove("hidden");
            });
        });
    });
