const jobs = [
  {
    title: "Instructor III",
    details:
      "Gives lessons that allow students to increase their knowledge of a specific subject. By being proficient at job duties, help those they instruct prepare for future opportunities, such as gaining additional education or performing well in their chosen career.",
    openPositions: "2",
    link: "#",
  },

  {
    title: "Assistant Professor I",
    details:
      "Responsible for delivering lectures and coordinating other departmental activities. Should be able to offer academic support to students when required. Should be able to attend various conferences and seminars. Also be able to prepare presentations and deliver guest lectures.",
    openPositions: "3",
    link: "#",
  },

  {
    title: "Assistant Professor III",
    details:
      "Should display excellent academic background. In addition to this, should also be able to address students’ questions and queries. A successful candidate should be well-versed with the educational policies and any changes in the field of education.",
    openPositions: "1",
    link: "#",
  },


  {
    title: "Project Manager Assistant Professor III",
    details:
      "Should display excellent academic background. In addition to this, should also be able to address students’ questions and queries. A successful candidate should be well-versed with the educational policies and any changes in the field of education. ",
    openPositions: "1",
    link: "#",
  },

  {
    title: "City Government Assistant Department Head III",
    details:
      "Duties include managing inquiries and complaints, developing strategic solutions, satisfaction, and identifying opportunities. Plan, direct, supervises, and coordinates activities/operations in the department. Education. Bachelor's Degree. Experience.",
    openPositions: "1",
    link: "#",
  },

  {
    title: "Sales Representative Administrative Assistant I ( Secretary I)",
    details:
      "Arranging and scheduling appointments, meetings, and events. Monitoring office supplies and ordering replacements. Assisting with copying, scanning, faxing, emailing, note-taking, and travel bookings. Preparing facilities and arranging refreshments for events, if required.",
    openPositions: "4",
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

const qualificationsInput = createFormInput(
  "Qualifications Standard",
  "text",
  job.qualifications|| ""
);

const requirementsInput = createFormInput(
  "Requirements",
  "text",
  job.requirements || ""
);

// Append the form fields to the form
editForm.appendChild(positionTitleInput);
editForm.appendChild(salaryInput);
editForm.appendChild(qualificationsInput);
editForm.appendChild(requirementsInput);


// Add a submit button for the form
const submitButton = document.createElement("button");
submitButton.textContent = "Save Changes";
submitButton.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent the form from submitting

  // Update the job details based on the form inputs
  job.title = positionTitleInput.querySelector("input").value;
  job.monthlySalary = salaryInput.querySelector("input").value;
  job.qualifications = qualificationsInput.querySelector("input").value;
  job.requirements = requirementsInput.querySelector("input").value;
  
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
  
  const requirementsInput = createFormInput(
    "Requirements",
    "text",
    job.requirements || ""
  );
  
  const salaryInput = createFormInput(
    "Salary/Job/Pay Grade",
    "text",
    job.salary || ""
  );
  
  const monthlySalaryInput = createFormInput(
    "Monthly Salary",
    "text",
    job.monthlySalary || ""
  );
  
  // Qualifications section
  const qualificationsFieldset = document.createElement("fieldset");
  qualificationsFieldset.innerHTML = "<legend>Qualifications</legend>";
  
  const educationInput = createFormInput(
    "Education",
    "text",
    job.qualifications?.education || ""
  );
  
  const trainingInput = createFormInput(
    "Training",
    "text",
    job.qualifications?.training || ""
  );
  
  const experienceInput = createFormInput(
    "Experience",
    "text",
    job.qualifications?.experience || ""
  );
  
  const eligibilityInput = createFormInput(
    "Eligibility",
    "text",
    job.qualifications?.eligibility || ""
  );
  
  const researchOutputInput = createFormInput(
    "Research Output",
    "text",
    job.qualifications?.researchOutput || ""
  );
  
  const communityExtensionServiceInput = createFormInput(
    "Community Extension Service",
    "text",
    job.qualifications?.communityExtensionService || ""
  );
  
  const competencyInput = createFormInput(
    "Competency (if applicable)",
    "text",
    job.qualifications?.competency || ""
  );
  
  const placeOfAssignmentInput = createFormInput(
    "Place of Assignment",
    "text",
    job.qualifications?.placeOfAssignment || ""
  );
  
  // Append the form fields to the form
  editForm.appendChild(positionTitleInput);
  editForm.appendChild(requirementsInput);
  editForm.appendChild(salaryInput);
  editForm.appendChild(monthlySalaryInput);
  
  qualificationsFieldset.appendChild(educationInput);
  qualificationsFieldset.appendChild(trainingInput);
  qualificationsFieldset.appendChild(experienceInput);
  qualificationsFieldset.appendChild(eligibilityInput);
  qualificationsFieldset.appendChild(researchOutputInput);
  qualificationsFieldset.appendChild(communityExtensionServiceInput);
  qualificationsFieldset.appendChild(competencyInput);
  qualificationsFieldset.appendChild(placeOfAssignmentInput);
  editForm.appendChild(qualificationsFieldset);
  
  // Add a submit button for the form
  const submitButton = document.createElement("button");
  submitButton.textContent = "Save Changes";
  submitButton.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent the form from submitting
  
    // Update the job details based on the form inputs
    job.title = positionTitleInput.querySelector("input").value;
    job.requirements = requirementsInput.querySelector("input").value;
    job.salary = salaryInput.querySelector("input").value;
    job.monthlySalary = monthlySalaryInput.querySelector("input").value;
    
    job.qualifications = {
      education: educationInput.querySelector("input").value,
      training: trainingInput.querySelector("input").value,
      experience: experienceInput.querySelector("input").value,
      eligibility: eligibilityInput.querySelector("input").value,
      researchOutput: researchOutputInput.querySelector("input").value,
      communityExtensionService: communityExtensionServiceInput.querySelector("input").value,
      competency: competencyInput.querySelector("input").value,
      placeOfAssignment: placeOfAssignmentInput.querySelector("input").value,
    };
  
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
  
        let buttonContainer = document.createElement("div"); // Create a container for buttons
        buttonContainer.classList.add("button-container");
  
        let editIcon = document.createElement("img");
        editIcon.src = "img/edit.svg"; // Replace with the actual path to your edit SVG icon
        editIcon.alt = "Edit";
        editIcon.classList.add("edit-icon");
  
        // Add a click event listener to the edit icon
        editIcon.addEventListener("click", () => {
          // Handle the edit action here
          handleEdit(job);
        });
  
        let deleteIcon = document.createElement("img");
        deleteIcon.src = "img/delete.svg"; // Replace with the actual path to your delete SVG icon
        deleteIcon.alt = "Delete";
        deleteIcon.classList.add("delete-icon");
  
        // Add a click event listener to the delete icon
        deleteIcon.addEventListener("click", () => {
          // Handle the delete action here
          handleDelete(jobCard, job);
        });
  
        buttonContainer.appendChild(editIcon); // Add the edit icon to the button container
        buttonContainer.appendChild(deleteIcon); // Add the delete icon to the button container
  
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
  
        let openPositions = document.createElement("span");
        openPositions.classList.add("open-positions");
  
        if (job.openPositions == 1) {
          openPositions.innerHTML = `${job.openPositions} open position`;
        } else {
          openPositions.innerHTML = `${job.openPositions} open positions`;
        }
  
        jobCard.appendChild(buttonContainer); // Add the button container to the job card
        jobCard.appendChild(title);
        jobCard.appendChild(details);
        jobCard.appendChild(detailsBtn);
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

createJobListingCards();

jobSearch.addEventListener("input", (e) => {
searchTerm = e.target.value;

createJobListingCards();
});
