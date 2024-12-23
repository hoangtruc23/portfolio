document.addEventListener('DOMContentLoaded', function () {
    fetch('/skill')
        .then(response => response.json())
        .then(data => {
            const skillsList = document.getElementById('skills-list');
            
            skillsList.innerHTML = '';

            data.forEach(skill => {
                const skillDiv = document.createElement('div');
                skillDiv.classList.add('form-check');

                skillDiv.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${skill.id}" id="skill-${skill.id}">
                    <label class="form-check-label" for="skill-${skill.id}">
                        ${skill.name}
                    </label>
                `;

                skillsList.appendChild(skillDiv);
            });
        })
        .catch(error => {
            console.error('Lỗi khi lấy dữ liệu skills:', error);
        });
});