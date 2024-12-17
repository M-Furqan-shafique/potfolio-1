

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Navbar with Tailwind CSS</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Optional: You can keep any custom styling here */
    .background {
      background-image: url('bg.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>

<body class="bg-gray-50">
  

  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top bg-gray-800 shadow-md">
    <div class="container mx-auto px-4 py-3">
      <a href="#" class="text-white text-xl font-bold">Furqan</a>
      <div class="flex justify-between items-center">
        <div class="space-x-4">
          <a href="#Home" class="text-white hover:text-gray-400">Home</a>
          <a href="#AboutMe" class="text-white hover:text-gray-400">About Me</a>
          <a href="#Portfolio" class="text-white hover:text-gray-400">Portfolio</a>
          <a href="#Testimonials" class="text-white hover:text-gray-400">Testimonials</a>

        </div>
      
        <a href="/login" class="bg-cornflowerblue text-white px-4 py-2 rounded-lg hover:bg-blue-600">login</a>
      </div>
    </div>
  </nav>

  <!-- Home Section -->
  <div id="Home" class="container mx-auto pt-20">
    <div class="flex flex-col sm:flex-row items-center space-y-10 sm:space-y-0">
      <div class="sm:w-7/12 text-center sm:text-left">
        <p class="text-lg">Hey, I am Furqan</p>
        <h1 class="text-4xl font-bold text-gray-900">I Create Product Design <br>and Brand Experience</h1>
        <p class="text-lg mt-4">Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit. Dolores ex fugit, excepturi <br> aliquam labore harum molestias eum.</p>
        <button class="bg-cornflowerblue text-white px-6 py-3 mt-4 rounded-lg hover:bg-blue-600">Get in Touch</button>
      </div>
      <div class="sm:w-5/12">
        <div class="background">
          <img src="images/mfurqan.png" alt="Furqan Image" class="w-full h-auto rounded-lg">
        </div>
        <img src="upload/{{ @$general['image']}}" alt="">
      </div>
    </div>
  </div>

  <!-- My Skills Section -->
  <div class="container mx-auto mt-16 text-center">
    <h2 class="text-3xl font-bold">My Expertise</h2>
    <p class="text-lg mt-4">Some of the skills I have gained throughout my career</p>
  </div>

  <div class="container mx-auto mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="bg-bisque p-6 rounded-lg shadow-md">
      <i class="fas fa-right-to-bracket text-4xl mb-4"></i>
      <h4 class="text-xl font-semibold">Strategy & Direction</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla natus illum quisquam quae similique.</p>
    </div>
    <div class="bg-bisque p-6 rounded-lg shadow-md">
      <i class="fab fa-slack text-4xl mb-4"></i>
      <h4 class="text-xl font-semibold">Branding & Logo</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod vel nihil accusamus non dicta rem minima.</p>
    </div>
    <div class="bg-bisque p-6 rounded-lg shadow-md">
      <i class="fas fa-pen-fancy text-4xl mb-4"></i>
      <h4 class="text-xl font-semibold">UI & UX Design</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe animi sequi officia, quo tenetur ad pariatur.</p>
    </div>
    <div class="bg-bisque p-6 rounded-lg shadow-md">
      <i class="fas fa-code text-4xl mb-4"></i>
      <h4 class="text-xl font-semibold">Webflow Development</h4>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sunt culpa praesentium quidem inventore.</p>
    </div>
  </div>

  <!-- About Me Section -->
  <div id="AboutMe" class="container mx-auto mt-16 flex flex-col sm:flex-row items-center space-y-10 sm:space-y-0">
    <div class="sm:w-5/12">
      <div class="background">
        <img src="images/mfurqan.png" alt="Furqan Image" class="w-full h-auto rounded-lg">
      </div>
      <img src="upload/{{ @$general['image']}}" alt="">
    </div>
    <div class="sm:w-7/12 text-center sm:text-left">
      <h1 class="text-4xl font-bold">About Me</h1>
      <p class="text-lg mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur unde saepe quas illo architecto optio vero?</p>
    </div>
  </div>

  <!-- Portfolio Section -->
  <div id="Portfolio" class="container mx-auto mt-16 text-center">
    <h2 class="text-4xl font-bold">Portfolio</h2>
    <button class="bg-cornflowerblue text-white px-6 py-3 mt-4 rounded-lg hover:bg-blue-600">Visit My Site</button>
  </div>

  <!-- Portfolio Cards -->
  <div class="container mx-auto mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="card w-full bg-white rounded-lg shadow-md">
      <img src="images/mfurqan.png" class="w-full h-48 object-cover rounded-t-lg" alt="Card image">
      <div class="p-6">
        <h4 class="text-xl font-semibold">M Furqan</h4>
        <p class="text-gray-700 mt-2">Some example text some example text. John Doe is an architect and engineer.</p>
        <a href="#" class="bg-cornflowerblue text-white px-4 py-2 rounded-lg mt-4 inline-block">See Profile</a>
      </div>
    </div>
    <div class="card w-full bg-white rounded-lg shadow-md">
      <img src="images/app.jpg" class="w-full h-48 object-cover rounded-t-lg" alt="Card image">
      <img src="upload/{{ @$general['image']}}" alt="">
      <div class="p-6">
        <h4 class="text-xl font-semibold">App Dashboard</h4>
        <p class="text-gray-700 mt-2">Some example text some example text. John Doe is an architect and engineer.</p>
        <a href="#" class="bg-cornflowerblue text-white px-4 py-2 rounded-lg mt-4 inline-block">See Profile</a>
      </div>
    </div>
    <div class="card w-full bg-white rounded-lg shadow-md">
      <img src="images/laptop.jpg" class="w-full h-48 object-cover rounded-t-lg" alt="Card image">
      <img src="upload/{{ @$general['image']}}" alt="">
      <div class="p-6">
        <h4 class="text-xl font-semibold">Easy Rent</h4>
        <p class="text-gray-700 mt-2">Some example text some example text. John Doe is an architect and engineer.</p>
        <a href="#" class="bg-cornflowerblue text-white px-4 py-2 rounded-lg mt-4 inline-block">See Profile</a>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
  <div id="Testimonials" class="container mx-auto mt-16 bg-azure-100 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Furqan Testimonials</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="card bg-white rounded-lg shadow-md p-6">
        <img src="images/woman 1.png" alt="Testimonial Image" class="w-48 h-48 object-cover rounded-full mx-auto">
        <img src="upload/{{ @$general['image']}}" alt="">
        <div class="text-center mt-4">
          <div class="text-xl font-semibold">Ms. Fatima</div>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        </div>
      </div>
      <div class="card bg-white rounded-lg shadow-md p-6">
        <img src="images/man 2.png" alt="Testimonial Image" class="w-48 h-48 object-cover rounded-full mx-auto">
        <img src="upload/{{ @$general['image']}}" alt="">
        <div class="text-center mt-4">
          <div class="text-xl font-semibold">Mr. Ahmed</div>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        </div>
      </div>
      <div class="card bg-white rounded-lg shadow-md p-6">
        <img src="images/Furqan 2.png" alt="Testimonial Image" class="w-48 h-48 object-cover rounded-full mx-auto">
        <img src="upload/{{ @$general['image']}}" alt="">
        <div class="text-center mt-4">
          <div class="text-xl font-semibold">Mr. Furqan</div>
          <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
 



//
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</html>