<?php
    include'../ADMIN DASH/connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/Job.css">
    <link rel="stylesheet" href="css/user dash.css">
    <link rel="stylesheet" href="css/myprof.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <title>UDM Alumni Portal</title>
</head>

<style type="text/css">
  .job{
    width: 250px;
  }
</style>
<body>
    <div class="container">
      <div class="topbar">
        <p>Welcome Alumni!</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
        <div class="bg">
          <img src="img/aaa.jpg" alt="avt" class="avt">
        </div>
        
      <div class="sidebar">
        <h1>Dashboard</h1>
          <ul>
          <li>  
            <a href="upcoming events.php">
            <i class="fas fa-bullhorn"></i>
            <div>Events</div>
            </a>
          </li>           
          <li>
            <a href="myprofile.php">
              <i class="fas fa-id-card"></i>
              <div>My Profile</div>
            </a>
          </li>
          <li>
            <a href="Job.php">
              <i class="fas fa-user-tie"></i>
              <div>Job Offerings</div>
            </a>
          </li>
          <li>
            <a href="mapping.php">
              <i class="fas fa-map-marked-alt"></i>
              <div>Mapping Alumni Trajectories</div>
            </a>
          </li>
          <li>
            <a href="logout.php">
              <i class="fas fa-arrow-left"></i>
              <div>Logout</div>
            </a>
          </li>
        </ul>
        <img src="img/udm.png" alt="Avtr" class="avtr">
      </div>
        <div class="jobs-list-container">
          
          <h2>6 Jobs</h2>
          <input class="job-search" type="text" placeholder="Search here..." />
          <div class="jobs"></div>
  
                </div>
  
      <!-- <script src="js/postjob.js"></script> -->

      <script type="text/javascript">


        const jobs = [
          <?php
            $sql = "SELECT * FROM job";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                extract($row);
              ?>{
            id: "<?php echo$id?>",
            title: "<?php echo$position_title?>",
            requirements: "<?php echo$requirements?>",
            job: "<?php echo$job?>",
            monthly_salary: "<?php echo$monthly_salary?>",
            education: "<?php echo$education?>",
            training: "<?php echo$training?>",
            experience: "<?php echo$experience?>",
            eligibility: "<?php echo$eligibility?>",
            research: "<?php echo$research?>",
            community: "<?php echo$community?>",
            competency: "<?php echo$competency?>",
            assignment: "<?php echo$assignment?>",
            open_positions: "<?php echo$open_positions?>",
            details:
              "\
              <?php echo$requirements?><br><br>\
              ",
            openPositions: "<?php echo$open_positions?>",
            link: "details.php?id=<?php echo$id?>",
          },
          <?php
              }
            }
          ?>
         
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

// function createFormInput(labelText, inputType, inputValue) {
// // Create a label element
// const label = document.createElement("label");
// label.textContent = labelText;

// // Create an input element
// const input = document.createElement("input");
// input.type = inputType;
// input.value = inputValue;

// // Append the label and input elements to a container (e.g., a div)
// const container = document.createElement("div");
// container.appendChild(label);
// container.appendChild(input);

// return container;
// }




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
function createFormInput(labelText, inputType, inputValue,inputName) {
  // Create a label element
  const label = document.createElement("label");
  label.textContent = labelText;
  
  // Create an input element
  const input = document.createElement("input");
  input.type = inputType;
  input.value = inputValue;
  input.name = inputName;
  
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
  const positionId = createFormInput(
    "",
    "hidden",
    job.id,
    "id"
  );

  const positionTitleInput = createFormInput(
    "Position Title",
    "text",
    job.title,
    "position_title"
  );
  
  const requirementsInput = createFormInput(
    "Requirements",
    "text",
    job.requirements || "",
    "requirements"
  );
  
  const salaryInput = createFormInput(
    "Salary/Job/Pay Grade",
    "text",
    job.job || "",
    "job"
  );
  
  const monthlySalaryInput = createFormInput(
    "Monthly Salary",
    "text",
    job.monthly_salary || "",
    "monthly_salary"
  );
  
  // Qualifications section
  const qualificationsFieldset = document.createElement("fieldset");
  qualificationsFieldset.innerHTML = "<legend>Qualifications</legend>";
  
  const educationInput = createFormInput(
    "Education",
    "text",
    job.education || "",
    "education"
  );
  
  const trainingInput = createFormInput(
    "Training",
    "text",
    job.training || "",
    "training"
  );
  
  const experienceInput = createFormInput(
    "Experience",
    "text",
    job.experience || "",
    "experience"
  );
  
  const eligibilityInput = createFormInput(
    "Eligibility",
    "text",
    job.eligibility || "",
    "eligibility"
  );
  
  const researchOutputInput = createFormInput(
    "Research Output",
    "text",
    job.research || "",
    "research"
  );
  
  const communityExtensionServiceInput = createFormInput(
    "Community Extension Service",
    "text",
    job.community || "",
    "community"
  );
  
  const competencyInput = createFormInput(
    "Competency (if applicable)",
    "text",
    job.competency || "",
    "competency"
  );
  
  const placeOfAssignmentInput = createFormInput(
    "Place of Assignment",
    "text",
    job.assignment || "",
    "assignment"
  );

  const placeOfPositions = createFormInput(
    "Open positions",
    "text",
    job.open_positions || "",
    "open_positions"
  );
  
  // Append the form fields to the form
  editForm.appendChild(positionId);
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
  qualificationsFieldset.appendChild(placeOfPositions);
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
    editForm.submit();
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
  
        // let deleteIcon = document.createElement("img");
        // deleteIcon.src = "img/delete.svg"; // Replace with the actual path to your delete SVG icon
        // deleteIcon.alt = "Delete";
        // deleteIcon.classList.add("delete-icon");
  
        // // Add a click event listener to the delete icon
        // deleteIcon.addEventListener("click", () => {
        //   // Handle the delete action here
        //   handleDelete(jobCard, job);
        // });
  
        //buttonContainer.appendChild(editIcon); // Add the edit icon to the button container
        // /buttonContainer.appendChild(deleteIcon); // Add the delete icon to the button container
  
        let title = document.createElement("h3");
        title.innerHTML = job.title;
        title.classList.add("job-title");
  
        // let details = document.createElement("div");
        // details.innerHTML = job.details;
        // details.classList.add("details");
  
        let detailsBtn = document.createElement("a");
        detailsBtn.href = job.requirements;
        detailsBtn.textContent = "Link Here";
        // detailsBtn.classList.add("details-btn");
  
        let openPositions = document.createElement("span");
        openPositions.classList.add("open-positions");
  
        if (job.openPositions == 1) {
          openPositions.innerHTML = `${job.openPositions} open position`;
        } else {
          openPositions.innerHTML = `${job.openPositions} open positions`;
        }
  
        jobCard.appendChild(buttonContainer); // Add the button container to the job card
        jobCard.appendChild(title);
        // jobCard.appendChild(details);
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

      </script>

      <?php
        if(isset($_GET['id'])){
          extract($_GET);
          $data="";

          foreach ($_GET as $k => $v){

                if(empty($data)){
                  $data .= " $k='$v' ";
                }else{

                  if($k=="id"){
                    $data .= "$k='$v'";
                  }else{
                    $data .= ", $k='$v' ";
                  }
                  
                }
              }

              if($id==""){
                  $sql="INSERT INTO job SET $data";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully register job post');
                        location.href="Job.php";
                      </script>
                    <?php
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }else{

                  $sql="UPDATE job SET $data WHERE id='$id'";

                  if ($conn->query($sql) === TRUE) {
                    ?>
                      <script type="text/javascript">
                        alert('Successfully update job post ');
                        location.href="Job.php";
                      </script>
                    <?php
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
                }
        }
      ?>
  </body>
  </html>