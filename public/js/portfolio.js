document.addEventListener("DOMContentLoaded", function () {
    // 1. Typing effect
    const texts = [
        "Développeur Jeux video",
        "Data Analyst/Scientist Junior",
        "Développeur Full Stack",
        "Volontaire des Nations Unis",
    ];
    let i = 0,
        j = 0,
        isDeleting = false;
    function type() {
        const el = document.getElementById("typing");
        if (!el) return;
        const current = texts[i];
        el.textContent = isDeleting
            ? current.substring(0, j--)
            : current.substring(0, j++);
        if (!isDeleting && j === current.length + 1) {
            isDeleting = true;
            setTimeout(type, 1500);
            return;
        }
        if (isDeleting && j === 0) {
            isDeleting = false;
            i = (i + 1) % texts.length;
        }
        setTimeout(type, isDeleting ? 50 : 100);
    }
    type();

    // 2. Navbar scroll
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector(".navbar");
        navbar.style.boxShadow =
            window.scrollY > 50 ? "0 2px 20px rgba(0,0,0,0.3)" : "none";
        navbar.style.background = window.scrollY > 50 ? "#0f0f1a" : "#1a1a2e";
    });

    // 3. Fade in au scroll
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((e) => {
                if (e.isIntersecting) {
                    e.target.classList.add("visible");
                }
            });
        },
        { threshold: 0.1 },
    );
    document.querySelectorAll(".fade-in").forEach((el) => observer.observe(el));

    // 4. Cercles de compétences animés
    document.querySelectorAll(".skill-donut").forEach((canvas) => {
        const level = parseInt(canvas.getAttribute("data-level"));
        const ctx = canvas.getContext("2d");
        new Chart(ctx, {
            type: "doughnut",
            data: {
                datasets: [
                    {
                        data: [level, 100 - level],
                        backgroundColor: ["#f5a623", "#1a1a2e"],
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                cutout: "75%",
                animation: { duration: 1500 },
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false },
                },
            },
        });
    });

    // 5. Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach((a) => {
        a.addEventListener("click", (e) => {
            e.preventDefault();
            document
                .querySelector(a.getAttribute("href"))
                ?.scrollIntoView({ behavior: "smooth" });
        });
    });

    // 6. Particles
    if (
        document.getElementById("particles-js") &&
        typeof particlesJS !== "undefined"
    ) {
        particlesJS("particles-js", {
            particles: {
                number: { value: 50 },
                color: { value: "#e94560" },
                opacity: { value: 0.3 },
                size: { value: 3 },
                line_linked: { enable: true, color: "#e94560", opacity: 0.2 },
                move: { enable: true, speed: 2 },
            },
            interactivity: {
                events: { onhover: { enable: true, mode: "repulse" } },
            },
        });
    }
});

// 7. Theme toggle
const themeToggle = document.getElementById("themeToggle");
const savedTheme = localStorage.getItem("theme");

if (savedTheme === "light") {
    document.body.classList.add("light-mode");
    themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
}

themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("light-mode");
    const isLight = document.body.classList.contains("light-mode");
    themeToggle.innerHTML = isLight
        ? '<i class="fas fa-moon"></i>'
        : '<i class="fas fa-sun"></i>';
    localStorage.setItem("theme", isLight ? "light" : "dark");
});
