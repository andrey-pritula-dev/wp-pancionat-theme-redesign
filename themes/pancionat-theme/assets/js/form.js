document.addEventListener('DOMContentLoaded', function () {
    const mainForm = document.querySelector('#main-form');
    const modalFormContainer = document.querySelector('#form-modal');
    const modalForm = modalFormContainer ? modalFormContainer.querySelector('form') : null;
    const formSuccessModal = document.querySelector('#form-success');
    const formOpenButtons = document.querySelectorAll('.open-form-modal');
    const secondModalForm = document.querySelector('#second-form-modal');

    if (modalFormContainer) {
        modalFormContainer.addEventListener('click', function (e) {
            if (e.target === modalFormContainer) {
                document.activeElement.blur();
                modalFormContainer.classList.add('hidden');
            }
        });
    }

    formOpenButtons.forEach(button => {
        button.addEventListener('click', function () {
            if (modalFormContainer) {
                modalFormContainer.classList.toggle('hidden');
            }
        });
    });

    if (formSuccessModal) {
        const closeButton = formSuccessModal.querySelector('button');
        if (closeButton) {
            closeButton.addEventListener('click', function () {
                formSuccessModal.classList.toggle('hidden');
            });
        }
    }

    [mainForm, modalForm, secondModalForm].filter(Boolean).forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);
            if (form.id !== 'second-form-modal') {
                formData.append('action', 'pancionat_theme_send_contact_form');
            } else {
                formData.append('action', 'pancionat_theme_send_contact_form_second');
            }

            fetch(pancionatThemeForm.ajax_url, {
                method: "POST",
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Form submitted successfully');
                    form.reset();
                    if (formSuccessModal) formSuccessModal.classList.remove('hidden');
                    if (form.id !== 'second-form-modal') {
                        if (modalFormContainer) modalFormContainer.classList.add('hidden');
                    }
                }
            })
            .catch(error => {
                console.error('Server error. Please try again later.', error);
            });
        });
    });
});
