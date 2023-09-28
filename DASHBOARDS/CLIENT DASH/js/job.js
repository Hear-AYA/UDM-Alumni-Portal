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
