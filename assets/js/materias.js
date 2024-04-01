/*!
* Start Bootstrap - Shop Homepage v5.0.6 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// Función para agregar materia seleccionada al almacenamiento local
function addSubject(subjectName, subjectImage) {
    let selectedSubjects = JSON.parse(localStorage.getItem('selectedSubjects')) || [];
    if (!selectedSubjects.some(subject => subject.name === subjectName)) {
        selectedSubjects.push({name: subjectName, image: subjectImage});
        localStorage.setItem('selectedSubjects', JSON.stringify(selectedSubjects));
        // Actualizar la lista de materias seleccionadas cuando se agrega una nueva
        showSelectedSubjects();
    }
}

// Función para eliminar una materia seleccionada
function removeSubject(subjectName) {
    let selectedSubjects = JSON.parse(localStorage.getItem('selectedSubjects')) || [];
    let updatedSubjects = selectedSubjects.filter(subject => subject.name !== subjectName);
    localStorage.setItem('selectedSubjects', JSON.stringify(updatedSubjects));
    // Actualizar la lista de materias seleccionadas después de eliminar una
    showSelectedSubjects();
}

// Función para mostrar las materias seleccionadas en el modal
function showSelectedSubjects() {
    let selectedSubjects = JSON.parse(localStorage.getItem('selectedSubjects')) || [];
    let selectedSubjectsList = document.getElementById('selectedSubjectsList');
    selectedSubjectsList.innerHTML = '';
    if (selectedSubjects.length > 0) {
        selectedSubjects.forEach(function(subject) {
            let listItem = document.createElement('li');
            listItem.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
            let image = document.createElement('img');
            image.src = subject.image;
            image.alt = subject.name;
            image.classList.add('me-3', 'img-thumbnail', 'subject-image', 'img-fluid');
            image.style.maxWidth = '100px'; // Ajustar el tamaño máximo de la imagen
            listItem.appendChild(image);
            let subjectName = document.createElement('span');
            subjectName.textContent = subject.name;
            listItem.appendChild(subjectName);
            let removeButton = document.createElement('button');
            removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
            removeButton.textContent = 'Eliminar';
            removeButton.addEventListener('click', function() {
                removeSubject(subject.name);
            });
            listItem.appendChild(removeButton);
            selectedSubjectsList.appendChild(listItem);
        });
    } else {
        let noSelectionItem = document.createElement('li');
        noSelectionItem.classList.add('list-group-item');
        noSelectionItem.textContent = 'No ha seleccionado ninguna materia aún.';
        selectedSubjectsList.appendChild(noSelectionItem);
    }
}

// Lógica para agregar evento de clic al botón "Añadir Materia" en cada tarjeta
document.addEventListener('DOMContentLoaded', function () {
    let addButtons = document.querySelectorAll('.btn-outline-dark');
    addButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            let subjectName = this.closest('.card').querySelector('.fw-bolder').textContent.trim();
            let subjectImage = this.closest('.card').querySelector('.card-img-top').src;
            addSubject(subjectName, subjectImage);
        });
    });
});