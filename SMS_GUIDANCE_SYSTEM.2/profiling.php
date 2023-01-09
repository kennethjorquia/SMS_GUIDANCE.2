<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/sidebar.css" />
    <link rel="stylesheet" href="assets/css/card.css" />
    <link rel="stylesheet" href="submod_style/counseling.css"/>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
  </head>
  <body>
    <main class="container-fluid">
      <ul class="topbar m-0 list-unstyled">
        <div
          class="topbarChild d-flex justify-content-between align-items-center"
        >
          <li class="topBarLogo text-dark">
            <div class="logo-details d-flex align-items-center">
              <i class="bx bx-menu rounded-circle" id="btn"></i>
              <img
                class="ms-2 ms-sm-3 my-auto"
                src="assets/images/newLogin/logo.png"
                width="35"
                height="35"
                alt="bcp-logo"
              />
              <div class="logo_name text-dark ms-1 ms-sm-3">BESTLINK</div>
              <div class="my-auto search-boxContainer d-none d-lg-block">
                <input
                  type="text"
                  class="form-control search-box"
                  type="search"
                  placeholder="Search..."
                  aria-label="Example text with button addon"
                  aria-describedby="button-addon1"
                />
              </div>
            </div>
          </li>
          <div class="d-flex align-items-center justify-content-end">
            <li>
              <i class="bx bxs-message-dots fs-4 me-3 mt-1 m-0"></i>
              <i class="bx bxs-bell fs-4 mt-1 m-0"></i>
            </li>
            <li>
              <div class="nav-item dropdown my-auto ms-4">
                <a
                  id="dropdownmenu"
                  class="nav-link dropdown-toggle d-flex align-items-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <h5 class="m-0 d-none d-sm-block">User Name</h5>
                  <img
                    class="ms-0 ms-sm-3"
                    src="assets/images/man.png"
                    width="32"
                    height="32"
                    alt="profile-picture"
                  />
                </a>
                <ul class="dropdown-menu border shadow dropdownContainer">
                  <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="login/login.php">Logout</a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </ul>
      <div class="px-0 d-xl-flex position-relative d-flex">
      <div class="sidebar close rounded shadow">
          <ul class="nav-list p-0 m-0">
            <li class="d-block d-lg-none">
              <i class="bx bx-search"></i>
              <input type="text" placeholder="Search..." />
              <span class="tooltip">Search</span>
            </li>
            <li>
              <a href="index.php">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
              </a>
              <span class="tooltip">Dashboard</span>
            </li>
            <li>
              <a href="profiling.php">
                <i class='bx bxs-user-circle'></i>
                <span class="links_name">Profiling</span>
              </a>
              <span class="tooltip">Profiling</span>
            </li>
            <li>
              <div class="iocn-link arrow">
                <a class="">
                  <i class='bx bx-smile'></i>
                  <span class="links_name">Counseling Service</span>
                </a>
                <i class="bx bx-chevron-down arrow"></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name p-0">Counseling Service</a></li>
                <li><a href="individual.php">Individual Counseling</a></li>
                <li><a href="group.php">Group Counseling</a></li>
              </ul>
              <!-- <span class="tooltip">Analytics</span> -->
            </li>
            <li>
              <a href="appointment.php">
                <i class='bx bxs-calendar'></i>
                <span class="links_name">Appointment</span>
              </a>
              <span class="tooltip">Appointment</span>
            </li>
            <li>
              <a href="visitlogs.php">
               <i class='bx bx-log-in' ></i>
                <span class="links_name">Visit logs</span>
              </a>
              <span class="tooltip">Visit logs</span>
            </li>
            <li>
              <a href="career_orientation.php">
                <i class='bx bx-search-alt'></i>
                <span class="links_name">Career Orientation</span>
              </a>
              <span class="tooltip">Career Orientation</span>
            </li>
            <li>
              <a href="scholarship.php">
                <i class='bx bxs-graduation' ></i>
                <span class="links_name">Scholarship</span>
              </a>
              <span class="tooltip">Scholarship</span>
            </li>
            <li>
              <a href="res.php">
                <i class='bx bx-list-check'></i>
                <span class="links_name">Research/Evaluation/Survey</span>
              </a>
              <span class="tooltip">Research/Evaluation/Survey</span>
            </li>
            <li>
              <a href="student_evaluation.php">
                <i class='bx bxs-user-rectangle'></i>
                <span class="links_name">Student Evaluation</span>
              </a>
              <span class="tooltip">Student Evaluation</span>
            </li>
            <li>
              <a href="reports.php">
                <i class='bx bxs-report' ></i>
                <span class="links_name">Reports</span>
              </a>
              <span class="tooltip">Reports</span>
            </li>
          </ul>
        </div>
<section class="home-section ms-3 p-5 bg-light rounded shadow">
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->

<div class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
</div>



          <h2>PROFILING</h1>
<div class="d-flex justify-content-between align-items-center">
            <div class="dropdown d-flex align-items-center">
            <button href="index.php" type="button" class="btn btn-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
              <button type="file" class="btn btn-secondary ms-1 text-light ">Import</button>
                
</div>   
<nav class="navbar bg-body-tertiary ">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="dropdown py-3 ">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 10 </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">10</a></li>
                 <li><a class="dropdown-item" href="#">25</a></li>
                 <li><a class="dropdown-item" href="#">50</a></li>
                 <li><a class="dropdown-item" href="#">100</a></li>
             </ul>
</div>
  
         <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Student Number</th>
                <th scope="col">Student Name</th>
                <th scope="col">Counseling Type</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
         <tbody>
             <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Cognitive Therapy</td>
                <td>Regular</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".profile">View</button></td>
             </tr>
          </tbody>
        </table>    
<!--------------------------------------------------------------------------edit here------------------------------------------------------------------------------------------->
</section>
      </div>
    </main>

 <!-- Profiling Student Modal -->
  <!-- Personal Information -->
<form data-bs-toggle="modal" data-bs-target=".educationalBackground">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Personal Information:</h1>
      </div>
      <div class="modal-body">
        <div class="div">
          <label for="message-text" class="col-form-label">Name:</label>
          <input type="text" id=""placeholder="Last Name"></input>
          <input type="text" id=""placeholder="First Name"></input>
          <input type="text" id=""placeholder="Middle Name"></input>
        </div>
        <div class="div">
          <div class="d-flex align-items-center">
            <label for="message-text" class="col-form-label">Nickname:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Gender:</label><br>
              <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Choose Gender</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Male</a></li>
                  <li><a class="dropdown-item">Female</a></li>
                </ul>
            <label for="message-text" class="col-form-label">Date of Birth</label>
            <input type="date" id=""></input>
          </div>
        </div>
        <div class="div">
            <label for="message-text" class="col-form-label">Mailing Address:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact Number:</label>
            <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
            <label for="message-text" class="col-form-label">Permanent Address:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Contact Number:</label>
            <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
            <label for="message-text" class="col-form-label">Nationality:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Civil Status:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Religion:</label>
            <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
            <label for="message-text" class="col-form-label">Name of Spouse(if married):</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Spouse's Occupation:</label>
            <input type="text" id=""placeholder=""></input>
        </div>
        <div class="">
          <label for="message-text" class="col-form-label">Birth Order:</label>
          <input type="number" id=""placeholder="Choose..."></input>
          <label for="message-text" class="col-form-label">No. of brother/s:</label>
          <input type="number" id=""placeholder="Choose..."></input>
          <label for="message-text" class="col-form-label">No. of sister/s:</label>
          <input type="number" id=""placeholder="Choose..."></input>
        </div>
        <div class="div">
          <div class="d-flex align-items-center">
            <label for="message-text" class="col-form-label">Living with (Please Select)</label><br>
              <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Choose...</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">1st</a></li>
                  <li><a class="dropdown-item">2nd</a></li>
                  <li><a class="dropdown-item">3rd</a></li>
                </ul>
          </div>
        </div>
        <div class="">
          <label for="message-text" class="col-form-label">Name of Father</label>
          <label for="message-text" class="col-form-label ms-5">Name of Mother</label>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Address:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Nationality:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Religion:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Educ. Attainment:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Occupation:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Company Name:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="date" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Birthdate:</label>
          <input type="date" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Contact Number/s:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">EmailAddress:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="pt-3">
          <label for="message-text" class="col-form-label">Name of Guardian:</label>
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Relationship:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <label for="message-text" class="col-form-label">Address:</label>
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Contact no.:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <label for="message-text" class="col-form-label">Email Address of Guardian:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
        <div class="div">
          <label for="message-text" class="col-form-label">Person to notify in case of emergency:</label>
          <input type="text" id=""placeholder=""></input>
          <label for="message-text" class="col-form-label">Contact no.:</label>
          <input type="text" id=""placeholder=""></input>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Cancel</button>
        <button type="button" class="btn btn-primary">Next</button>
      </div> 
    </div>
  </div>
  </div> 
</form>

  <!-- Educational Background & Insisutional Affiliation -->
<form data-bs-toggle="modal" data-bs-target=".workExperience">
<div class="modal fade educationalBackground" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EDUCATIONAL BACKGROUND:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="div">
          <div class="d-flex align-items-center">
            <label for="message-text" class="col-form-label">Please Select if you are:</label>
              <a class="btn btn-light dropdown-toggle ms-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Choose...</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item">Freshmen</a></li>
                  <li><a class="dropdown-item">Transferee</a></li>
                  <li><a class="dropdown-item">Second Degree</a></li>
                </ul>
          </div>
        </div>
        <h5 class="text-center">Tertiary</h5>
          <div class="bg-light p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3 text-center">Alternative Learning System</h5>
          <div class="bg-light p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3 text-center">Secondary</h5>
          <div class="bg-light p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
          </div>
        <h5 class="pt-3 text-center">Elementary</h5>
          <div class="bg-light p-2">
            <div class="div">
              <label for="message-text" class="col-form-label">School Name:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Address:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
            <div class="div">
              <label for="message-text" class="col-form-label">Year Attended/Graduated:</label>
              <input type="text" id=""placeholder=""></input>
              <label for="message-text" class="col-form-label">Honors:</label>
              <input type="text" id=""placeholder=""></input>
            </div>
          </div>
      </div>

      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">INSTITUTIONAL AFFILIATION:</h1>
      </div>
      <div class="modal-body">
        <div class="bg-light p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Name of Organization:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Affiliation:</label>
            <input type="text" id=""placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Year:</label>
            <input type="text" id=""placeholder=""></input>
            <label for="message-text" class="col-form-label">Status:</label>
            <input type="text" id=""placeholder=""></input>
          </div>
        </div>
      </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

  <!-- Work Experience, Interests -->
<div class="modal fade workExperience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">WORK EXPERIENCE:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="bg-light p-2">
          <div class="div">
            <label for="message-text" class="col-form-label">Company Name:</label>
            <input type="text" id=""placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">Position:</label>
            <input type="text" id=""placeholder=""></input>
          </div>
          <div class="div">
            <label for="message-text" class="col-form-label">From-To:</label>
            <input type="text" id=""placeholder=""></input>
          </div>
        </div>
      </div>
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">INTEREST:</h1>
      </div>
      <div class="modal-body">
        <div class="form-check">
            <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching TV</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Reading Books</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Collecting Items</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Taking care of pets</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Going out w/Friends</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Watching Movies</label>
              </div>
          </div>
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Shopping</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Eating</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Hiking</label>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">TALENTS:</h1>
      </div>
      <div class="modal-body">
        <div class="form-check">
          <div class="div">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dramatic</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="flexCheckIndeterminate"> Singing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="flexCheckIndeterminate"> Dancing</label>
          </div>
          <div class="div">
            <input class="form-check-input" type="checkbox" value="" id="">
            <label class="form-check-label" for="flexCheckIndeterminate"> Painting</label>
          </div>
        </div>
      </div>
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="">CHARACTERISTICS:(you may check more than one Characteristics.)</h1>
      </div>
      <div class="modal-body">
        <div class="form-check">
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Friendly</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Jealous</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Industrious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Stubborn</label>
              </div>
          </div>
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Patient</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Confident</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Calm</label>
              </div>
          </div>
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Kind</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Pessimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Thoughtful</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Insecure</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Humble</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Independent</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Studious</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Talkative</label>
              </div>
          </div>
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Optimistic</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Moody</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Understanding</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Dommineering</label>
              </div>
          </div>
          <div class="col-6 col-xl-4">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Sensitive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Responsive</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Selfish</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Spoiled</label>
              </div>
          </div>
        </div>
        <div class="row g-0 p-2">
          <div class="div">
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Lazy</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Quiet</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Observant</label>
              </div>
              <div class="div">
                <input class="form-check-input" type="checkbox" value="" id="">
                <label class="form-check-label" for="flexCheckIndeterminate"> Tolerant</label>
              </div>
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- View Student Profile Modal 450 -->

 <div class="modal fade profile"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Student Profile</h1>
      </div>
      <div class="modal-body">

      <div class="div d-flex justify-content-between align-items-center">
        <div class="bg-light p-2">
          <img class="ms-0 ms-sm-3" src="assets/images/man.png" width="150" height="150" alt="profile-picture"><br>
          <label for="message-text" class="col-form-label">Jorquia, Kenneth</label><br>
          <label for="message-text" class="col-form-label">19014022</label><br>
          <label for="message-text" class="col-form-label">BSIT 41014</label><br>
          <label for="message-text" class="col-form-label">Status: Regular</label><br>
        </div>
        
      </div>

      <div class="bg-primary text-light mt-2 p-2">
          <label for="message-text" class="col-form-label">VISITS</label>
        </div>
        <div class="p-2">
        <div class="d-flex justify-content-between bg-light align-items-center p-3">
          <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Excuse Letter </a>
              <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Excuse Letter</a></li>
                 <li><a class="dropdown-item" href="#">Cert of Candidacy</a></li>
                 <li><a class="dropdown-item" href="#">Clearance</a></li>
             </ul>
          <input type="email" id="" class="form-control" placeholder="Other Details...">
          <button type="button" class="btn btn-primary">+</button>
        </div>
        </div>

        <div class="accordion accordion-flush p-2" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        EDUCTAIONAL BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"> graduate ng elementary tas tambay nalang.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        HOME AND FAMILY BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Nakakulong si papa si mama nag totongits</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        HEALTH BACKGROUND
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">May TB ako stage 5 level 6</div>
    </div>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> 
    </div>
  </div>
</div> 
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
