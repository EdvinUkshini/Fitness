<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    
    <link rel="stylesheet" href="style.css" />
    <title>Fitness Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

  </head>
  <body>
<?php include 'nav.php';?>

    <!-- Showcase -->
    <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){ ?>
		  <div>
            <h1>Create <span class="text-warning"> Healthy Habits </span></h1>
            <p class="lead my-4">
              We focus on teaching our users the best ways to improve their day 
              to day healthy habits and introduce them to new ones.
              
            </p>
            <p class="lead my-4">
              Start your new journey with us by creating  a new account right below !
            </p>
            <a href="createaccount.php">
              <button class="btn btn-primary btn-lg">
              Create an account
            </button>
            </a>
            
          </div>
		  <?php
		  }elseif(isset($_SESSION['loggedin']) && $_SESSION['role']=="user"){
		  ?>
		              <h1>Create <span class="text-warning"> Healthy Habits </span></h1>
            <p class="lead my-4">
              We focus on teaching our users the best ways to improve their day 
              to day healthy habits and introduce them to new ones.
              
            </p>
		  <?php }else{ ?>
		  <h1>Hello <span class="text-warning"> Admin! </span></h1>
            <p class="lead my-4">
              <a href="/admin/">Go to dashboard</a>
            </p>
		  <?php } ?>
          <img
            class="img-fluid d-none d-sm-block"
            style="width: 150px; min-height: 200px;"
            src="img/yogaman.png"
            alt=""
          />
        </div>
      </div>
    </section>

    <!-- Blue Line -->
    <section class="bg-primary text-light p-1">
    
    </section>

    <!-- Boxes -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-dark b1 text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi-bag-fill"></i>
                </div>
                <h3 class="card-title mb-3">Products</h3>
                <p class="card-text">
                  Here you can see our recommended wearables,clothes and everything we wanted to share with you.
                </p>
                <a href="#" class="btn btn-primary">More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-secondary b2 text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi-bag-fill"></i>
                </div>
                <h3 class="card-title mb-3">Products</h3>
                <p class="card-text">
                  Here we have recommended some of our favorite protein products,that are tested by proffesionals.
                </p>
                <a href="#" class="btn btn-dark"> More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-dark b3 text-light">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi-bag-fill"></i>
                </div>
                <h3 class="card-title mb-3">Products</h3>
                <p class="card-text">
                  Here you can check our favorite gear and equipments that will help your activities at home or at gym.
                </p>
                <a href="#" class="btn btn-primary"> More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="/img/diet.png" 
            class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>How food dictates our lives</h2>
            <p class="lead">
              Diet is the key to someones fitness journey.
            </p>
            <p>
              You can be the most dedicated,disciplined,hardworking person at the gym but at home you may be doing mistakes
              that are affecting your results.Here we give you our guidance to the best ways to find out which diets help you.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Products</h2>
            <p class="lead">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Similique deleniti possimus magnam corporis ratione facere!
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
              reiciendis eius autem eveniet mollitia, at asperiores suscipit
              quae similique laboriosam iste minus placeat odit velit quos,
              nulla architecto amet voluptates?
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
          <div class="col-md">
            <img src="img/workout.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="/img/products.png" 
            class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>Workouts</h2>
            <p class="lead">
              Health is wealth , and working out is wealth.
            </p>
            <p>
              You can be the most dedicated,disciplined,hardworking person at the gym but at home you may be doing mistakes
              that are affecting your results.Here we give you our guidance to the best ways to find out which workout helps you.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
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
                How can I create an account ?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
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
                Can I trust your recommended products ?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
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
                Is all the information supported by proffesionals ?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
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
                Are the Diets proven to work ?
              </button>
            </h2>
            <div
              id="question-four"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                beatae fuga animi distinctio perspiciatis adipisci velit maiores
                totam tempora accusamus modi explicabo accusantium consequatur,
                praesentium rem quisquam molestias at quos vero. Officiis ad
                velit doloremque at. Dignissimos praesentium necessitatibus
                natus corrupti cum consequatur aliquam! Minima molestias iure
                quam distinctio velit.
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
    </section>

    

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; 2021 UBT - Web Engineering</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>
<!-- Modal per krijimin e llogarise -->
<!-- Modal per login  -->
<?php include 'loginModal.php';?>

<script
src="js/bootstrap.js"

></script>
  </body>
</html>