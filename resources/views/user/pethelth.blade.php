<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles for the accordion */
        body {
            background-color: #f5f5f5;
        }

        .pet-care-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pet-care-header {
            margin-bottom: 30px;
        }

        .pet-care-card {
            border: none;
            margin-bottom: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .pet-care-card-header {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .pet-care-card-header:hover {
            background-color: #0056b3;
        }

        .pet-care-btn-link {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .pet-care-btn-link:hover {
            text-decoration: underline;
        }

        .pet-care-collapse.show {
            background-color: #fff;
        }

        .pet-care-card-body {
            padding: 15px;
        }
    </style>
</head>

<body>

    <div class="pet-care-container mt-4">
        <div class="pet-care-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="section-heading">
                <h2 id="producttittle">Pet Care Advice</h2>
            </div>
        </div>

        <!-- Create an empty accordion for Q&A -->
        <div id="petCareAccordion">
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
                    var accordion = document.getElementById("petCareAccordion");

                    data.forEach(function (item, index) {
                        // Create an accordion item for each Q&A pair
                        var accordionItem = document.createElement("div");
                        accordionItem.className = "pet-care-card";

                        var cardHeader = document.createElement("div");
                        cardHeader.className = "pet-care-card-header";

                        var questionButton = document.createElement("button");
                        questionButton.className = "btn pet-care-btn-link";
                        questionButton.setAttribute("data-toggle", "collapse");
                        questionButton.setAttribute("data-target", `#answer-${index}`);
                        questionButton.setAttribute("aria-expanded", "false");
                        questionButton.setAttribute("aria-controls", `answer-${index}`);
                        questionButton.innerHTML = item.Advice;

                        cardHeader.appendChild(questionButton);

                        var answerDiv = document.createElement("div");
                        answerDiv.id = `answer-${index}`;
                        answerDiv.className = "collapse pet-care-collapse";
                        answerDiv.setAttribute("aria-labelledby", `question-${index}`);
                        answerDiv.setAttribute("data-parent", "#petCareAccordion");

                        var answerCardBody = document.createElement("div");
                        answerCardBody.className = "card-body pet-care-card-body";
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
