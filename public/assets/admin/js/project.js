document.addEventListener('DOMContentLoaded', () => {
    const selectedSkills = new Set(); // Dùng Set để tránh trùng lặp
    const skillsList = document.getElementById('skills-list');
    const skillProjectInput = document.getElementById('skillProject');
    const inputThumbnail = document.getElementById('thumbnail-add-project');
    const thumbnailImg = document.getElementById('thumbnailProject');

    const fetchSkills = async () => {
        try {
            const response = await fetch('/skill');
            if (!response.ok) throw new Error('Failed to fetch skills');
            const skills = await response.json();
            renderSkills(skills);
        } catch (error) {
            console.error('Lỗi khi lấy dữ liệu skills:', error);
            skillsList.innerHTML = '<p class="text-danger">Không thể tải danh sách kỹ năng.</p>';
        }
    };

    const renderSkills = (skills) => {
        skillsList.innerHTML = skills.map(skill => `
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="${skill.id}" id="skill-${skill.id}">
                <label class="form-check-label" for="skill-${skill.id}">${skill.name}</label>
            </div>
        `).join('');
    };

    const updateSelectedSkills = (skillId, isChecked) => {
        if (isChecked) {
            selectedSkills.add(skillId);
        } else {
            selectedSkills.delete(skillId);
        }
        skillProjectInput.value = JSON.stringify([...selectedSkills]);
    };

    const handleSkillChange = (event) => {
        if (event.target.classList.contains('form-check-input')) {
            const skillId = event.target.value;
            updateSelectedSkills(skillId, event.target.checked);
        }
    };

    const previewImage = (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                thumbnailImg.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    };

    skillsList.addEventListener('change', handleSkillChange);
    inputThumbnail.addEventListener('change', previewImage);

    fetchSkills();
});