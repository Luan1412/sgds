document.addEventListener('DOMContentLoaded', function () {
    // Simulando uma lista de espera obtida do servidor
    const waitlistData = [
        { id: 1, name: 'Roberto Carlos', url: '../PHP/medico.php' },
        { id: 2, name: 'Item 2', url: 'medico.html' },
        // Adicione mais itens conforme necessário
    ];
    
    const waitlist = document.getElementById('waitlist');

    // Função para atualizar a lista de espera
    function updateWaitlist() {
        waitlist.innerHTML = '';
        waitlistData.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item.name;
            listItem.addEventListener('click', () => {
                window.location.href = item.url; // Redirecionar para o site correspondente
            });
            waitlist.appendChild(listItem);
        });
    }

    // Atualizar a lista de espera inicialmente
    updateWaitlist();
});