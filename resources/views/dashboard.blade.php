<x-app-layout>
    <x-slot name="header">
        <h2  class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <style>
            body {
         padding-top: 56px;
           } 
           .btna{
            background-color:cornflowerblue;
            color: white;
            float: right;
           }    
           .background{
            background-image: url(bg.jpeg);
            width: 80%;
            
            background-size: cover;
            background-repeat: no-repeat;
           }
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
