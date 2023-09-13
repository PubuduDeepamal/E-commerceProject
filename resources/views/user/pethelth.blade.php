<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section-heading">
            <h2 id="producttittle">Pet Care Advice</h2>
        </div>
        </div>

        <!-- Create an empty table with a header row -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Advice</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="petAdviceTable">
                <!-- Data will be populated here -->
            </tbody>
        </table>

    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to fetch and populate the table with JSON data
        function populateTable() {
            fetch('assets/css/petAdvice.json') // Fetch data from petAdvice.json
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var tableBody = document.getElementById("petAdviceTable");

                    data.forEach(function (item) {
                        var row = document.createElement("tr");
                        row.innerHTML = "<td>" + item.Advice + "</td><td>" + item.Description + "</td>";
                        tableBody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching or parsing data:', error));
        }

        // Call the function to populate the table
        populateTable();
    </script>


</body>

</html>
