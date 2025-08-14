// =============================
//  EFEITOS NEON TURBINADOS
// =============================

// Efeito máquina de escrever
document.addEventListener("DOMContentLoaded", () => {
    const typeEffect = document.querySelector(".type-effect");
    if (typeEffect) {
        const text = typeEffect.textContent;
        typeEffect.textContent = "";
        let i = 0;

        function typeWriter() {
            if (i < text.length) {
                typeEffect.textContent += text.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        typeWriter();
    }
});
// Efeito de reaparecimento do nome
function toggleNameVisibility() {
    const nameElement = document.getElementById('name-title');

    // Adiciona classe para desaparecer com fade out
    nameElement.classList.add('opacity-0', 'transition-all', 'duration-1000');

    // Após 1 segundo (tempo da animação), muda o texto (opcional)
    setTimeout(() => {
        // Remove a classe para fazer reaparecer com fade in
        nameElement.classList.remove('opacity-0');

        // Aqui você pode alterar o texto se quiser variações
        // nameElement.textContent = "// LEONARDO_DIAS:FULLSTACK_DEVELOPER";
    }, 1000);
}

// Executa a cada 10 segundos
setInterval(toggleNameVisibility, 10000);

// Inicia o efeito quando a página carrega
document.addEventListener('DOMContentLoaded', function () {
    // Começa o efeito após 10 segundos da carga da página
    setTimeout(toggleNameVisibility, 100);
});

// Partículas no fundo
const canvas = document.createElement("canvas");
canvas.id = "particles-bg";
document.body.appendChild(canvas);

const ctx = canvas.getContext("2d");
let particlesArray;

function initParticles() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    particlesArray = [];

    for (let i = 0; i < 80; i++) {
        particlesArray.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 2,
            dx: (Math.random() - 0.5) * 0.5,
            dy: (Math.random() - 0.5) * 0.5
        });
    }
}

function drawParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = "#39ff14";
    particlesArray.forEach(p => {
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fill();
    });
}

function updateParticles() {
    particlesArray.forEach(p => {
        p.x += p.dx;
        p.y += p.dy;
        if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
        if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
    });
}

function animateParticles() {
    drawParticles();
    updateParticles();
    requestAnimationFrame(animateParticles);
}

window.addEventListener("resize", initParticles);

initParticles();
animateParticles();
