$(document).ready(function() {
    $("#example1").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "order": [[4, "desc"], [5, 'asc']],
        "oLanguage": {
            "sProcessing": "Aguarde enquanto os dados são carregados ...",
            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
            "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
            "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
            "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
            "sInfoFiltered": "",
            "sSearch": "Procurar",
            "oPaginate": {
               "sFirst":    "Primeiro",
               "sPrevious": "Anterior",
               "sNext":     "Próximo",
               "sLast":     "Último"
            }
         } 
    });    
   
    $("#table-example").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
        "oLanguage": {
            "sProcessing": "Aguarde enquanto os dados são carregados ...",
            "sLengthMenu": "Mostrar _MENU_ registros por pagina",
            "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
            "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
            "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
            "sInfoFiltered": "",
            "sSearch": "Procurar",
            "oPaginate": {
               "sFirst":    "Primeiro",
               "sPrevious": "Anterior",
               "sNext":     "Próximo",
               "sLast":     "Último"
            }
         } 
    });

    $('#data').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy'
    });

//    Mask
    $('.registro').mask('000000000');
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 00000-0000');
    $('.rg').mask('000000000000000000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.money2').mask("#.##0,00", {reverse: true});
    $('.valor_energia').mask("###.##0,00", {reverse: true});
    
    $('.emailll').mask("A", {
            translation: {
                    "A": { pattern: /[\w@\-.+]/, recursive: true }
            }
    });
    
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});
   
   
   