const jobs = [
    {
      title: "Software Engineer",
      image: "img/software-engineer.svg",
      details:
        "Responsible for designing, developing and maintaining software systems and applications.",
      openPositions: "2",
      link: "#",
    },
  
    {
      title: "Data Scientist",
      image: "img/data-scientist.svg",
      details:
        "Responsible for collecting, analyzing and interpreting large data sets to help organizations make better decisions.",
      openPositions: "3",
      link: "#",
    },
  
    {
      title: "Project Manager",
      image: "img/project-manager.svg",
      details:
        "Responsible for planning, executing and closing projects on time and within budget.",
      openPositions: "1",
      link: "#",
    },
  
    {
      title: "Product Manager",
      image: "img/product-manager.svg",
      details:
        "Responsible for managing the entire product life cycle, from ideation to launch and post-launch maintenance.",
      openPositions: "1",
      link: "#",
    },
  
    {
      title: "Sales Representative",
      image: "img/sales-representative.svg",
      details:
        "Responsible for reaching out to potential customers and closing sales deals.",
      openPositions: "4",
      link: "#",
    },
  
    {
      title: "Marketing Manager",
      image: "img/marketing-manager.svg",
      details:
        "Responsible for creating and executing marketing strategies to promote a company or product.",
      openPositions: "1",
      link: "#",
    },
  ];
  
  const jobsHeading = document.querySelector(".jobs-list-container h2");
const jobsContainer = document.querySelector(".jobs-list-container .jobs");
  const jobSearch = document.querySelector(".jobs-list-container .job-search");
  const postJobButton = document.getElementById('postJobButton');
  const postJobForm = document.getElementById('job-form'); // Changed the ID to match the form
  
 // Add a click event listener to the "Post a Job" button
postJobButton.addEventListener('click', () => {
  // Display the post job form
  postJobForm.style.display = 'block';
});
// Add a submit event listener to the job posting form
postJobForm.addEventListener('submit', (e) => {
  e.preventDefault(); // Prevent the form from submitting

  // Here, you can access form fields and their values
  const jobTitle = document.getElementById('jobTitle').value;
  const jobDetails = document.getElementById('jobDetails').value;

  // Create a new job object and add it to the jobs array
  const newJob = {
    title: jobTitle,
    details: jobDetails,
    // Add other properties as needed
  };

  jobs.push(newJob);

  // Hide the form after submission
  postJobForm.style.display = 'none';

  // Re-render the job listings with the new job
  createJobListingCards();
});

  let searchTerm = "";
  
  if (jobs.length == 1) {
    jobsHeading.innerHTML = `${jobs.length} Job`;
  } else {
    jobsHeading.innerHTML = `${jobs.length} Jobs`;
  }

  // Function to handle the delete action
function handleDelete(jobCard, jobToDelete) {
  // Remove the job card from the DOM
  jobCard.remove();

  // Find the index of the job in the jobs array based on the jobToDelete object
  const indexToDelete = jobs.findIndex((job) => job === jobToDelete);

  if (indexToDelete !== -1) {
    // Remove the job from the jobs array
    jobs.splice(indexToDelete, 1);
  }
}

  const createJobListingCards = () => {
    jobsContainer.innerHTML = "";
  
    jobs.forEach((job) => {
      if (job.title.toLowerCase().includes(searchTerm.toLowerCase())) {
        let jobCard = document.createElement("div");
        jobCard.classList.add("job");
  
        let image = document.createElement("img");
        image.src = job.image;
  
        let title = document.createElement("h3");
        title.innerHTML = job.title;
        title.classList.add("job-title");
  
        let details = document.createElement("div");
        details.innerHTML = job.details;
        details.classList.add("details");
  
        let detailsBtn = document.createElement("a");
        detailsBtn.href = job.link;
        detailsBtn.innerHTML = "More Details";
        detailsBtn.classList.add("details-btn");

        let deleteIcon = document.createElement("img");
        deleteIcon.src = "img/delete.svg"; // Replace with the actual path to your delete SVG icon
        deleteIcon.alt = "Delete";
        deleteIcon.classList.add("delete-icon");

        // Add a click event listener to the delete icon
        deleteIcon.addEventListener("click", () => {
        // Handle the delete action here
        handleDelete(jobCard, job); // Pass the job card element and job object to the handleDelete function
        });

        // Function to handle the delete action
        function handleDelete(jobCard, jobToDelete) {
        // Remove the job card from the DOM
        jobCard.remove();

  // Find the index of the job in the jobs array based on the jobToDelete object
  const indexToDelete = jobs.findIndex((job) => job === jobToDelete);

  if (indexToDelete !== -1) {
    // Remove the job from the jobs array
    jobs.splice(indexToDelete, 1);
  }
}

// Function to handle the edit action
function handleEdit(job) {
  // For simplicity, let's open an alert with the job title as a placeholder.
  const newJobTitle = prompt("Edit Job Title:", job.title);

  if (newJobTitle !== null) {
    // Update the job title in the jobs array
    job.title = newJobTitle;

    // Update the job card in the DOM
    const jobCard = document.querySelector(`.job-title:contains("${job.title}")`);
    if (jobCard) {
      jobCard.innerHTML = newJobTitle;
    }
  }
}
// Add a click event listener to the "Post a Job" button
postJobButton.addEventListener('click', () => {
  // Display an alert window with your custom content
  const alertContent = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="newjob.css">
        <title>Admin Post Job</title>
    </head>
    <body>
        <h1>Post a Job</h1>
        <form id="job-form">
            <label for="job-title">Job Title:</label>
            <input type="text" id="job-title" name="job-title" required>

            <label for="job-description">Job Description:</label>
            <textarea id="job-description" name="job-description" required></textarea>

            <label for="job-location">Job Location:</label>
            <input type="text" id="job-location" name="job-location" required>

            <label for="job-type">Job Type:</label>
            <select id="job-type" name="job-type" required>
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="contract">Contract</option>
            </select>

            <label for="job-salary">Job Salary:</label>
            <input type="text" id="job-salary" name="job-salary" required>

            <button type="submit">Post Job</button>
        </form>
        
        <div id="job-link" style="display: none;">
            <p>Job successfully posted! Here's the link:</p>
            <a id="job-url" href="#" target="_blank"></a>
        </div>
    </body>
    </html>
  `;

  // Show the alert
  showAlert(alertContent);
});

// Function to display the alert
function showAlert(content) {
  // Create a modal dialog
  const modal = document.createElement('div');
  modal.className = 'modal';
  modal.innerHTML = content;

  // Display the modal dialog
  document.body.appendChild(modal);
}

        let editIcon = document.createElement("img");
        editIcon.src = "img/edit.svg"; // Replace with the actual path to your edit SVG icon
        editIcon.alt = "Edit";
        editIcon.classList.add("edit-icon");

        // Add a click event listener to the edit icon
        editIcon.addEventListener("click", () => {
        // Handle the edit action here
        handleEdit(job);
        });

        let openPositions = document.createElement("span");
        openPositions.classList.add("open-positions");
  
        if (job.openPositions == 1) {
          openPositions.innerHTML = `${job.openPositions} open position`;
        } else {
          openPositions.innerHTML = `${job.openPositions} open positions`;
        }
  
        jobCard.appendChild(image);
        jobCard.appendChild(title);
        jobCard.appendChild(details);
        jobCard.appendChild(detailsBtn);
        jobCard.appendChild(deleteIcon); // Add the delete icon
        jobCard.appendChild(editIcon); // Add the edit icon
        jobCard.appendChild(openPositions);
  
        jobsContainer.appendChild(jobCard);
      }
    });
  };
  
  createJobListingCards();
  
  jobSearch.addEventListener("input", (e) => {
    searchTerm = e.target.value;
  
    createJobListingCards();
  });
