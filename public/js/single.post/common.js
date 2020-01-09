$(document).ready(function () {

    var form = $('form.post-reply');
    var btn_back = $(form).children().children().children('button.js-back');

    $('button.js-submit').on('click', function () {
        let text = $('textarea.input');
        let parent = $(form).parent().parent();
        let parent_id = +$(parent).attr('id');

        if($(text).val().length > 2)
        {
            let inputs = {
                text : $(text).val(),
                id: $('input.js-post-id').val(),
            };

            if(typeof parent_id === 'number' && parent_id > 0)
            {
                inputs.parent_id = parent_id;
            }

            $.ajax({
                url: $('form.post-reply').attr('action'),
                method: 'POST',
                data: {
                    data : inputs,
                    _token : $('input[name="_token"]').val()
                },
                success : function (data) {
                    if(data.length > 0)
                    {
                        if(typeof inputs.parent_id === 'undefined')
                        {
                            $('.post-comments').append(data);
                        }
                        else
                        {
                            $(parent).children('.media-body').append(data);
                            $(btn_back).click();
                        }
                        text.val("");
                        let comments = $('.post-comments .media').length;
                        $('h2.comments-count').text(comments + " комментариев");
                    }
                    else
                    {
                        alert("Ошибка в валидации");
                    }
                },
                error: ''

            });
        }
    });





    $('a.reply').on('click', function () {
        btn_back.show();
        $('div.js-field-comment .section-title h2').hide();
        $(this).parent().parent().append(form);
    });

    $(btn_back).on('click', function () {
        btn_back.hide();
        $('div.js-field-comment .section-title h2').show();
        $('div.js-field-comment').append(form);
    });
});
