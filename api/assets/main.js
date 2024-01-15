// jQuery(document).ready(function($){


// });

$(document).on('submit', '#subscriptionForm', function (e) {
    // Add your subscription logic here
    //document.getElementById("subscriptionForm").reset(); // Reset the form after submission
    showModal();
    e.preventDefault();

});



function showModal() {
    // Add your subscription logic here

    // Sample data (replace with your own)
    var users = [
        { imgSrc: 'https://embed.filekitcdn.com/e/898UQfCbkN4VwgpQCm46MR/npJHN7dLgr7tdhvnTttwtN?fit=crop&amp;h=320&amp;w=320', 
        name: 'Contrarian Thinking', 
        description: 'Join 500,000+ Contrarians getting the tactics and tools to achieve financial freedom in their inbox every week. Newsletter topics: wealth building, “boring businesses,” and entrepreneur through acquisition.', 
        selected: true },
        { imgSrc: 'https://embed.filekitcdn.com/e/dHG4aSRazwrs3LA9HPR1C/i1XWSyt2g5TBpg6xWhSX4e?fit=crop&amp;h=320&amp;w=320', 
        name: 'Ali Abdaal', 
        description: 'I\'m the world\'s most followed productivity expert and I share evidence-based principles, strategies, and tools to help you build a life you love. Subscribe for actionable productivity tips, practical life advice, and high-quality insights from across the web.', 
        selected: true },
        { imgSrc: 'https://embed.filekitcdn.com/e/vPLTnfkVPWWhcEdwuDSHov/c6rw2QqbDhyw3x9xc4SbiE?fit=crop&amp;h=320&amp;w=320', 
        name: 'Sahil Bloom', 
        description: 'Sahil Bloom is an entrepreneur, investor, and creator. Each week, millions of followers and subscribers receive his actionable ideas to help them build high-performing, healthy, wealthy lives.', 
        selected: true }
    ];

    // Function to create HTML structure for a user row
    function createUserRowHTML(user) {
        return `
            <div class="row">
                <div class="col-img col-md-2">
                    <img src="${user.imgSrc}" alt="${user.name}" class="img-fluid rounded">
                </div>
                <div class="col-txt col-md-9">
                    <h5>${user.name}</h5>
                    <p>${user.description}</p>
                </div>
                <div class="col-check col-md-1">
                    <input class="checkbox" type="checkbox" ${user.selected ? 'checked' : ''}>
                </div>
            </div>
        `;
    }

    // Populate modal content dynamically
    var modalBody = document.getElementById("modalBody");
    modalBody.innerHTML = ""; // Clear previous content

    // Create and append HTML for each user row
    users.forEach(function (user, index) {
        var userRowHTML = createUserRowHTML(user);

        modalBody.innerHTML += userRowHTML;

        // Add <hr> after the user row if it's not the last one
        if (index < users.length - 1) {
            modalBody.innerHTML += '<hr>';
        }
    });


    // Show the modal
    $('#subscriptionModal').modal('show');
}

function toggleSelectAll() {
    const checkboxes = document.querySelectorAll('#subscriptionModal input[type="checkbox"]');
    
    const desiredState = !checkboxes[0].checked;

    checkboxes.forEach(checkbox => checkbox.checked = desiredState);

    const buttonText = desiredState ? 'Deselect all' : 'Select all';
    document.getElementById('deselectAllButton').innerHTML = `<span class="text-sm font-semibold text-gray-800 py-2">${buttonText}</span>`;
}

document.getElementById('deselectAllButton').addEventListener('click', toggleSelectAll);
