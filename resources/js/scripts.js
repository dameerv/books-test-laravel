$(document).ready(function () {
    /**
     * Создание книги и автора
     */
    $('#createBtn').click(function(){
        let form = $(this).parents('form');
        let entity = form.attr('entity');
        let messagae = '';
        if(entity === 'book') {

            messagae = 'Книга добавлена';
        }
        else{
            messagae = 'Автор добавлен'
        };
        let data = form.serialize();
        let url = '/api/v1/'+ entity +'s/add';

        $.post(url, data, function(result){
            $('#modalMessage').text(messagae);
            $('#messageModal').modal('show');
        });
    });

    /**
     * Изменение книги и автора
     */
    $('#updateBtn').click(function(){
        let form = $(this).parents('form');
        let entity = form.attr('entity');
        let data = form.serialize();
        let url = '/api/v1/'+ entity +'s/update';
        $.post(url, data, function(result){
            console.log(result)
            let h1Span;
            if(entity === 'book'){
                h1Span = result.title;
            }
            else{
                h1Span = result.name
            }
            console.log(h1Span);
            $('#h1Span').html('"' + h1Span + '"');
        });
    });

    /**
     * Поиск автора при введении текста в текстовое поле автора
     */
    let authorInput = $('#bookAuthorInput');
    let authorsListUl = $('#authorsList');
    authorInput.keyup(function(){
        let value = $(this).val();
        let url = '/api/v1/authors/list';
        let data = 'value=' + value;
        $.get(url, data, function(result){

            authorsListUl.html('').removeClass('d-none');
            let insert = '';
            //console.log(result[0].name); return;
            for(let i=0; i < result.length; i++){
                insert += '<li><a href="#!" author-id="'+result[i].id+'" ' +
                    'class="inserted-author">'+ result[i].name +'</a></li>';
            }
            authorsListUl.html(insert);

        });
    });
    /**
     * Добавление имени автора в input
     */
    authorsListUl.on('click', 'a', function() {
        authorInput.val($(this).text());
        $('[name="author-id"]').val($(this).attr('author-id'));
    })

    $('[id!=authorsList]').click(function(){
        authorsListUl.addClass('d-none');
    });

});



