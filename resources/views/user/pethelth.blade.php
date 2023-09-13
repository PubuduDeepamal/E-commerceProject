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

        <!-- Create an empty accordion for Q&A -->
        <div id="petAdviceAccordion">
            <!-- Data will be populated here -->
        </div>

    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Function to fetch and populate the Q&A Accordion with JSON data
        function populateAccordion() {
            fetch('assets/css/petAdvice.json') // Fetch data from petAdvice.json
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var accordion = document.getElementById("petAdviceAccordion");

                    data.forEach(function (item) {
                        // Create an accordion item for each Q&A pair
                        var accordionItem = document.createElement("div");
                        accordionItem.className = "card";

                        var cardHeader = document.createElement("div");
                        cardHeader.className = "card-header";

                        var questionButton = document.createElement("button");
                        questionButton.className = "btn btn-link";
                        questionButton.setAttribute("data-toggle", "collapse");
                        questionButton.setAttribute("data-target", "#answer");
                        questionButton.setAttribute("aria-expanded", "true");
                        questionButton.setAttribute("aria-controls", "answer");
                        questionButton.innerHTML = item.Advice;

                        cardHeader.appendChild(questionButton);

                        var answerDiv = document.createElement("div");
                        answerDiv.id = "answer";
                        answerDiv.className = "collapse";
                        answerDiv.setAttribute("aria-labelledby", "question");
                        answerDiv.setAttribute("data-parent", "#petAdviceAccordion");

                        var answerCardBody = document.createElement("div");
                        answerCardBody.className = "card-body";
                        answerCardBody.innerHTML = item.Description;

                        answerDiv.appendChild(answerCardBody);

                        accordionItem.appendChild(cardHeader);
                        accordionItem.appendChild(answerDiv);

                        accordion.appendChild(accordionItem);
                    });
                })
                .catch(error => console.error('Error fetching or parsing data:', error));
        }

        // Call the function to populate the Q&A Accordion
        populateAccordion();
    </script>

</body>

</html>
