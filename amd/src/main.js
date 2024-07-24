define(['jquery', 'core/modal_factory', 'core/templates'], function($, ModalFactory, Templates) {
    return {
        init: function() {
            $('.activity').each(function() {
                var $activity = $(this);
                var $button = $('<button class="btn btn-secondary">Chat</button>');
                $activity.append($button);

                $button.on('click', function(e) {
                    e.preventDefault();
                    ModalFactory.create({
                        type: ModalFactory.types.DEFAULT,
                        title: 'Chat',
                        body: Templates.render('local_quickchat/quickchat_modal', {})
                    }).then(function(modal) {
                        modal.show();
                    });
                });
            });
        }
    };
});