document.addEventListener("DOMContentLoaded", () => {
    // Navbar Toggler
    const toggler = document.querySelector(".navbar-toggler");
    const menu = document.querySelector(".navbar-menu");

    if (toggler && menu) {
        toggler.addEventListener("click", () => {
            menu.classList.toggle("active");

            const expanded = toggler.getAttribute("aria-expanded") === "true" || false;
            toggler.setAttribute("aria-expanded", !expanded);
        });
    }

    // Animate skills when in view
    const skillsSection = document.querySelector("#skills");
    if (skillsSection) {
        const observer = new IntersectionObserver(
            (entries) => {
                if (entries[0].isIntersecting) {
                    const skills = document.querySelectorAll(".skills-list li");
                    skills.forEach((skill, index) => {
                        skill.style.animationDelay = `${index * 0.3}s`;
                        skill.classList.add("animate");
                    });
                }
            },
            { threshold: 0.5 }
        );
        observer.observe(skillsSection);
    }

    // Set progress bar width based on the percentage
    const skillBars = document.querySelectorAll('.skill-bar');
    skillBars.forEach(bar => {
        const percentage = bar.getAttribute('data-skill'); // Mendapatkan nilai data-skill
        const percentageValue = parseInt(percentage); // Mengubah nilai menjadi integer
        if (!isNaN(percentageValue)) {
            // Pertama mulai dari 0%, kemudian baru terisi sesuai dengan percentage
            bar.style.width = '0%';
            const percentageText = bar.querySelector('.skill-percentage');
            if (percentageText) {
                percentageText.textContent = `0%`; // Menampilkan angka 0% terlebih dahulu
            }
            
            let currentPercentage = 0;
            const interval = setInterval(() => {
                if (currentPercentage < percentageValue) {
                    currentPercentage++;
                    bar.style.width = `${currentPercentage}%`;
                    if (percentageText) {
                        percentageText.textContent = `${currentPercentage}%`; // Update angka persen
                    }
                } else {
                    clearInterval(interval); // Berhenti jika sudah mencapai nilai yang sesuai
                }
            }, 20); // Kecepatan animasi (setiap 20ms)
        }
    });

    // Loader
    window.addEventListener("load", () => {
        const loader = document.getElementById("loader");
        if (loader) {
            loader.classList.add("hidden");
        }
    });

    // Show 'Other Technology' input field when 'Other' is selected
    const technologySelect = document.getElementById('technology');
    const otherTechnologyDiv = document.getElementById('other-technology-div');

    if (technologySelect) {
        technologySelect.addEventListener('change', function() {
            if (this.value === 'other') {
                otherTechnologyDiv.style.display = 'block';
            } else {
                otherTechnologyDiv.style.display = 'none';
            }
        });
    }
});
