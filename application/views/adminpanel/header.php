<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('assets/pics/icon12.png');?>" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/dashboard/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
<title>Blogzo Admin Panel</title>

<header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center ">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
    <img src="<?php echo base_url('assets/pics/icon11.png');?>" height="100px" width="100px " class="icon">
      <span class="ml-3 font-bold text-2xl">Blogzo Admin Panel</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-lg justify-center border-white font-mono text-xl " >
   <a class="mr-5 hover:text-white  " href="<?= base_url().'admin/dashboard'?>">Dashboard</a>
   <a class="mr-5 hover:text-white" href="<?= base_url().'admin/blog/addblog' ?>">Add Blog</a>
      <a class="mr-5 hover:text-white"  href="<?= base_url().'admin/blog/' ?>">View Blogs</a>
    </nav>
    <a class="nav-link" href="<?= base_url().'admin/login/logout' ?>">
    <button class="flex mx-auto mt-20 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">LOGOUT &emsp;  <span class="bi bi-arrow-right-circle-fill"></span>
    </button></a>
  </div>
</header>

  </head>
  <body>
    
   


