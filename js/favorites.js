fetch('includes/action.php')
    .then(response => response.json())
    .then(data => {
        createDiv(data.locations);
    })
    .catch(error => {
        console.error(error);
    });

