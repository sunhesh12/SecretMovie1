<!DOCTYPE html>
<html>
<body>
    <h1>Live Search Example</h1>

    <form action="search.php" method="get">
        Search <input type="text" id="search" name="query" placeholder="Search...">
        <input type="submit" value="Search">
    </form>

    <div id="searchResults">
        <!-- Search results will be displayed here -->
    </div>

    <script>
        const searchInput = document.getElementById("search");
        const searchResults = document.getElementById("searchResults");

        searchInput.addEventListener("input", function() {
            const searchQuery = this.value.trim();

            // Clear the search results if the search query is empty
            if (searchQuery === "") {
                searchResults.innerHTML = "";
                return;
            }

            // Send the search query to the server for live search
            fetch("search.php?query=" + searchQuery)
                .then(response => response.text())
                .then(data => {
                    searchResults.innerHTML = data;
                })
                .catch(error => console.error(error));
        });
    </script>
</body>
</html>
