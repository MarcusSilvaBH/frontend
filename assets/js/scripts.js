$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});

function cadastrar(){
    var email = cadastro.email.value;
    var senha = cadastro.senha.value;
    var valSenha = cadastro.val_senha.value;
    var vale1 = true;
    var vale2 = true;

    for(var i = 0; i < email.length; i++){
        if(email.charAt(i) == "@"){
            vale1 = true;
            break;
        }else{
            vale1 = false;
        }
    }
    for(var i = 0; i < email.length; i++){
        if(email.charAt(i) == "."){
            vale2 = true;
            break;
        }else{
            vale2 = false;
        }
    }

    if(email.length > 6 && vale1 == true && vale2 == true){
        if(senha == valSenha){
            alert("Cadastro feito com sucesso");
        }else{
            alert("Senhas não correpondentes");
        }
    }else{
        alert("Email inválido");
    }
}

function valorTotal(){
    var broto = parseFloat(tipos.broto.value)*20;
    var mediaa = parseFloat(tipos.mediaa.value)*25;
    var grande = parseFloat(tipos.grande.value)*30;
    var gigante = parseFloat(tipos.gigante.value)*40;
    var peperoni = parseFloat(tipos.peperoni.value)*1.5;
    var bacon = parseFloat(tipos.bacon.value)*2;
    var pimenta = parseFloat(tipos.pimenta.value)*2;
    var cheder = parseFloat(tipos.cheder.value)*2.5;
    var catupiry = parseFloat(tipos.catupiry.value)*1.5;
    var bordaCatupiry = parseFloat(tipos.bordaCatupiry.value)*10;
    var bordaCheder = parseFloat(tipos.bordaCheder.value)*10;

    var preco = broto+grande+mediaa+gigante+peperoni+bacon+cheder+catupiry+bordaCheder+bordaCatupiry;
    tipos.valor.value = preco;
}

  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

  /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});