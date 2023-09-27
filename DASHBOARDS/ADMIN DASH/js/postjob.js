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

let searchTerm = "";

if (jobs.length == 1) {
jobsHeading.innerHTML = `${jobs.length} Job`;
} else {
jobsHeading.innerHTML = `${jobs.length} Jobs`;
}

function createFormInput(labelText, inputType, inputValue) {
// Create a label element
const label = document.createElement("label");
label.textContent = labelText;

// Create an input element
const input = document.createElement("input");
input.type = inputType;
input.value = inputValue;

// Append the label and input elements to a container (e.g., a div)
const container = document.createElement("div");
container.appendChild(label);
container.appendChild(input);

return container;
}

function createEditForm(job) {
// Create a form element for editing job details
const editForm = document.createElement("form");
editForm.classList.add("edit-form");

// Create form fields for the specified requirements
const positionTitleInput = createFormInput(
  "Position Title",
  "text",
  job.title
);

const salaryInput = createFormInput(
  "Monthly Salary",
  "text",
  job.monthlySalary || ""
);

const requirementsInput = createFormInput(
  "Requirements",
  "text",
  job.requirements || ""
);

const qualificationsInput = createFormInput(
  "Qualifications Standard",
  "text",
  job.qualifications|| ""
);

// Append the form fields to the form
editForm.appendChild(positionTitleInput);
editForm.appendChild(salaryInput);
editForm.appendChild(requirementsInput);
editForm.appendChild(qualificationsInput);


// Add a submit button for the form
const submitButton = document.createElement("button");
submitButton.textContent = "Save Changes";
submitButton.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent the form from submitting

  // Update the job details based on the form inputs
  job.title = positionTitleInput.querySelector("input").value;
  job.monthlySalary = salaryInput.querySelector("input").value;
  job.requirements = requirementsInput.querySelector("input").value;
  job.qualifications = qualificationsInput.querySelector("input").value;
  
  // Close the edit form and update the job card
  editForm.remove();
  createJobListingCards();
});

// Append the submit button to the form
editForm.appendChild(submitButton);

return editForm;
}


function handleEdit(job) {
console.log("Edit button clicked"); // Add this line for debugging
const jobIndex = jobs.findIndex((j) => j.title === job.title);

if (jobIndex !== -1) {
  // Get the job card element by its index in the jobsContainer
  const jobCard = jobsContainer.children[jobIndex];

  // Create the edit form and pass the job object as a parameter
  const editForm = createEditForm(job);

  // Replace the job card content with the edit form
  jobCard.innerHTML = '';
  jobCard.appendChild(editForm);
}
}

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

function createJobListingCards() {
jobsContainer.innerHTML = "";

jobs.forEach((job) => {
  if (job.title.toLowerCase().includes(searchTerm.toLowerCase())) {
    let jobCard = document.createElement("div");
    jobCard.classList.add("job");

    let title = document.createElement("h3");
    title.innerHTML = job.title;
    title.classList.add("job-title");

    let details = document.createElement("div");
    details.innerHTML = job.details;
    details.classList.add("details");

    let detailsBtn = document.createElement("a");
    detailsBtn.href = job.link;
    detailsBtn.textContent = "More Details";
    detailsBtn.classList.add("details-btn");

    let editIcon = document.createElement("img");
    editIcon.src = "img/edit.svg"; // Replace with the actual path to your edit SVG icon
    editIcon.alt = "Edit";
    editIcon.classList.add("edit-icon");

// Updated code for edit icon click event
jobsContainer.addEventListener("click", (event) => {
const editButton = event.target.closest(".edit-icon");
if (editButton) {
  event.preventDefault(); // Prevent the click event from propagating
  console.log("Edit button clicked"); // Add this line for debugging
  const jobCard = editButton.closest(".job");
  const jobTitle = jobCard.querySelector(".job-title").textContent;
  // Find the corresponding job object by title
  const jobObject = jobs.find((job) => job.title === jobTitle);
  if (jobObject) {
    handleEdit(jobObject); // Pass the entire job object to the handleEdit function
  }
}
});


    let deleteIcon = document.createElement("img");
    deleteIcon.src = "img/delete.svg"; // Replace with the actual path to your delete SVG icon
    deleteIcon.alt = "Delete";
    deleteIcon.classList.add("delete-icon");

    // Add a click event listener to the delete icon
    deleteIcon.addEventListener("click", () => {
      // Handle the delete action here
      handleDelete(jobCard, job); // Pass the job card element and job object to the handleDelete function
    });

    let openPositions = document.createElement("span");
    openPositions.classList.add("open-positions");

    if (job.openPositions == 1) {
      openPositions.innerHTML = `${job.openPositions} open position`;
    } else {
      openPositions.innerHTML = `${job.openPositions} open positions`;
    }

    jobCard.appendChild(title);
    jobCard.appendChild(details);
    jobCard.appendChild(detailsBtn);
    jobCard.appendChild(deleteIcon); // Add the delete icon
    jobCard.appendChild(editIcon); // Add the edit icon
    jobCard.appendChild(openPositions);

    jobsContainer.appendChild(jobCard);
  }
});
}

createJobListingCards();

jobSearch.addEventListener("input", (e) => {
searchTerm = e.target.value;

createJobListingCards();
});
