
// script.js
// Function to load content into the content div
function loadContent(file) {
    // Perform AJAX request or load content in another way
    // For simplicity, let's assume there's a function loadContentFromFile(file) that loads content from the server
    loadContentFromFile(file);

    // Change the URL without reloading the page
    history.pushState({ file: file }, null, `?file=${file}`);
}

// Function to handle popstate event (triggered when back/forward buttons are used)
window.onpopstate = function (event) {
    const file = event.state ? event.state.file : null;
    if (file) {
        // Load content when navigating back/forward
        loadContentFromFile(file);
    }
};

// Load content from the file
function loadContentFromFile(file) {
    const contentDiv = document.getElementById('content');

    // Use AJAX or any other method to load content from the server
    // Replace the following line with your actual content loading logic
    // For example, using fetch for simplicity
    fetch(file)
        .then(response => response.text())
        .then(data => {
            // Display the loaded content in the content div
            contentDiv.innerHTML = data;
        })
        .catch(error => {
            console.error('Error loading content:', error);
        });
}

// Check if there's a file parameter in the URL on page load
window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const fileParam = urlParams.get('file');
    if (fileParam) {
        // Load content based on the file parameter
        loadContentFromFile(fileParam);
    }
};

// script.js loan search function

function searchLoans() {
    const nic = document.getElementById('nic').value;

    // Perform AJAX request or any other method to search for loans based on the NIC
    // Replace the following line with your actual search logic
    const searchResults = performSearch(nic);

    // Display the search results in the 'searchResults' div
    document.getElementById('searchResults').innerHTML = searchResults;
}

// Example function to simulate a search (replace with your actual search logic)
function performSearch(nic) {
    // Simulating search results for demonstration purposes
    const results = `<p>Search results for NIC: ${nic}</p>
                     <table>
                        <!-- Your table structure for displaying loan records -->
                        <thead>
                            <tr>
                                <th>Loan ID</th>
                                <th>Amount</th>
                                <!-- Add more columns as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>5000</td>
                                <!-- Add more rows as needed -->
                            </tr>
                        </tbody>
                    </table>`;

    return results;
}

// Function to add applicant details to the grid
function addApplicant() {
    const form = document.getElementById('registrationForm');
    const grid = document.getElementById('applicantGrid');
    
    // Create a new row in the grid
    const newRow = document.createElement('div');
    newRow.classList.add('applicant-row');
    
    // Extract applicant details from the form
    const name = form.elements['applicantName'].value;
    const gender = form.elements['applicantGender'].value;
    const address = form.elements['applicantAddress'].value;
    const contact = form.elements['applicantContact'].value;
    const nic = form.elements['applicantNIC'].value;
    const age = form.elements['applicantAge'].value;
    
    // Create HTML content for the new row
    newRow.innerHTML = `
        <div>Name: ${name}</div>
        <div>Gender: ${gender}</div>
        <div>Address: ${address}</div>
        <div>Contact: ${contact}</div>
        <div>NIC: ${nic}</div>
        <div>Age: ${age}</div>
        <button onclick="editApplicant(this)">Edit</button>
        <button onclick="deleteApplicant(this)">Delete</button>
    `;
    
    // Append the new row to the grid
    grid.appendChild(newRow);
    
    // Clear the form fields after adding applicant
    clearForm();
}

// Function to clear the form fields
function clearForm() {
    const form = document.getElementById('registrationForm');
    form.reset();
}

// Function to handle form submission (placeholder implementation)
function submitForm() {
    // Placeholder for form submission logic
    alert('Form submitted successfully!');
}
