(function() {
    ecommvc.admin.update = function() {
        const updateBtn = document.querySelector('.update-category');
        updateBtn.addEventListener('click', (event) => {
            event.preventDefault();
            const alertContainer = document.querySelector('.modal__alerts');
            const token = event.target.getAttribute('data-token');
            const id = event.target.getAttribute('id');
            const name = document.querySelector(`#item-${id}`).value;
            const data = { token: token, name: name };
            const url = `/admin/product/categories/${id}/edit`;

            // We have to post x-www-form-urlencoded data to PHP because it only decodes
            // application/x-www-form-urlencoded data automatically. For that we have to
            // set Content-Type to application/x-www-form-urlencoded.
            // const formBody = Object.keys(data)
            //     .map(key => `${encodeURIComponent(key)} = ${encodeURIComponent(data[key])}`)
            //     .join('&');

            try {
                fetch(url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                        // "Content-Type": "application/x-www-form-urlencoded"
                        // "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json())
                    .then(data => {
                        let markup;
                        if (data.success) {
                            markup = `
                                <div class="modal__alert" style="padding:.5rem;background-color:lightgreen;">
                                    ${data.success}
                                </div>
                            `;
                        } else {
                            markup = `
                                ${data.name.map(alert => `<div class="modal__alert" style="padding:.5rem;background-color:#ffcccb;margin-bottom:.5rem;">${alert}</div>`).join('')}
                            `;
                        }
                        alertContainer.innerHTML = markup;
                        setTimeout(() => {
                            alertContainer.innerHTML = "";
                        }, 5000);
                    });
            } catch(error) {
                console.log('Error: ', error);
            }
        });
    }
})();
