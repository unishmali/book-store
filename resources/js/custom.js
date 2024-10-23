$(document).ready(function() {
    $('#search-input').on('input', function() {
        let query = $(this).val();

        if (query.length >= 2) { // Trigger search after 2 characters
            $.ajax({
                url: '/search', // Define your search route
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    let suggestions = $('#book-suggestions');
                    suggestions.empty();

                    if (data.length > 0) {
                        data.forEach(function(book) {
                            suggestions.append(`
                                <li class="list-group-item">
                                    <a href="/book/${book.id}">${book.title}</a>
                                </li>
                            `);
                        });
                    } else {
                        suggestions.append('<li class="list-group-item">No books found</li>');
                    }
                }
            });
        } else {
            $('#book-suggestions').empty();
        }
    });

    $(document).on('click', function(event) {
        if (!$(event.target).closest('#search-input, #book-suggestions').length) {
            $('#book-suggestions').empty();
        }
    });
});
