
const form = document.querySelector('form');
form.addEventListener('submit', e => {
    // handles the form submission and sends the uploaded file to the upload.php file for processing
    e.preventDefault();
    const fileInput = document.querySelector('input[type="file"]');
    const file = fileInput.files[0];
    const formData = new FormData();
    formData.append('csvfile', file);

    // receives the computed averages as a JSON object and inserts them into the empty table in the HTML code
    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        const table = document.getElementById('averages');
        const row = table.insertRow();
        for (let i = 0; i < data.length; i++) {
            const cell = row.insertCell();
            cell.innerHTML = data[i];
        }
    })
    .catch(error => console.error(error));
});
