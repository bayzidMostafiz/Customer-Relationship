<?php @include "inc/header.php";?>

<div class="container py-5">
  <div class="form-wrapper">
    <div class="bg-light-300 p-3 br-10 text-center mb-4">
      <h3>Become a Provider</h3>
      <p>List your service & get leads around you</p>
    </div>

    <form id="providerForm">
      <!-- Category Selection -->
      <div class="mb-3">
        <label class="form-label">What type of Service do you Provide?</label>
        <select class="form-select">
          <option>Select Service</option>
          <option>House Cleaning</option>
          <option>Car Wash</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Popular Service Categories</label>
        <div class="category-badge">
          <span class="badge d-inline-flex align-items-center mb-2 me-2">
            <img src="assets/img/icons/service-icon-01.svg" alt="icon" class="me-2">Construction
          </span>
          <span class="badge d-inline-flex align-items-center mb-2 me-2">
            <img src="assets/img/icons/service-icon-02.svg" alt="icon" class="me-2">Removals
          </span>
          <span class="badge d-inline-flex align-items-center mb-2 me-2">
            <img src="assets/img/icons/service-icon-03.svg" alt="icon" class="me-2">Furniture Assembly
          </span>
        </div>
      </div>

      <!-- Sub Services -->
      <div class="mb-3">
        <label class="form-label">Sub Services You Provide</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="service1">
          <label class="form-check-label" for="service1">Commercial Property</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="service2">
          <label class="form-check-label" for="service2">Glass Cleaning</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="service3">
          <label class="form-check-label" for="service3">Carpet Washing</label>
        </div>
      </div>

      <!-- Location Info -->
      <div class="mb-3">
        <label class="form-label">City</label>
        <select class="form-select">
          <option>Rochester</option>
          <option>Wisbech</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">State</label>
        <select class="form-select">
          <option>Newyork</option>
          <option>Fenland</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Country</label>
        <select class="form-select">
          <option>United States</option>
          <option>United Kingdom</option>
        </select>
      </div>

      <!-- Personal Info -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Your Name</label>
          <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Company Name</label>
          <input type="text" class="form-control" placeholder="Company name">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="col-md-6 mb-3">
          <label class="form-label">Phone Number</label>
          <input type="text" class="form-control" placeholder="Phone number">
        </div>
      </div>

      <!-- Gender -->
      <div class="mb-3">
        <label class="form-label d-block">Select Gender</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" checked>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female">
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>

      <!-- Company Details -->
      <div class="mb-3">
        <label class="form-label d-block">Does your company have a website?</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="website" id="yes" checked>
          <label class="form-check-label" for="yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="website" id="no">
          <label class="form-check-label" for="no">No</label>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label d-block">Number of Employees</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="emp" id="self" checked>
          <label class="form-check-label" for="self">Self-employed</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="emp" id="two">
          <label class="form-check-label" for="two">2–10</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="emp" id="three">
          <label class="form-check-label" for="three">11–50</label>
        </div>
      </div>

      <!-- Submit -->
      <div class="text-end mt-4">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>


    <?php @include "inc/footer.php";?>