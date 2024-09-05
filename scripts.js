document.getElementById('submitBtn').addEventListener('click', function() {
    // Captura os valores dos inputs
    var nome = document.getElementById('text1').value;
    var email = document.getElementById('text2').value;
    var telefone = document.getElementById('text3').value;
    var nascimento = document.getElementById('text4').value;
    var profissao = document.getElementById('text5').value;
    var celular = document.getElementById('text6').value;

    // Cria uma nova linha na tabela
    var table = document.getElementById('resultTable').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow();
    var rowIndex = newRow.rowIndex; // Obtém o índice da nova linha
    
    // Adiciona as células à nova linha
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    
    // Preenche as células com os dados
    cell1.innerHTML = nome;
    cell2.innerHTML = nascimento;
    cell3.innerHTML = email;
    cell4.innerHTML = celular;
    
    // Adiciona as ações (lápis e lixeira)
    cell5.innerHTML = `
        <img src="img/editar.png" alt="Editar" title="Editar" style="cursor:pointer; width: 25px;" onclick="editRow(${rowIndex})">
        <img src="img/excluir.png" alt="Excluir" title="Excluir" style="cursor:pointer; width: 25px;" onclick="deleteRow(${rowIndex})">
    `;
    
    
    // Exibe a seção resultSection
    document.getElementById('resultSection').style.display = 'block';
});

function editRow(index) {
    var table = document.getElementById('resultTable');
    var row = table.rows[index]; // Pega a linha correta pelo índice
    
    // Preenche os campos de entrada com os dados da linha selecionada
    document.getElementById('text1').value = row.cells[0].innerText;
    document.getElementById('text4').value = row.cells[1].innerText;
    document.getElementById('text2').value = row.cells[2].innerText;
    document.getElementById('text6').value = row.cells[3].innerText;
    
    // Remove a linha original
    table.deleteRow(index);
}

function deleteRow(index) {
    var table = document.getElementById('resultTable');
    table.deleteRow(index); // Remove a linha correspondente
}