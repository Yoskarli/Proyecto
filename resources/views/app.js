document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Previene el envío del formulario

    // Obtener los valores de los campos de entrada
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Validar los campos (ejemplo simple)
    if (username === 'admin' && password === '1234') {
        alert('Inicio de sesión exitoso');
        // Redirigir a otra página o realizar una acción específica
    } else {
        alert('Usuario o contraseña incorrectos');
    }
});
