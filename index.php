<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Family Expense Tracker</title>
        <!-- Favicon-->
        
        <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/HMstyle.css" rel="stylesheet">
	<link rel="icon"  type="image/png" href="logo.png"/>
    </head>
    <body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
				  
                  <div class="container">
                      <img src="assets/images/logo.png" class="navbar-logo" alt="" />
                    <a href="#" class="navbar-brand">Family Expense Tracker</a>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#navmenu"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navmenu">
                      <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                          <a href="#features" class="nav-link">Features</a>
                        </li>
                        <li class="nav-item">
                          <a href="#budget" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                          <a href="#contact" class="nav-link">Contact Us</a>
                        </li>
                        <a href="Login.php" class="btn btn-primary px-3 mx-3">Login</a>
                        <a href="register.php" class="btn btn-success px-3 ">Register</a>
                      </ul>
                    </div>
                  </div>
        </nav>
        <section
    class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
  >
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>New Way of Tracking Expenses using the <span class="text-warning"> Family Expense Tracker</span></h1>
          <p class="lead my-4">
            The only app that gets your money into shape
          </p>
          <a href="register.php" class="btn btn-success px-3 fs-4 ">Try Now</a>
          
        </div>
        <img
          class="img-fluid w-50 h-25 d-none d-sm-block mb-3"
          src="assets/images/header1.jpg"
          alt=""
        />
      </div>
    </div>
  </section>

  <!-- Boxes -->
  <section id="features" class="p-5">
    <div class="container">
      <div class="row text-center g-4">
        <h2>Features</h2>
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-bell"></i>
              </div>
              <h3 class="card-title mb-3">Real time update</h3>
              <p class="card-text">
                 with charts that get updated immediately an expense is added hence the users are able to constaly keep track of  their expenses. 
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-secondary text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-shield-lock"></i>
              </div>
              <h3 class="card-title mb-3">Encryption</h3>
              <p class="card-text">
                The users password are also hashed so not even the systems admin will be able to access the users passwords
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="card bg-dark text-light">
            <div class="card-body text-center">
              <div class="h1 mb-3">
                <i class="bi bi-collection"></i>
              </div>
              <h3 class="card-title mb-3">Categorized expenses 
              </h3>
              <p class="card-text">
                using a method called enveloping which is used to divide the expenses depending on their category giving the user an  easier way of keeping track of their expenses. 
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sections -->
  <section id="welcome" class="p-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <img src="assets/images/family1.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-md p-5">
          <h2>Welcome to Family Expesne Tracker (FEM) </h2>
          <p class="lead">
            Budget your finances to know where your money is going.
          </p>
          <p>
            FEM is a complete online money management tool designed to keep track of all your transactions and bank accounts from your computer, mobile phone, or iPad.
          </p>
          
        </div>
      </div>
    </div>
  </section>

  <section id="budget" class="p-5 bg-dark text-light">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md p-5">
          <h2>Why budget your income?</h2>
          <p class="lead">
            Helps create financial stability
          </p>
          <p>
             By tracking expenses and following a plan, a budget makes it easier to pay bills on time, build an emergency fund, and save for major expenses such as a car or home.
          </p>
          <a href="#" class="btn btn-light mt-3">
            <i class="bi bi-chevron-right"></i> Read More
          </a>
        </div>
        <div class="col-md">
          <img src="assets/images/family2.jpg" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>

  <!-- Question Accordion -->
  <section id="questions" class="p-5">
    <div class="container">
      <h2 class="text-center mb-4">Frequently Asked Questions</h2>
      <div class="accordion accordion-flush" id="questions">
        <!-- Item 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-one"
            >
              Where exactly are you located?
            </button>
          </h2>
          <div
            id="question-one"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
              We are located in the Nairobi Central Business District
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-two"
            >
            How Much Should I Set Aside for Investments?
            </button>
          </h2>
          <div
            id="question-two"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
                When deciding how much you should put aside to save or invest, there are many factors to consider, including your age, disposable income, and liquidity needs.
            </div>
          </div>
        </div>
        <!-- Item 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-three"
            >
            How Should I Maintain and Update My Budget?
            </button>
          </h2>
          <div
            id="question-three"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
                In the first few months, it's essential to review account statements regularly and see exactly how much you're spending and on what. These figures should be compared to the amount set up in your budget, and any adjustments should be made to reflect the reality of your life. This is the best and easiest way for your budget to remain relevant in your financial life.
            </div>
          </div>
        </div>
        <!-- Item 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-four"
            >
            Why Do I Always Have Expenses That Don't Fit Into My Budget?
            </button>
          </h2>
          <div
            id="question-four"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
                Some people stop using a budget because many expenses don't seem to have a place in their budget. This is partly to be expected and is easy to fix. Any good budget will have a "miscellaneous" category for all disparate expenses that come up in a given month or year.

                A target budget for miscellaneous expenses can be made by simply looking over purchases made over a few months and calculating a simple average. What came up that had to be fixed, bought, or borrowed? Would you be able to include those surprises in any of your other categories? If not, add these miscellaneous costs to your budget to cover for the rest of the year.
            </div>
          </div>
        </div>
        <!-- Item 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#question-five"
            >
            How Much Should I Budget for Eating Out?
            </button>
          </h2>
          <div
            id="question-five"
            class="accordion-collapse collapse"
            data-bs-parent="#questions"
          >
            <div class="accordion-body">
                Spending a huge amount of money on dining and takeout is an easy trap to fall into for a lot of us. We get coffee on the go, grab lunch with friends and leave work too tired to cook at home. Over the course of a month, all that eating out can really take a bite out of your budget.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Reviews" class="p-5 bg-primary">
    <div class="container">
      <h2 class="text-center text-white">Reviews</h2>
      
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img
                src="https://randomuser.me/api/portraits/men/11.jpg"
                class="rounded-circle mb-3"
                alt=""
              />
              <h3 class="card-title mb-3"> Dave </h3>
              <p class="card-text">
                "Honestly, I am very impressed with this service and find it amazing that it is free. Great work to the FEM team. You have been around for a while and it is clear that you try to meet everything that your users suggest. Great work."
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img
                src="https://randomuser.me/api/portraits/women/11.jpg"
                class="rounded-circle mb-3"
                alt=""
              />
              <h3 class="card-title mb-3">Shana</h3>
              <p class="card-text">
                "I like the fact that I am able to input my bills to match my income for the month and see what I have left for the month. I will be starting a new position getting paid once a month this will help me a great deal with budgeting money."
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img
                src="https://randomuser.me/api/portraits/men/12.jpg"
                class="rounded-circle mb-3"
                alt=""
              />
              <h3 class="card-title mb-3">Jodie</h3>
              <p class="card-text">
                "Thank you. I looked for hours to find a useful tool for budgeting and you have exceeded my expectations. "
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <img
                src="https://randomuser.me/api/portraits/women/12.jpg"
                class="rounded-circle mb-3"
                alt=""
              />
              <h3 class="card-title mb-3">Jennifer</h3>
              <p class="card-text">
                Thanks again for your site. You are helping the ordinary family keep everything straight, and possible get out of debt. THANK YOU!"
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- Contact  -->
   <section id = "contact" class="p-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md">
          <h2 class="text-center mb-4">Contact Info</h2>
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">Main Location:</span> Nairobi Kenya
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Customer Service:</span> (+254)712345678
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Customer service:</span> (+254)
              contact@familyexpensetracker.test
            </li>
            
          </ul>
        </div>
        
      </div>
    </div>
  </section>

       
        <!-- Footer-->
        <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
          <p class="lead">Copyright &copy; Adrian Amge </p>
  
          <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
          </a>
        </div>
      </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
