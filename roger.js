
const navLinks = document.querySelectorAll('.nav a');
const contents = document.querySelectorAll('.content');

navLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        
        const tabName = link.getAttribute('data-tab');
        
        contents.forEach((content) => {
            content.style.display = 'none';
        });

        document.getElementById(`${tabName}-content`).style.display = 'grid';
    });
});
