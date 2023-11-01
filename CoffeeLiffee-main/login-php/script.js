$(document).ready(function () {
    $('#cadastro-login').submit(function (event) {
        event.preventDefault();

        let nome = $('input[name="nome"]').val().trim();
        let email = $('input[name="email"]').val().trim();
        let senha = $('input[name="senha"]').val().trim();
        let confirmasenha = $('input[name="confirmasenha"]').val().trim();

        // Validação dos campos
        if (nome === '' || email === '' || senha === '') {
            $('#error-message').text('Preencha todos os campos.');
            return;
        }

        if (senha !== confirmasenha) {
            $('#error-message').text('As senhas não correspondem.');
            return;
        }

        // Enviar a requisição AJAX
        $.ajax({
            url: 'cadastrar.php',
            type: 'POST',
            data: {
                nome: nome,
                email: email,
                senha: senha,
                confirmasenha: confirmasenha
            },
            success: function (response) {
                if (response.status === 'success') {
                    // Limpa os campos do formulário
                    $('#cadastro-login')[0].reset();
                    // Exibe mensagem de sucesso
                    $('#mensagem').html('<div class="success">' + response.message + '</div>');
                } else {
                    // Exibe mensagem de erro
                    $('#cadastro-login')[0].reset();
                    $('#mensagem').html('<div class="error">' + response.message + '</div>');
                }
            },
            error: function (xhr, status, error) {
                // Lidar com erros de requisição aqui
                console.log(error);
                $('#mensagem').html('<div class="error">' + response.message + '</div>');


            }
        });
    });
});

$(document).ready(function() {
    $('#login-form').submit(function(event) {
        event.preventDefault(); // Evita o comportamento padrão do formulário

        var formData = $(this).serialize(); // Serializa os dados do formulário

        // Realiza a requisição AJAX
        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    // Login bem-sucedido, redireciona para a página "painel.php"
                    window.location.href = 'NiceAdmin/index.php';
                } else {
                    // Login falhou, exibe mensagem de erro
                    alert('Login falhou: ' + response.message);
                }
            },
            
            error: function() {
                alert('Ocorreu um erro durante o login.');
            }
        });
    });
});


