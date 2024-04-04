<!DOCTYPE html>
<html lang="en">
    <script>
        document.getElementById('formulario').addEventListener('submit', function (event) {
            event.preventDefault(); 

            var formData = new FormData(this);

            fetch('../controllers/contacto.php', {
                method: 'get',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data); 
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>

</html>