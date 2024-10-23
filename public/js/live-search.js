document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const suggestionsList = document.getElementById('book-suggestions');

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.trim();
        if (query.length > 2) { // Only search if input length is greater than 2 characters
            fetch(`/search-books?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsList.innerHTML = '';
                    data.books.forEach(book => {
                        const li = document.createElement('li');
                        li.className = 'list-group-item';
                        li.textContent = book.title;
                        li.addEventListener('click', function() {
                            window.location.href = `/book/${book.id}`;
                        });
                        suggestionsList.appendChild(li);
                    });
                })
                .catch(error => console.error('Error:', error));
        } else {
            suggestionsList.in
            
        nerHTML = '';
        }
    });
});
